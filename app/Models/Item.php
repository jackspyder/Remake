<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{

    use SoftDeletes;

    protected $dates = [ 'deleted_at' ];

    protected $fillable = [
        'id',
        'barcode',
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
