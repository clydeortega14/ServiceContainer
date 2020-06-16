<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\PaymentContract;
use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        /*
         * Register class
         * the bind method is to bind the class in the first parameter of the bind method 
         * and then return new instance of a class
         * The singleton method
         * this method binds the class and always return the instance of the first call
         * 
        */
        $this->app->singleton(PaymentContract::class, function(){

            if(request()->has('credit')){

                return new CreditPaymentGateway('Php');
            }

            return new BankPaymentGateway('USD');

        });
    }
}
