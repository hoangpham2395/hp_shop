<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 64);
            $table->string('sex', 64);
            $table->string('address', 256);
            $table->string('tel', 20);
            $table->char('status', 1)->default(1);
            $table->integer('ins_id')->nullable();
            $table->integer('upd_id')->nullable();
            $table->timestamps();
            $table->char('del_flag', 1)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
