<?php

namespace App\Providers;

use View;
use AppHelper;

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
        View::composer(['*'], function ($view) {

            $site = AppHelper::instance()->site();

            $view->with(compact('site'));
        });
    }
}
