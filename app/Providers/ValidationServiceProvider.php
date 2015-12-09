<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class ValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /**
         * Dutch zipcode
         * Accepts 1000AA & 1000 AA
         */
        Validator::extend('dutch_zipcode', function($attribute, $value, $parameters) {
            return preg_match('/^[1-9][0-9]{3}[\s]?[A-Za-z]{2}$/i', $value);
        });
    }

    public function register()
    {
        //
    }
}