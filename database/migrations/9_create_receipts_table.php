<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReceiptsTable extends Migration {

	public function up()
	{
		Schema::create('receipts', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('customer_id')->nullable();
			$table->unsignedInteger('sale_id')->nullable();
			$table->string('warranty');
			$table->string('coa');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
        Schema::dropIfExists('receipts');
	}
}