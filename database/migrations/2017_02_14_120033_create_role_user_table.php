<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUserTable extends Migration {

	public function up()
	{
		Schema::create('role_user', function(Blueprint $table) {
			$table->integer('role_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
		});
	}

	public function down()
	{
        Schema::dropIfExists('role_user');
	}
}