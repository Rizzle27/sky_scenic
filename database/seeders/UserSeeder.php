<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'Lucas',
                'email' => 'lucas.garcia@davinci.edu.ar',
                'password' => Hash::make('1234'),
                'role' => 'admin',
                'subscribed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Nico',
                'email' => 'nicolas.aguero@davinci.edu.ar',
                'password' => Hash::make('1234'),
                'role' => 'admin',
                'subscribed' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Belén',
                'email' => 'belen.stella@davinci.edu.ar',
                'password' => Hash::make('1234'),
                'role' => 'regular',
                'subscribed' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Martina',
                'email' => 'martina.bianchi@davinci.edu.ar',
                'password' => Hash::make('1234'),
                'role' => 'regular',
                'subscribed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
