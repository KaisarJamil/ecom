<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Policies\admin;
// use App\Policies\userPolicy;
use App\User;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class => admin::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->registerPolicies();

        // Gate::define('user-only', 'userPolicy@user_only');
        Gate::define('admin-only', 'admin@admin_only');


        Gate::define('user-only', function($user){
            if($user->role_id == 2){
                
                return true;
            }
    
                return false;
        });
        
        // Gate::define('admin-only', function($user){
        //     if($user->role_id == 1){
                
        //         return true;
        //     }
    
        //         return false;
        // }); 

        
    }
}
