<?php

namespace Drake24\Lynx\Providers;

use Illuminate\Support\ServiceProvider;

class LynxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        info('service provider booted');
    }
}
