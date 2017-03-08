<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

  public function receipt()
  {
      return $this->belongsTo(Receipt::class);
  }
}
