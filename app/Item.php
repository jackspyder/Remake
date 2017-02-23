<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function spec()
    {
      return $this->belongsTo(Spec::class);
    }
}
