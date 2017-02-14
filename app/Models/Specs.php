<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specs extends Model {

	protected $table = 'specs';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('cpu', 'ram', 'hdd', 'odd', 'gpu', 'battery', 'usb', 'lan', 'wlan', 'os', 'psu', 'screen_size', 'screen_rez');

	public function item()
	{
		return $this->belongsToMany('\Item');
	}

}