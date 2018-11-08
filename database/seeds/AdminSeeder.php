<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset users table
        DB::table('admin')->truncate();

        // Init data
        $admin = [
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'employee_id' => 1,
            'role_type' => '1',
            'ins_id' => 1,
            'upd_id' => null,
            'del_flag' => 0,

        ];

        // Insert DB
        DB::table('admin')->insert($admin);
    }
}
