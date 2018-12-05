<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsTableProductPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_price', function (Blueprint $table) {
            $table->char('origin', 1)->default(1)->after('quantity');
            $table->string('warranty', 256)->after('origin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_price', function (Blueprint $table) {
            $table->dropColumn('origin');
            $table->dropColumn('warranty');
        });
    }
}
