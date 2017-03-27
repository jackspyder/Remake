<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    public function items(){
        $this->hasOne(Item::class);
    }
}
