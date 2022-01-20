<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Pixelated',
                'age' => 20,
                'email' => 'adminpixelated@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => true
            ]
        ]);
    }
}
