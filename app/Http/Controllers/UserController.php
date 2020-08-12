<?php

namespace App\Http\Controllers;

use App\Paymentplan;
use App\User;
use App\Wallet;
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
        return view('user.dashboard');
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

        return view('user.payment', compact('plan'));
    }
}
