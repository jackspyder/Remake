<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->foreign('spec_id')->references('id')->on('specs')->onDelete('cascade');
            //$table->foreign('dimension_id')->references('id')->on('dimensions')->onDelete('cascade');
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->foreign('receipt_id')->references('id')->on('receipts')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }


    //These were causing issues, not sure why.
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign('spec_id'); //
        });

        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign('receipt_id');
            $table->dropForeign('item_id');
        });
    }
}
