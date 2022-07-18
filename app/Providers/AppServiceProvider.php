<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('Computer', function () {
        //     return time();
        // });
        $this->app->singleton('App\Repositories\Test\TestInterfaceRepository', 'App\Repositories\Test\TestRepository');
        $this->app->singleton('App\Repositories\User\UserInterfaceRepository', 'App\Repositories\User\UserRepository');
        $this->app->singleton('App\Services\User\UserInterfaceService', 'App\Services\User\UserService');
        $this->app->singleton('App\Services\Test\TestInterfaceService', 'App\Services\Test\TestService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
