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
        $this->app->singleton(Gateway::class, function ($app){
            return new Gateway([
                'environment' => 'sandbox',
                'merchantId' => 'gdfpm4m8yybxdc6n',
                'publicKey' => '7n7gdk6fqkss8fnn',
                'privateKey' => 'efd65bd4e6a7803699e43ac9418f897d'
            ]);
        });
    }
}