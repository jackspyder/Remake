<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model {

	protected $table = 'customers';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('first_name', 'last_name', 'email', 'phone_no');

	public function receipts()
	{
		return $this->belongsToMany('\Receipt', 'customer_id');
	}

}