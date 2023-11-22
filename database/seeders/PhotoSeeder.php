<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photos')->insert([
            [
                'aircraft' => "Boeing 747-481(BCF)",
                'license_plate' => "TF-AMP",
                'airline' => "Magma Aviation (Air Atlanta Icelandic)",
                'location' => "Cologne/Bonn Konrad Adenauer Airport - EDDK",
                'country' => "Germany",
                'img_path' => "1700503339.jpg",
                'img_path_copyright' => "1700503339_copy.jpg",
                'author' => 'rizzle27',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'aircraft' => "Panavia Tornado IDS",
                'license_plate' => "45-14",
                'airline' => "Germany - Air Force",
                'location' => "Fairford Air Force Base - EGVA",
                'country' => "United Kingdom",
                'img_path' => "1700504680.jpg",
                'img_path_copyright' => "1700504680_copy.jpg",
                'author' => 'rizzle27',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'aircraft' => "Panavia Tornado IDS",
                'license_plate' => "45-14",
                'airline' => "Germany - Air Force",
                'location' => "Fairford Air Force Base - EGVA",
                'country' => "United Kingdom",
                'img_path' => "1700504874.jpg",
                'img_path_copyright' => "1700504874_copy.jpg",
                'author' => 'rizzle27',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]);
    }
}
