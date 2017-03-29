<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Spec;
use App\Models\Dimension;

class Item extends Model
{

    protected $fillable = [
        'id',
        'spec_id',
        'category',
        'weight',
        'condition',
        'price',
        'status',
        'notes',
        'coa',
        'furniture'
    ];


    public function specs()
    {
        return $this->hasOne(Spec::class);
    }


    public function receipts()
    {
        return $this->belongsToMany(Receipt::class);
    }


    public function dimensions()
    {
        return $this->hasOne(Dimension::class);
    }
}
