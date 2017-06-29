<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;  
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //::defaultStringLength(191);
        view()->composer('sidebar', function($view)
            {
            $view->with('archives', \App\Post::archives());
            });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
