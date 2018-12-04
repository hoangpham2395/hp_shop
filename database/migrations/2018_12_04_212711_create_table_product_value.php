<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_value', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('attr_id');
            $table->string('value');
            $table->integer('ins_id')->nullable();
            $table->integer('upd_id')->nullable();
            $table->timestamps();
            $table->string('del_flag', 1)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_value');
    }
}
