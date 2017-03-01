<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionsTable extends Migration {

	public function up()
	{
		Schema::create('permissions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('perm_name', 255);
			$table->string('perm_label', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
        Schema::dropIfExists('permissions');
	}
}