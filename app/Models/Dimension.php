<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    protected $fillable = [
        'height',
        'width',
        'depth',
    ];

    public function items()
    {
        return $this->hasOne(Item::class);
    }
}
