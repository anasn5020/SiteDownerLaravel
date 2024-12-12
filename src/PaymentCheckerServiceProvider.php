<?php

namespace Anasnasr\SiteDownerLaravel;

use Illuminate\Support\ServiceProvider;

class PaymentCheckerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish configuration
        $this->publishes([
            __DIR__.'/Config/paymentchecker.php' => config_path('paymentchecker.php'),
        ], 'config');

        // Load views
        $this->loadViewsFrom(__DIR__.'/Views', 'paymentchecker');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/Config/paymentchecker.php', 'paymentchecker');
    }
}
