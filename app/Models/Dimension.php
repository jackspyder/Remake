<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dimension extends Model
{

    use SoftDeletes;

    protected $dates = [ 'deleted_at' ];
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
