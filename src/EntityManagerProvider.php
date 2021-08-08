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
       /* $this->app->make('Usthenet\EntityManager\Controllers\TypeEntityController');
        $this->app->make('Usthenet\EntityManager\Controllers\TypeUnityController');
        $this->app->make('Usthenet\EntityManager\Controllers\CategoryUnityController');
        $this->app->make('Usthenet\EntityManager\Controllers\EntityController');
        $this->app->make('Usthenet\EntityManager\Controllers\UnityController');
        $this->app->make('Usthenet\EntityManager\Controllers\OfficeController');
        $this->app->make('Usthenet\EntityManager\Controllers\CurrentOfficeController');
        $this->app->make('Usthenet\EntityManager\Controllers\OfficerController');*/
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadFactoriesFrom(__DIR__.'/factories');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'entitymanager');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views'),
            __DIR__.'/migrations' => base_path('database/migrations'),
            __DIR__.'/factories' => base_path('database/factories'),
            __DIR__.'/seeders' => base_path('database/seeders'),
            __DIR__.'/Controllers' => app_path('Http/Controllers'),       
            __DIR__.'/Models' => app_path('Http/Models'),       
            __DIR__.'/routes.php' => base_path('routes')       
        
        ]);
    }
}
