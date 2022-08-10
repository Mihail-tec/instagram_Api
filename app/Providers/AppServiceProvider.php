<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
	// 	//check that app is local
	// 	if (env('APP_ENV') === 'local') {
	// //if local register your services you require for development
	// 		$this->app->register('Barryvdh\Debugbar\ServiceProvider');
	// 	} else {
	// //else register your services you require for production
	// 		$this->app['request']->server->set('HTTPS', true);
	// 	}
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{

		// if (env('APP_ENV') === 'local') {
		URL::forceScheme('https');
		// }
		// if (env('APP_ENV') === 'production') {
		// URL::forceScheme('https');
		// }


		// if (env('APP_ENV') === 'local') {
		// 	$this->app['request']->server->set('http', true);
		// } else {
		// 	$this->app['request']->server->set('https', true);
		// }



		// if (env('APP_ENV') === 'local') {
		// 	$this->app['request']->server->set('https', true);
		// } else {
		// 	$this->app['request']->server->set('http', true);
		// }
	}
}
