<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model {

	protected $table = 'sales';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function receipts()
	{
		return $this->belongsTo('\Receipt', 'receipt_id');
	}

	public function items()
	{
		return $this->hasMany('\Item', 'item_id');
	}

}