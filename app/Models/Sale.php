<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

  public function receipt()
  {
      return $this->belongsTo(Receipt::class);
  }
}
