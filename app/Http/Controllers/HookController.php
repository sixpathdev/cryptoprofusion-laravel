<?php

namespace App\Http\Controllers;

use App\Duepayment;
use App\Investmentprofit;
use App\Mail\Withdrawal;
use App\Transaction;
use App\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HookController extends Controller
{
    public function duehook()
    {
        $get_due_users = Transaction::where('payment_status', 'pending')->get();
        // $getDay = strtolower(Carbon::now()->isoFormat('dddd'));
        for ($i = 0; $i < count($get_due_users); $i++) {
            $eachUser = User::where('id', $get_due_users[$i]["userId"])->first();
            $time = $get_due_users[$i]["created_at"]->diffForHumans();

            $silver = 0.05;
            $gold = 0.07;

            $amount = 0;

            if (explode(' ', $time)[0] == '7' || explode(' ', $time)[0] > '7' && explode(' ', $time)[0] <= '12') {
                $fullname = $eachUser->fullname;
                $wallet_address = $eachUser->wallet->address;
                // $amount = (float)$get_due_users[$i]->to_amount * $percentage;
                if ($get_due_users[$i]->paymentplan == 'silver') {
                    $amount = (float)$get_due_users[$i]->to_amount * $silver;
                } elseif ($get_due_users[$i]->paymentplan == 'gold') {
                    $amount = (float)$get_due_users[$i]->to_amount * $gold;
                }
                $due_on = $time;

                try {

                    Mail::to('billing@cryptoprofusion.com')->send(new Withdrawal($fullname, $amount, $wallet_address, $due_on));

                    $payment = new Duepayment();
                    $payment->fullname = $fullname;
                    $payment->plan = $get_due_users[$i]->paymentplan;
                    $payment->wallet_address = $wallet_address;
                    $payment->amount_to_pay = $amount;
                    $payment->status = 'pending';
                    $payment->save();
                } catch (Exception $e) {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
}
