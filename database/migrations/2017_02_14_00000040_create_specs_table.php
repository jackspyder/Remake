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
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('hdd')->nullable();
            $table->string('odd')->nullable();
            $table->string('gpu')->nullable();
            $table->string('battery')->nullable();
            $table->string('usb')->nullable();
            $table->string('lan')->nullable();
            $table->string('wlan')->nullable();
            $table->string('os')->nullable();
            $table->string('psu')->nullable();
            $table->decimal('screen_size')->nullable();
            $table->string('screen_rez')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('specs');
    }
}
