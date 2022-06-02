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
        /**
        * publish views
        */
        $this->publishes([
            __DIR__.'/views/auth' => resource_path('views/auth'),
        ]);

        $this->publishes([
            __DIR__.'/views/root' => resource_path('views/'),
        ]);

        $this->publishes([
            __DIR__.'/views/vendor' => resource_path('views/vendor/notifications'),
        ]);


        /**
        * publish sass
        */
        $this->publishes([
            __DIR__.'/sass' => resource_path('sass'),
        ]);


        /**
        * publish webpack config
        */
        $this->publishes([
            __DIR__.'/webpack' => base_path(),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}