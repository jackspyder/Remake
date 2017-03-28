<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{

    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('spec_id')->nullable();
            $table->unsignedInteger('dimension_id')->nullable();
            $table->string('category', 255);
            $table->integer('weight')->default(0);
            $table->string('condition', 255);
            $table->string('status', 255);
            $table->decimal('price', 6, 2)->default(0.00);
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
