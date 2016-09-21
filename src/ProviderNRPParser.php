<?php namespace kf24\nrpparser;

use Illuminate\Support\ServiceProvider;

class ProviderNRPParser extends ServiceProvider
{

	/**
	 * Register the service provider.
	 * @return void
	 */
	public function register()
	{
            
	}


	/**
	 *
	 */
	public function boot()
	{
            
          $this->app['validator']->extend('nip', 'kf24\nrpparser\Validation\walidacja@nip');

	}


}
