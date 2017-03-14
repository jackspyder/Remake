<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

  public function receipt()
  {
      return $this->belongsToMany(Receipt::class);
  }

  public function item()
  {
    return $this->belongsToMany(Item::class);
  }
}
