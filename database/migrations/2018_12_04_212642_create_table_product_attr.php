<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductAttr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attr', function (Blueprint $table) {
            $table->increments('id');
            $table->string('attr_name', 64);
            $table->integer('group_id');
            $table->string('type', 1)->default(1);
            $table->string('length', 64)->nullable();
            $table->string('is_null', 1)->default(0);
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
        Schema::dropIfExists('product_attr');
    }
}
