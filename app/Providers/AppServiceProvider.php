<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\View;
use App\Organization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

<<<<<<< HEAD
        $organizationNames = Organization::orderBy('updated_at', 'desc')->get(['name']);
=======
        $organizationNames = Organization::orderBy('name')->get(['name']);
>>>>>>> b316222e4d62b264e2a3ec7e66503414d6729ca5

        View::share('organizationNames', $organizationNames);

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
