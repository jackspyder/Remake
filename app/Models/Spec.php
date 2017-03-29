<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Spec extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand',
        'model',
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
