<?php

namespace Bagisto\Razorpay\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;

class RazorpayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         include __DIR__ . '/../Http/routes.php';

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'razorpay');

        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
        $this->registerMigrations();

        Artisan::call('route:cache');
        Artisan::call('config:cache');
        Artisan::call('view:cache');

    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
       $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/paymentmethods.php', 'paymentmethods'
        );
    }

    /**
     * Register Migrations for the module
     * 
     * @return void
     */
    protected function registerMigrations(){
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
