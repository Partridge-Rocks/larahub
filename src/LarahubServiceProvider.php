<?php

namespace PartridgeRocks\Larahub;

use Illuminate\Support\ServiceProvider;

class LarahubServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('larahub.php'),
            ], 'config');
            $this->app->singleton('larahub', function ($app) {
                return new Larahub();
            })

            $this->app->alias('larahub', Larahub::class);

            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'larahub');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/larahub'),
            ], 'views');
            */
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'larahub');
    }
}
