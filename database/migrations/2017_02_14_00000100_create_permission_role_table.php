<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePermissionRoleTable extends Migration
{

    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
            $table->unsignedInteger('permission_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();

            $table->primary([ 'permission_id', 'role_id' ]);

        });
    }


    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}