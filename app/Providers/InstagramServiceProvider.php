<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Classes\InstagramAPI;

class InstagramServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('InstagramAPI', function(){
            return new InstagramAPI();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
