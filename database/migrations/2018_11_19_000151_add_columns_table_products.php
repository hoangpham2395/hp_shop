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
            $table->integer('quantity')->lengh(10)->after('product_name');
            $table->string('weigh', 64)->nullable()->after('sale');
            $table->string('color', 128)->nullable()->after('weigh');
            $table->string('size', 128)->nullable()->after('color');
            $table->string('type_screen', 128)->nullable()->after('size');
            $table->string('size_screen', 128)->nullable()->after('type_screen');
            $table->string('color_screen', 128)->nullable()->after('size_screen');
            $table->string('resolution_screen', 64)->nullable()->after('color_screen');
            $table->string('battery', 128)->nullable()->after('resolution_screen');
            $table->string('type_battery', 128)->nullable()->after('battery');
            $table->string('os', 128)->nullable()->after('type_battery');
            $table->string('before_camera', 32)->nullable()->after('os');
            $table->string('after_camera', 32)->nullable()->after('before_camera');
            $table->string('memory_stick', 128)->nullable()->after('after_camera');
            $table->string('chipset', 128)->nullable()->after('memory_stick');
            $table->string('gpu', 128)->nullable()->after('chipset');
            $table->string('model', 128)->after('gpu');
            $table->string('made_in', 128)->after('model');
            $table->string('ram', 64)->nullable()->after('made_in');
            $table->string('internal_memory', 64)->nullable()->after('ram');
            $table->char('design', 1)->nullable()->default(1)->after('internal_memory');
            $table->string('material', 128)->nullable()->after('design');
            $table->string('speed_cpu', 64)->nullable()->after('material');
            $table->string('jack_phone', 32)->nullable()->after('speed_cpu');
            $table->string('film', 128)->nullable()->after('jack_phone');
            $table->string('sensor', 128)->nullable()->after('film');
            $table->string('warranty', 256)->after('sensor');
            $table->string('number_sim', 128)->nullable()->after('warranty');
            $table->char('type_sim', 1)->nullable()->after('number_sim');
            $table->string('function_camera', 256)->nullable()->after('type_sim');
            $table->string('connect', 256)->nullable()->after('function_camera');
            $table->char('origin', 1)->default(1)->after('connect');
            $table->text('special')->nullable()->after('origin');
            $table->text('description')->nullable()->after('special');
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
            $table->dropColumn('battery');
            $table->dropColumn('type_battery');
            $table->dropColumn('os');
            $table->dropColumn('before_camera');
            $table->dropColumn('after_camera');
            $table->dropColumn('memory_stick');
            $table->dropColumn('chipset');
            $table->dropColumn('gpu');
            $table->dropColumn('model');
            $table->dropColumn('made_in');
            $table->dropColumn('ram');
            $table->dropColumn('internal_memory');
            $table->dropColumn('speed_cpu');
            $table->dropColumn('color');
            $table->dropColumn('jack_phone');
            $table->dropColumn('film');
            $table->dropColumn('resolution_screen');
            $table->dropColumn('sensor');
            $table->dropColumn('warranty');
            $table->dropColumn('number_sim');
            $table->dropColumn('type_sim');
            $table->dropColumn('quantity');
            $table->dropColumn('function_camera');
            $table->dropColumn('connect');
            $table->dropColumn('origin');
            $table->dropColumn('description');
            $table->dropColumn('size');
            $table->dropColumn('design');
            $table->dropColumn('material');
            $table->dropColumn('special');
        });
    }
}
