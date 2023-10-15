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
                'plane' => "Boeing 747-481(BCF)",
                'license_plate' => "TF-AMP",
                'airline' => "Magma Aviation (Air Atlanta Icelandic)",
                'location' => "Cologne/Bonn Konrad Adenauer Airport - EDDK",
                'country' => "Germany",
                'img_path' => "934818_1696070552.jpg",
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]);
    }
}
