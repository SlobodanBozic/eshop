<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('password');
            $table->enum('type', ['Admin', 'Sub Admin']);
            $table->tinyInteger('categories_view_access');
            $table->tinyInteger('categories_edit_access');
            $table->tinyInteger('categories_full_access');
            $table->tinyInteger('products_access');
            $table->tinyInteger('orders_access');
            $table->tinyInteger('users_access');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
