<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionRoleTable extends Migration {

	public function up()
	{
		Schema::create('permission_role', function(Blueprint $table) {
			$table->unsignedInteger('permission_id')->nullable();
			$table->unsignedInteger('role_id')->nullable();

			//$table->primary(['permission_id', 'role_id']);

		});
	}

	public function down()
	{
        Schema::dropIfExists('permission_role');
	}
}