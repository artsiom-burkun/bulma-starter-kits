<?php

namespace Temich\Bulma;

use Illuminate\Support\ServiceProvider;

class BulmaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/views/auth' => resource_path('views/auth'),
        ]);

        $this->publishes([
            __DIR__.'/views/root' => resource_path('views/'),
        ]);

        $this->publishes([
            __DIR__.'/views/vendor' => resource_path('views/vendor/notifications'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('bulma', function($app)
        {
            return $this->app->make('Temich\Bulma\Bulma');
        });

    }
}