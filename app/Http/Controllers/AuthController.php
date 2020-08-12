<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        //start temporay transaction
        DB::beginTransaction();

        try {
            $request->validate([
                'fullname' => 'required|max:255',
                'email' => 'required|unique:users',
                'password' => 'required',
                'phone' => 'required|unique:users'
            ]);

            $userExists = User::where('email', $request->input('email'))->first();

            if (!$userExists) {
                User::create([
                    'email' => $request->input('email'),
                    'fullname' => $request->input('fullname'),
                    'phone' => $request->input('phone'),
                    'password' => Hash::make($request->get('password')),
                ]);

                //if operation was successful save changes to database
                DB::commit();

                $request->session()->flash('success', "Registration successful");
                return redirect('/login');
            } else {
                $request->session()->flash('error', "Account already exists!");
                return back();
            }
        } catch (\Exception $e) {

            //if any operation fails, Thanos snaps finger - user was not created
            DB::rollBack();

            $request->session()->flash('error', "Account Not created, Try Again!");
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
