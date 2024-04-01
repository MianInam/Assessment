<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        // Define roles and permissions
//        Gate::before(function ($user, $ability) {
//            return $user->hasRole('super-admin') ? true : null;
//        });
//
//        Role::create(['name' => 'admin', 'guard_name' => 'api'] );
//        Role::create(['name' => 'editor', 'guard_name' => 'api']);
//
//        Permission::create(['name' => 'create post', 'guard_name' => 'api']);
//        Permission::create(['name' => 'edit post', 'guard_name' => 'api']);
//        Permission::create(['name' => 'delete post', 'guard_name' => 'api']);


        //
    }
}
