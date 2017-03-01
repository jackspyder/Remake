<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    //Check if a user has a role, passing a string and checking against role name column.
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('role_name', $role);
        }

        return !!$role->intersect($this->roles)->count();
    }

    //Assign a role to a user after wiping existing roles.
    public function assignRole($role)
    {
        $this->roles()->detach();
        $this->roles()->save(
            Role::where('role_name', $role)->firstOrFail()
        );
    }

    public function roles()
    {
        return $this->belongsToMany(Role::Class);
    }
}
