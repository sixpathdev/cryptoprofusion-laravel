<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['user.dashboard', 'admin.dashboard', 'user.payment', 'user.profile', 'user.payment-plan'], function($view){
            $user = Auth::user();
            $view->with('user', $user);
        });
    }
}
