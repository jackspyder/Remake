<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    protected $table = 'permissions';

    public $timestamps = true;


    //declare model relationships.
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}