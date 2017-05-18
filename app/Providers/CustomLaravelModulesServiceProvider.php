<?php

namespace App\Providers;

use Nwidart\Modules\LaravelModulesServiceProvider;

class CustomLaravelModulesServiceProvider extends LaravelModulesServiceProvider
{
    /**
     * Booting the package.
     */
    public function boot()
    {
        $this->registerNamespaces();
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->registerServices();
        $this->setupStubPath();
        $this->registerProviders();
        $this->registerModules();
    }
}
