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
            $table->unsignedInteger('barcode')->nullable();
            $table->string('category');
            $table->integer('weight')->default(0);
            $table->string('condition');
            $table->string('status');
            $table->decimal('price', 6, 2)->default(0.00);
            $table->text('notes')->nullable();
            $table->string('furniture')->nullable();
            $table->string('coa')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('items');
    }
}
