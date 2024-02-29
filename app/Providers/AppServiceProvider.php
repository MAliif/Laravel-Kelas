<?php

namespace App\Providers;

Use Illuminate\Pagination\Paginator;
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
        // "useBootstrapFive" lebih bagus ada resultnya kalo "useBootstrapFour" gak ada resultnya
        Paginator::useBootstrapFive();
    }
}
