<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecsTable extends Migration
{

    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('item_id')->nullable();
            $table->string('brand', 40)->nullable();
            $table->string('model', 40)->nullable();
            $table->string('cpu', 40)->nullable();
            $table->string('ram', 40)->nullable();
            $table->string('hdd', 40)->nullable();
            $table->string('odd', 40)->nullable();
            $table->string('gpu', 40)->nullable();
            $table->string('battery', 40)->nullable();
            $table->string('usb', 40)->nullable();
            $table->string('lan', 40)->nullable();
            $table->string('wlan', 40)->nullable();
            $table->string('os', 40)->nullable();
            $table->string('psu', 40)->nullable();
            $table->decimal('screen_size', 3, 1)->nullable();
            $table->string('screen_rez', 40)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('specs');
    }
}
