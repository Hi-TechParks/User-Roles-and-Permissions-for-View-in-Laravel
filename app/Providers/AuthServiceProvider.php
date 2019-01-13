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

		// Add those code for using @can access method in Laravel view
		
		// Can Access by Admin
        Gate::define('isAdmin', function($user){
            return $user->USER_TYPE == 'A';
        });
    
		// Can Access by Trainer
        Gate::define('isTrainer', function($user){
            return $user->USER_TYPE == 'T';
        });

		// Can Access by Student
        Gate::define('isStudent', function($user){
            return $user->USER_TYPE == 'S';
        });

    }
}
