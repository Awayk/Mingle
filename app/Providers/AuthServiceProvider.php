<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //only the user who created the organization can edit it
        Gate::define('edit-owner', function ($user, $organization) {
            $accessGranted = false;
            if ( $user->id == $organization->user_id) {
              $accessGranted =true;
            }
            //or an admin role
            elseif ($user->isAdmin()) {
              $accessGranted =true;
            }
          return $accessGranted;
        });
  }
}
