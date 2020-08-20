<?php

namespace App\Http\Controllers;

use App\Mail\Newpassword;
use App\Referral;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $request->validate([
                'fullname' => 'required|max:255',
                'email' => 'required|unique:users',
                'password' => 'required',
                'phone' => 'required|unique:users',
                'ref' => 'required',
            ]);

            $userExists = User::where('email', $request->input('email'))->first();

            if (!$userExists || $userExists == null) {
                $newUser = new User;
                $newUser->email = $request->input('email');
                $newUser->fullname = $request->input('fullname');
                $newUser->password = Hash::make($request->input('password'));
                $newUser->phone = $request->input('phone');
                $newUser->photo = '/profile/avatar.png';
                $newUser->save();

                $referred_user = User::where('email', $request->input('email'))->first();
                $ref = new Referral;
                $ref->referral_id = $request->input('ref');
                $ref->user_id = $referred_user->id;
                $ref->bonus = 0;
                $ref->save();

                $request->session()->flash('success', "Registration successful");
                return redirect('/login');
                return back();
            } else {
                $request->session()->flash('error', "Account already exists!");
                return back();
            }
        } catch (\Exception $e) {

            $request->session()->flash('error', $e);
            return back();
        }
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember_me = $request->input('remember');

        if (Auth::attempt($credentials, $remember_me)) {
            $isverified = User::where('id', Auth::id())->first();
            $request->session()->flash('success', "You're logged in successfully");
            if ($isverified->type == "user") {
                return redirect('/user/dashboard');
            } else {
                return redirect('/admin/dashboard');
            }
        } else {
            $request->session()->flash('error', "Authorization failed");
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function forgotpassword(Request $request)
    {
        $email = $request->input('email');
        $userExists = User::where('email', $email)->first();
        if (!$userExists) {
            $request->session()->flash('error', "Failed to reset password");
            return back();
        } else {
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzAZENDIKIDHYGTGYHJK';
            $verifycode = substr(str_shuffle($permitted_chars), 0, 8);
            $userExists->verifycode = $verifycode;
            $userExists->save();
            Mail::to('support@cryptoprofusion.com')->send(new Newpassword($email, $verifycode));
            $request->session()->flash('success', "Your new password has been sent to your email");
            return redirect('/login');
        }
    }
}
