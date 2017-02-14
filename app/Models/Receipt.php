<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receipt extends Model {

	protected $table = 'receipts';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function customers()
	{
		return $this->hasOne('\Customer', 'customer_id');
	}

	public function sales()
	{
		return $this->hasMany('\Sale', 'sale_id');
	}

}