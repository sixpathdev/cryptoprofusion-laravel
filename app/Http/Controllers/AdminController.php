<?php

namespace App\Http\Controllers;

use App\Idcard;
use App\Mail\ClientpaymentSuccess;
use App\Mail\Idverified;
use App\Referral;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use stdClass;

class AdminController extends Controller
{
    public function admindashboard(Request $request)
    {
        $deposited_amount = Transaction::where('payment_status', 'verified')->pluck('amount');
        $total_deposited_amount = 0;
        for ($i = 0; $i < count($deposited_amount); $i++) {
            $a = (int) $deposited_amount[$i];
            $total_deposited_amount += $a;
        }

        $referral_bonus = Referral::all()->pluck('bonus');
        $total_referral_amount = 0;
        for ($i = 0; $i < count($referral_bonus); $i++) {
            $a = (int) $referral_bonus[$i];
            $total_referral_amount += $a;
        }
        $user_arr = array();
        $user_obj = new stdClass();

        $mytransactions = Transaction::where('userId', Auth::id())->paginate(7);
        $all_users_count = User::all();
        $refBonusAmount = (float)0;

        for ($i = 0; $i < count($all_users_count); $i++) {
            $user_obj->name = $all_users_count[$i]['fullname'];
            $user_obj->email = $all_users_count[$i]['email'];
            $my_referred_user = Referral::where('user_id', $all_users_count[$i]['id'])->first();
            $refBonus = Referral::where('referral_id', $all_users_count[$i]['id'])->get();
            if ($my_referred_user) {
                $user = User::where('id', $my_referred_user->user_id)->first();
                $user_obj->referral = $user->fullname;
                for ($j = 0; $j < count($refBonus); $j++) {
                    $refBonusAmount = $refBonusAmount + $refBonus[$j]['bonus'];
                }
                $user_obj->bonus = $refBonusAmount;
            } else {
                return view('admin.dashboard', compact('user_arr', 'all_users_count', 'total_deposited_amount', 'total_referral_amount', 'mytransactions'));
            }
        }
        array_push($user_arr, $user_obj);
        return view('admin.dashboard', compact('user_arr', 'all_users_count', 'total_deposited_amount', 'total_referral_amount', 'mytransactions'));
    }

    public function supmail()
    {
        return view('emails.idverified');
    }

    public function verifyClientPayment(Request $request)
    {
        $client_id = $request->input('txid');
        $user_id = $request->input('userId');

        $isFirstPayment = Transaction::where('userId', $user_id)->get();

        if ($isFirstPayment->count() == 1) {
            $amount = (int)$isFirstPayment[0]->amount;
            $fivepercent = $amount * 0.05;
            $referral = Referral::where('referred', $user_id)->first();
            $referral->bonus = $fivepercent;
            $referral->save();

            $transaction = Transaction::where('id', $client_id)->where('verified', 0)->first();
            $transaction->payment_status = 'verified';
            $transaction->verified = 1;
            $transaction->save();

            $user = User::where('id', $user_id)->first();
            Mail::to($user->email)->send(new ClientpaymentSuccess($user->fullname, $amount));
            $request->session()->flash('success', "User payment verified successfully");
        } else {
            $transaction = Transaction::where('id', $client_id)->where('verified', 0)->first();
            $transaction->payment_status = 'verified';
            $transaction->verified = 1;
            $transaction->save();

            $request->session()->flash('success', "User payment verified successfully");
            return back();
        }
    }

    public function paymentproofs()
    {
        $paymentproofs = Transaction::where('verified', 'paid')->paginate(10);
        return view('admin.proofs', compact('paymentproofs'));
    }

    public function idproofs()
    {
        $idproofs = Idcard::where('verified', 'false')->paginate(10);
        return view('admin.uploaded-ids', compact('idproofs'));
    }

    public function verifyUserId(Request $request)
    {
        $userId = $request->input('userId');
        $user = User::where('id', $userId)->first();
        Mail::to($user->email)->send(new Idverified($user->fullname));

        $user_id_card = Idcard::where('userId', $userId)->first();
        $user_id_card->verified = true;
        $user_id_card->save();

        $request->session()->flash('success', "User verified successfully");
        return back();
    }

    public function listmembers()
    {
        $users_list = User::where('email', '!=', 'sixpathdev@gmail.com')->paginate(10);
        return view('admin.list-members', compact('users_list'));
    }
    
    public function directRef($id)
    {
        $user = User::where('user_id', $id)->first();
        return $user->fullname;
    }

    public function viewuser($id)
    {
        $user = User::findOrFail($id);
        $directDescendant = $this->directRef($id);
        return view('admin.viewuser', compact('user', 'directDescendant'));
    }
}
