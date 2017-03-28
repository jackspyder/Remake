<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->dropForeign([ 'spec_id' ]);
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign('sales_receipt_id_foreign');
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign('sales_item_id_foreign');
        });

    }
}
