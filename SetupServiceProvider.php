<?php

namespace Shadmin\Setup;

use Illuminate\Support\ServiceProvider;

class SetupServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
   

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'setupview');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->registerSeedsFrom(__DIR__.'/database/seeds');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        // $this->loadMigrationsFrom(__DIR__.'/migrations');
        // $this->loadViewsFrom(__DIR__.'/views', 'setupview');
        // $this->publishes([
        //     __DIR__.'/views' => base_path('resources/views/shadmin/setupview'),
        // ]);
    }

     public function register()
    {
        //$this->app->make('shadmin\setup\SetupController');
    }

}
