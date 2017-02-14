<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model {

	protected $table = 'items';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('category', 'weight', 'condition', 'status', 'notes');

	public function specs()
	{
		return $this->hasOne('\Specs', 'item_id');
	}

	public function sales()
	{
		return $this->belongsTo('\Sale', 'item_id');
	}

}