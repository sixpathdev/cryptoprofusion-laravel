<?php

namespace App\Http\Controllers;

use App\Referral;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                $ref->referral = $request->input('ref');
                $ref->referred = $referred_user->id;
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
        // if (Auth::guard('admin')) {
        // 	Auth::logout();
        // return redirect('/admin/login');
        // }
        Auth::logout();
        return redirect('/login');
    }
}
