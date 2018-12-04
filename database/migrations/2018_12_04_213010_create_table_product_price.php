<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_price', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('color', 64);
            $table->double('price');
            $table->text('sale')->nullable();
            $table->integer('quantity');
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
        Schema::dropIfExists('product_price');
    }
}
