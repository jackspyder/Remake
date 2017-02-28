<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function spec()
    {
      return $this->belongsTo(Spec::class);
    }
}
