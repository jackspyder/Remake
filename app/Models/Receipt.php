<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{

  public function sales()
  {
      return $this->hasMany(Sale::class);
  }

}
