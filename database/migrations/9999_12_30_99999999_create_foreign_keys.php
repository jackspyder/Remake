<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->foreign('spec_id')->references('id')->on('specs')->onDelete('cascade');
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->foreign('receipt_id')->references('id')->on('receipts')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });

        Schema::table('receipts', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });

//        Schema::table('permission_role', function (Blueprint $table) {
//            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
//            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
//        });
//
//        Schema::table('role_user', function (Blueprint $table) {
//            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//        });
    }


    //These were causing issues, not sure why.
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign(['spec_id']);
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign('sales_receipt_id_foreign');
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign('sales_item_id_foreign');
        });
        Schema::table('receipts', function (Blueprint $table) {
            $table->dropForeign('receipts_customer_id_foreign');
        });
        Schema::table('receipts', function (Blueprint $table) {
            $table->dropForeign('receipts_sale_id_foreign');
        });
//         Schema::table('permission_role', function(Blueprint $table) {
//         	$table->dropForeign('permission_role_permission_id_foreign');
//         });
//         Schema::table('permission_role', function(Blueprint $table) {
//         	$table->dropForeign('permission_role_role_id_foreign');
//         });
//         Schema::table('role_user', function(Blueprint $table) {
//         	$table->dropForeign('role_user_role_id_foreign');
//         });
//         Schema::table('role_user', function(Blueprint $table) {
//         	$table->dropForeign('role_user_user_id_foreign');
//         });
    }
}
