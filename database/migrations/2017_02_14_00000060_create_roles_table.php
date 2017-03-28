<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{

    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_title');
            $table->string('role_slug');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('roles');
    }
}