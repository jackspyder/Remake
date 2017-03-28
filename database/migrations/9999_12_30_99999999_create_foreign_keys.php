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
        });



    }


    //These were causing issues, not sure why.
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign([ 'spec_id' ]);
        });


    }
}
