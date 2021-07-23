<?php

namespace Usthenet\EntityManager;

use Illuminate\Support\ServiceProvider;

class EntityManagerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Usthenet\EntityManager\Controllers\EntityController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'entitymanager');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/usthenet/entitymanager'),
        ]);
    }
}
