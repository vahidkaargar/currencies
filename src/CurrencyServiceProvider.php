<?php

namespace vahidkaargar\BambooCardPortal\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class CurrencyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require __DIR__ . '/helpers.php';
    }
}
