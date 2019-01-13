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
        /*$this->registerPolicies();*/

        //
        $this->registerPolicies();

        Gate::define('isAdmin', function($user){
            return $user->USER_TYPE == 'A';
        });
    
        Gate::define('isTrainer', function($user){
            return $user->USER_TYPE == 'T';
        });

        Gate::define('isStudent', function($user){
            return $user->USER_TYPE == 'S';
        });

    }
}
