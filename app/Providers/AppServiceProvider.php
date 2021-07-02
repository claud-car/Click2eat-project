<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;

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
        $this->app->singleton(Gateway::class, function($app) {
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'wp539x3tkmxqrdkq',
                    'publicKey' => 'hpthhyt65v4ycjy6',
                    'privateKey' => 'e10d5e6305080c2640d04d3cc3bdfb8d'
                ]                
            );
        });
    }
}