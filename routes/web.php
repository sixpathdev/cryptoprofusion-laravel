<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function() { return view('home'); });

Route::get('/login', "AuthController@loginForm")->name('login');

Route::get('/about-us', function() { return view('about'); });
Route::get('/contact-us', function() { return view('contact'); });
Route::get('/register', "AuthController@registerForm");
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::get('/logout', 'AuthController@logout');


Route::prefix('user')->group(function () {
    Route::get('/dashboard', 'UserController@dashboard');
    Route::get('/profile', 'UserController@profile');
    Route::put('/profile', 'UserController@updateProfile');
    Route::get('/payment-plan', 'UserController@paymentplanPage');
    Route::get('/plan/{plan_name}', 'UserController@paymentForm');
    Route::post('/initialize-transaction', 'TransactionController@createCharge');
    Route::get('/charges', 'TransactionController@getAllCharges');
    Route::get('/webhook', 'TransactionController@webhook');
});