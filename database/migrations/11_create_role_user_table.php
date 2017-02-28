<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUserTable extends Migration {

	public function up()
	{
		Schema::create('role_user', function(Blueprint $table) {
			$table->unsignedInteger('role_id')->nullable();
			$table->unsignedInteger('user_id')->nullable();

			//$table->primary(['role_id', 'user_id']);
		});
	}

	public function down()
	{
        Schema::dropIfExists('role_user');
	}
}