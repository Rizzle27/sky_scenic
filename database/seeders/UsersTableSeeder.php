<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'rizzle25',
                'email' => 'lucas.aguero@davinci.edu.ar',
                'password' => '1234',
                'photo' => 'image.jpg',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
