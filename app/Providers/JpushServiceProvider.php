<?php

namespace App\Providers;

use Jpush\Client;
use Illuminate\Support\ServiceProvider;

class JpushServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
            return new Client(config('jpush'));
        });

        $this->app->alias(Client::class, 'jpush');
    }
}
