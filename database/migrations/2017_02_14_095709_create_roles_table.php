<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration {

	public function up()
	{
		Schema::create('roles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 10);
			$table->string('label', 20);
		});
	}

	public function down()
	{
		Schema::drop('roles');
	}
}