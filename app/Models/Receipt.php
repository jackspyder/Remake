<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receipt extends Model
{

    use SoftDeletes;

    protected $dates = [ 'deleted_at' ];

    protected $fillable = [
      'id',
      'warranty',
      'served_by',
      'payment',

    ];


    public function items()
  {
      return $this->belongsToMany(Item::class);
  }
}
