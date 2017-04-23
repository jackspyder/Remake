<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spec extends Model
{

    use SoftDeletes;

    protected $dates = [ 'deleted_at' ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand',
        'model',
        'item_id',
        'cpu',
        'ram',
        'hdd',
        'odd',
        'gpu',
        'battery',
        'usb',
        'lan',
        'wlan',
        'os',
        'psu',
        'screen_size',
        'screen_rez',
    ];


    public function items()
    {
        return $this->belongsTo(Item::class);
    }
}
