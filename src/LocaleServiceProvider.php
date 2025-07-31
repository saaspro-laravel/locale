<?php

namespace SaasPro\Locale;

use Illuminate\Support\ServiceProvider;
use Locale;

class LocaleServiceProvider extends ServiceProvider {

    function register(){
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->app->singleton('locale', function () {
            return new Locale();
        });

    }

    function boot(){
        
    }

}