<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsTableAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('birth_day');
            $table->dropColumn('avatar');
            $table->integer('employee_id')->after('password');
            $table->rememberToken()->after('employee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin', function (Blueprint $table) {
            $table->string('name', 64)->after('id');
            $table->date('birth_day')->after('password');
            $table->string('avatar')->nullable(true)->after('birth_day');
            $table->dropColumn('employee_id');
            $table->dropColumn('remember_token');
        });
    }
}
