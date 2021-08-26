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
                'publicKey' => 'hb5rjms8n6mctz6f',
                'privateKey' => '335dc7731a769cfdcebef7579e79f9a3'
            ]);
        });
    }
}