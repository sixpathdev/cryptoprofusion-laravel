<?php

namespace App\Http\Controllers;

use App\Idcard;
use App\Referral;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admindashboard()
    {
        $deposited_amount = Transaction::all()->pluck('amount');
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

        $mytransactions = Transaction::where('userId', Auth::id())->paginate(7);

        return view('admin.dashboard', compact('total_deposited_amount', 'total_referral_amount', 'mytransactions'));
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

            return back()->with('success', 'User payment verified successfully');
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
        $user_id_card = Idcard::where('userId', $request->input('userId'))->first();
        $user_id_card->verified = true;
        $user_id_card->save();

        $request->session()->flash('success', "User verified successfully");
        return back();
    }
}
