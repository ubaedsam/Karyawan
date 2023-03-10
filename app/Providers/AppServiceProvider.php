<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Gate::define('checkuser', function(User $user){
            return $user->type == 'User';
        });

        Gate::define('checkadmin1', function(User $user){
            return $user->type == 'Admin1';
        });

        Gate::define('checkadmin2', function(User $user){
            return $user->type == 'Admin2';
        });
    }
}
