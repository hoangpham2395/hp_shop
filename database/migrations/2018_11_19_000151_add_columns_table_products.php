<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('weigh', 32)->nullable()->after('sale');
            $table->string('color', 32)->nullable()->after('weigh');
            $table->string('type_screen', 32)->nullable()->after('color');
            $table->string('size_screen', 32)->nullable()->after('type_screen');
            $table->string('color_screen', 32)->nullable()->after('size_screen');
            $table->string('resolution_screen', 32)->nullable()->after('color_screen');
            $table->string('pin', 32)->nullable()->after('resolution_screen');
            $table->string('type_pin', 32)->nullable()->after('pin');
            $table->string('os', 32)->nullable()->after('type_pin');
            $table->string('before_camera', 32)->nullable()->after('os');
            $table->string('after_camera', 32)->nullable()->after('before_camera');
            $table->string('memory_stick', 32)->nullable()->after('after_camera');
            $table->string('chipset', 32)->nullable()->after('memory_stick');
            $table->string('chip_graph', 32)->nullable()->after('chipset');
            $table->string('model', 32)->nullable()->after('chip_graph');
            $table->string('made_in', 32)->nullable()->after('model');
            $table->string('ram', 32)->nullable()->after('made_in');
            $table->string('internal_memory', 32)->nullable()->after('ram');
            $table->string('cpu', 32)->nullable()->after('internal_memory');
            $table->string('speed_cpu', 32)->nullable()->after('cpu');
            $table->string('jack_phone', 32)->nullable()->after('speed_cpu');
            $table->string('film', 32)->nullable()->after('jack_phone');
            $table->string('sensor', 32)->nullable()->after('film');
            $table->string('warranty', 32)->nullable()->after('sensor');
            $table->string('number_sim', 32)->nullable()->after('warranty');
            $table->string('type_sim', 32)->nullable()->after('number_sim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('weigh');
            $table->dropColumn('type_screen');
            $table->dropColumn('size_screen');
            $table->dropColumn('color_screen');
            $table->dropColumn('pin');
            $table->dropColumn('type_pin');
            $table->dropColumn('os');
            $table->dropColumn('before_camera');
            $table->dropColumn('after_camera');
            $table->dropColumn('memory_stick');
            $table->dropColumn('chipset');
            $table->dropColumn('chip_graph');
            $table->dropColumn('model');
            $table->dropColumn('made_in');
            $table->dropColumn('ram');
            $table->dropColumn('internal_memory');
            $table->dropColumn('cpu');
            $table->dropColumn('speed_cpu');
            $table->dropColumn('color');
            $table->dropColumn('jack_phone');
            $table->dropColumn('film');
            $table->dropColumn('resolution_screen');
            $table->dropColumn('sensor');
            $table->dropColumn('warranty');
            $table->dropColumn('number_sim');
            $table->dropColumn('type_sim');
        });
    }
}
