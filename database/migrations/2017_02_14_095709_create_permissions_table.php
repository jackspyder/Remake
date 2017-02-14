<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionsTable extends Migration {

	public function up()
	{
		Schema::create('permissions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('label', 255);
		});
	}

	public function down()
	{
		Schema::drop('permissions');
	}
}