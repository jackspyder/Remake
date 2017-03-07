<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        foreach ($this->getPermissions() as $permission) {
            $gate->define($permission->perm_name, function ($user) use ($permission) {
                return $user->hasRole($permission->roles);
            });
        }
    }


    //function to check if permissions table exists then return currently assigned roles.
    private function getPermissions()
    {
        if (\Schema::hasTable("permissions")) {
            return Permission::with('roles')->get();
        }

        return [];
    }
}
