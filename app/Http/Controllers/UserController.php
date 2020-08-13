<?php

namespace App\Http\Controllers;

use App\Duepayment;
use App\Investmentprofit;
use App\Paymentplan;
use App\Referral;
use App\Transaction;
use App\User;
use App\Wallet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        for($i=0; $i<count($deposited_amount); $i++) {
            $a = (int) $deposited_amount[$i];
            $total_deposited_amount += $a;
        }

        $referral_bonus = Referral::where('referral', Auth::id())->pluck('bonus');
        $total_referral_amount = 0;
        for($i=0; $i<count($referral_bonus); $i++) {
            $a = (int) $referral_bonus[$i];
            $total_referral_amount += $a;
        }

        $mytransactions = Transaction::where('userId', Auth::id())->paginate(5);


        // $investment_profits = Duepayment::where('email', Auth::user()->email)->pluck('amount_to_pay');
        // $total_investment_profit = 0;
        // for($i=0; $i<count($investment_profits); $i++) {
        //     $a = (int) $investment_profits[$i];
        //     $total_investment_profit += $a;
        // }
        return view('user.dashboard', compact('total_deposited_amount','total_referral_amount','mytransactions'));
    }

    public function admindashboard()
    {
        $deposited_amount = Transaction::all()->pluck('amount');
        $total_deposited_amount = 0;
        for($i=0; $i<count($deposited_amount); $i++) {
            $a = (int) $deposited_amount[$i];
            $total_deposited_amount += $a;
        }

        $referral_bonus = Referral::all()->pluck('bonus');
        $total_referral_amount = 0;
        for($i=0; $i<count($referral_bonus); $i++) {
            $a = (int) $referral_bonus[$i];
            $total_referral_amount += $a;
        }

        $mytransactions = Transaction::where('userId', Auth::id())->paginate(7);

        return view('admin.dashboard', compact('total_deposited_amount','total_referral_amount','mytransactions'));
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'address' => 'required|unique:wallets'
        ]);

        dd('ddd');
        $user = User::where('id', Auth::id());
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();

        $wallet = Wallet::where('user', Auth::id())->first();
        $wallet->address = $request->input('wallet');
        $wallet->save();

        $request->session()->flash('success', "Profile updated successfully");
        return redirect()->intended('/user/profile');
    }

    public function paymentplanPage()
    {
        $plans = Paymentplan::all();

        return view('user.payment-plan', compact('plans'));
    }

    public function paymentForm($plan_name)
    {
        $plan = Paymentplan::where('name', $plan_name)->first();

        $mytransactions = Transaction::where('userId', Auth::id())->paginate(5);

        return view('user.payment', compact('plan','mytransactions'));
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

        try{
            if ($file = $request->file('image_proof')) {
                $destinationPath = 'payment-proofs/'; // upload path
                $filepath = date('Y-m-d-s') . "-proof." . $file->getClientOriginalExtension();
                $file->move($destinationPath, $filepath);
                $photo = $destinationPath . $filepath;
    
                $transaction = new Transaction();
                $transaction->userId = Auth::id();
                $transaction->paymentplan = $plan;
                $transaction->amount = $request->input('amount');
                $transaction->bitcoin_address = $user_wallet->wallet->address;
                $transaction->proof = $photo;
                $transaction->payment_status = 'pending';
                $transaction->verified = false;
                $transaction->save();
    
                return back()->with('success', 'Payment proof uploaded successfully');
            }
        } catch(Exception $e) {
            return back()->with('error', $e);
        }   
    }

    public function verifyClientPayment(Request $request)
    {
        $client_id = $request->input('txid');
        $user_id = $request->input('userId');

        $isFirstPayment = Transaction::where('userId', $user_id)->get();

        if($isFirstPayment->count() == 1) {
            $amount = (int)$isFirstPayment->amount;
            $fivepercent = $amount * 0.05;
            $referral = Referral::where('referred', $user_id)->first();
            $referral->bonus = $fivepercent;
            $referral->save();
        }
        $transaction = Transaction::where('id', $client_id)->where('verified', 0)->first();
        $transaction->payment_status = 'success';
        $transaction->verified = 1;
        $transaction->save();

        return back()->with('success', 'User verified successfully');
    }
    
}
