<?php

namespace Tighten\partridge-rocks;

use Illuminate\Support\ServiceProvider;

class partridge-rocksServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('larahub.php'),
            ], 'config');

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
