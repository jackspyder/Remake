<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration
{

    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('spec_id')->nullable();
            $table->string('category', 255);
            $table->integer('weight');
            $table->string('condition', 255);
            $table->string('status', 255);
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('items');
    }
}
