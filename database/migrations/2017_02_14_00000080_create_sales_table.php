<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesTable extends Migration
{

    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('receipt_id')->nullable();
            $table->unsignedInteger('item_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            //$table->primary([ 'item_id', 'receipt_id' ]);
        });
    }


    public function down()
    {
        Schema::dropIfExists('sales');
    }
}