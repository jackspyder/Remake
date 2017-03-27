<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        'notes'
    ];


    public function spec()
    {
        return $this->belongsTo(Spec::class);
    }

    public function receipts()
    {
        return $this->belongsToMany(Receipt::class);
    }

    public function dimensions(){
        return $this->belongsTo(Dimension::class);
    }
}
