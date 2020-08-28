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


Route::get('/', function () {
    return view('home');
});

Route::get('/login', "AuthController@loginForm")->name('login');

Route::get('/about-us', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/forgotpassword', function () {
    return view('auth.forgotpassword');
});
Route::get('/resetpassword', function () {
    return view('auth.resetpassword');
});
Route::get('/register', "AuthController@registerForm");
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::post('/forgotpassword', 'AuthController@forgotpassword');
Route::put('/resetpassword', 'AuthController@resetpassword');
Route::get('/logout', 'AuthController@logout');
Route::post('/contactsupport', 'ContactController@contactsupport');

//Hook for checking due payment
Route::get('/duehook', 'HookController@duehook');



Route::get('/getdescendants', 'UserController@getdescendants');
Route::get('/supmail', 'AdminController@supmail');

Route::prefix('user')->group(function () {
    Route::get('/dashboard', 'UserController@dashboard');
    Route::get('/profile', 'UserController@profile');
    Route::put('/profile', 'UserController@updateProfile');
    Route::get('/payment-plan', 'UserController@paymentplanPage');
    Route::get('/plan/{plan_name}', 'UserController@paymentForm');
    Route::post('/uploadproof', 'UserController@uploadproof');
    Route::post('/uploadid', 'UserController@uploadid');
    Route::put('/uploadphoto', 'UserController@uploadprofilephoto');

});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@admindashboard');
    Route::get('/payment-proofs', 'AdminController@paymentproofs');
    Route::get('/id-proofs', 'AdminController@idproofs');
    Route::put('/verifypayment', 'AdminController@verifyClientPayment');
    Route::put('/verifyUserId', 'AdminController@verifyUserId');
});
