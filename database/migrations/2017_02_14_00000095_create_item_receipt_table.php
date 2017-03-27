<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Scheme::create('item_receipt', function(Blueprint $table){
            $table->unsignedInteger('item_id')->nullable();
            $table->unsignedInteger('receipt_id')->nullable();

            $table->primary(['item_id', 'receipt_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_receipt');
    }
}
