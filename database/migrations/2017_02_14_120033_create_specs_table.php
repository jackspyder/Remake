<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecsTable extends Migration {

	public function up()
	{
		Schema::create('specs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('item_id')->unsigned();
			$table->string('cpu', 255)->nullable();
			$table->string('ram', 255)->nullable();
			$table->string('hdd', 255)->nullable();
			$table->string('odd', 255)->nullable();
			$table->string('gpu', 255)->nullable();
			$table->string('battery', 255)->nullable();
			$table->string('usb', 255)->nullable();
			$table->string('lan', 255)->nullable();
			$table->string('wlan', 255)->nullable();
			$table->string('os', 255)->nullable();
			$table->string('psu', 255)->nullable();
			$table->decimal('screen_size', 3,1)->nullable();
			$table->string('screen_rez', 255)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('specs');
	}
}