<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{

  protected $fillable = [
      'id',
      'warranty',
      'served_by',
      'payment',
  ];

  public function sales()
  {
      return $this->hasMany(Sale::class, 'receipt_id', 'id');
  }

  public function receipts()
  {
      return $this->belongsToMany(Item::class);
  }
}
