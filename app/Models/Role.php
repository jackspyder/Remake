<?php
/**
 * Created by PhpStorm.
 * User: Jack Powell
 * ID: EC1407717
 * Tutor: Duncan Walker
 * Time: 21:58
 */

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'roles';

    public $timestamps = true;

    //declare protected properties.
    protected $dates = [

        'created_at',
        'updated_at',
    ];

    //declare mass assignable properties.
    protected $fillable = [
        'role_slug',
        'role_title',
    ];


    //Method to save passed in permission.



    //Declare model relationships.
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }


    public function user()
    {
        return $this->belongsToMany(User::class);
    }

}

