<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Http\View\Composers\ChannelComposer;
use App\Models\Channel;
use Illuminate\Support\Facades\View;
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
        // $this->app->bind(PaymentGateway::class, function ($app) {
        //     return new PaymentGateway('usd');
        // });

        // $this->app->singleton(PaymentGateway::class, function ($app) {
        //     return new PaymentGateway('usd');
        // });

        $this->app->singleton(PaymentGatewayContract::class, function ($app) {
            if (request()->has('credit')) {
                return new CreditPaymentGateway('usd');
            }
            return new BankPaymentGateway('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Option 1
        // attach data to all views
        // View::share('channels', Channel::orderBy('name')->get());

        // Option 2
        // attach data to specific views
        // View::composer(['channel.index', 'channel.post.create'], function ($view) {
        //     $view->with('channels', Channel::orderBy('name')->get());
        // });

        // Option 3
        View::composer(['channel.index', 'channel.post.create'], ChannelComposer::class);
    }
}
