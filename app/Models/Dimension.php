<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Dimension extends Model
{

    protected $fillable = [
        'height',
        'width',
        'depth',
    ];


    public function items()
    {
        return $this->belongsTo(Item::class);
    }
}
