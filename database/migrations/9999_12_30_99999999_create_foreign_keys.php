<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('specs', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });

        Schema::table('dimensions', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });



    }


    //These were causing issues, not sure why.
    public function down()
    {
        Schema::table('specs', function (Blueprint $table) {
            $table->dropForeign([ 'item_id' ]);
        });

        Schema::table('dimensions', function (Blueprint $table) {
            $table->dropForeign([ 'item_id' ]);
        });

    }
}
