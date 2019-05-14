<?php

namespace Sunnytree\Acorn;

use Illuminate\Support\ServiceProvider;

class AcornServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../routes/acorn.php';
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'acornwelcome');
    }
}
