<?php

namespace iamx\SimpleAdmin;

use Illuminate\Support\ServiceProvider;

class SimpleAdminServicesProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/Views', 'simpleadmin');
        $this->publishes([__DIR__.'/Assets' => public_path('vendor/iamx/simple-admin')], 'assets');
        $this->mergeConfigFrom(__DIR__.'/Config/SimpleAdmin.php', 'simpleadmin');
        $this->publishes([ __DIR__.'/Config/SimpleAdmin.php' => config_path('simpleadmin.php')], 'config');
        $this->publishes([ __DIR__.'/Views/auth' => base_path('resources/views/auth')], 'authviews');
    }
}
