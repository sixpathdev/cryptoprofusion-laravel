<?php

namespace App\Http\Controllers;

use App\Idcard;
use App\Paymentplan;
use App\Referral;
use App\Transaction;
use App\User;
use App\Wallet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JD\Cloudder\Facades\Cloudder;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $deposited_amount = Transaction::where('userId', Auth::id())->pluck('amount');
        $total_deposited_amount = 0;
        for ($i = 0; $i < count($deposited_amount); $i++) {
            $a = (int) $deposited_amount[$i];
            $total_deposited_amount += $a;
        }

        $referral_bonus = Referral::where('referral_id', Auth::id())->pluck('bonus');
        $total_referral_amount = 0;
        for ($i = 0; $i < count($referral_bonus); $i++) {
            $a = (int) $referral_bonus[$i];
            $total_referral_amount += $a;
        }

        $mytransactions = Transaction::where('userId', Auth::id())->paginate(5);
        $hasIdCard = Idcard::where('userId', Auth::id())->first();

        return view('user.dashboard', compact('hasIdCard', 'total_deposited_amount', 'total_referral_amount', 'mytransactions'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {

        try {
            if (empty($request->input('wallet_address')) || empty($request->input('fullname')) || empty($request->input('email'))) {
                $request->session()->flash('error', "All fields are required");
                return back();
            }
            $user = User::where('id', Auth::id())->first();
            $user->fullname = $request->input('fullname');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->save();

            $wallet = Wallet::where('user_id', Auth::id())->first();
            if (!$wallet) {
                $newWallet = new Wallet;
                $newWallet->address = $request->input('wallet_address');
                $newWallet->user_id = Auth::id();
                $newWallet->save();
                $request->session()->flash('success', "Profile updated successfully");
                return back();
            } else {
                $wallet->address = $request->input('wallet_address');
                $wallet->save();
                $request->session()->flash('success', "Profile updated successfully");
                return back();
            }
        } catch (Exception $e) {
            $request->session()->flash('error', "An error occured");
            return back();
        }
    }

    public function paymentplanPage()
    {
        $plans = Paymentplan::all();

        return view('user.payment-plan', compact('plans'));
    }

    public function paymentForm($plan_name)
    {
        $userUploadedId = Idcard::where('userId', Auth::id())->get();

        if (count($userUploadedId) < 1) {
            return redirect('/user/dashboard')->with('error', 'Please upload your valid Identity card');
        }

        $plan = Paymentplan::where('name', $plan_name)->first();

        $mytransactions = Transaction::where('userId', Auth::id())->paginate(5);

        return view('user.payment', compact('plan', 'mytransactions'));
    }

    public function uploadproof(Request $request)
    {
        $request->validate([
            'plan' => 'required',
            'amount' => 'required',
            'image_proof'  => 'required|mimes:png,jpeg,jpg|max:2048',
        ]);

        $plan = $request->input('plan');

        $user_wallet = User::where('id', Auth::id())->first();

        try {
            if ($file = $request->file('image_proof')) {
                $image_name = $request->file('image_proof')->getRealPath();
                Cloudder::upload($image_name, null, array('folder' => 'payment_proofs', "overwrite" => TRUE, "resource_type" => "image"));
                list($width, $height) = getimagesize($image_name);
                $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);

                $transaction = new Transaction();
                $transaction->userId = Auth::id();
                $transaction->paymentplan = $plan;
                $transaction->amount = $request->input('amount');
                $transaction->bitcoin_address = $user_wallet->wallet->address;
                $transaction->proof = $image_url;
                $transaction->payment_status = 'pending';
                $transaction->verified = false;
                $transaction->save();

                return back()->with('success', 'Payment proof uploaded successfully');
            }
        } catch (Exception $e) {
            return back()->with('error', $e);
        }
    }

    public function showproof()
    {
        $transactions = Transaction::all();
        return view('admin.proofs', compact('transactions'));
    }

    public function uploadid(Request $request)
    {
        $request->validate([
            'valid_id'  => 'required|mimes:png,jpeg,jpg|max:2048',
        ]);

        try {
            if ($file = $request->file('valid_id')) {
                $image_name = $request->file('valid_id')->getRealPath();
                Cloudder::upload($image_name, null, array('folder' => 'identity_cards', "overwrite" => TRUE, "resource_type" => "image"));
                list($width, $height) = getimagesize($image_name);
                $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
                $res = Cloudder::getResult();
                
                $idcard = new Idcard();
                $idcard->userId = Auth::id();
                $idcard->name = Auth::user()->fullname;
                $idcard->verified = false;
                $idcard->idurl = $res['secure_url'];
                $idcard->save();

                $request->session()->flash('success', "Identity card uploaded successfully");
                return back();
            }
        } catch (Exception $e) {
            $request->session()->flash('error', "Error uploading card");
            return back();
        }
    }

    public function uploadprofilephoto(Request $request)
    {
        $request->validate([
            'profile_photo'  => 'required|mimes:png,jpeg,jpg|max:2048',
        ]);

        try {
            if ($file = $request->file('profile_photo')) {
                $image_name = $request->file('profile_photo')->getRealPath();
                Cloudder::upload($image_name, null, array('folder' => 'profile_photos', "overwrite" => TRUE, "resource_type" => "image"));
                list($width, $height) = getimagesize($image_name);
                $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
                $res = Cloudder::getResult();
                
                $user = User::where('id', Auth::id())->first();
                $user->photo = $res['url'];
                // $user->photo = $res['secure_url'];
                $user->save();

                $request->session()->flash('success', "Photo updated successfully");
                return back();
            }
        } catch (Exception $e) {
            $request->session()->flash('error', "Error uploading photo");
            return back();
        }
    }

    public function getdescendants()
    {
        $users = User::whereNull('user_id')
            ->with('childrenUserDescendants')
            ->get();
        dd(count($users, COUNT_RECURSIVE));
    }
}
