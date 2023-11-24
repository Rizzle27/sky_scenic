<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::where('username', 'Lucas')->first();

        DB::table('photos')->insert([
            [
                'aircraft' => "Boeing 747-481(BCF)",
                'license_plate' => "TF-AMP",
                'airline' => "Magma Aviation (Air Atlanta Icelandic)",
                'location' => "Cologne/Bonn Konrad Adenauer Airport - EDDK",
                'country' => "Germany",
                'img_path' => "test1.jpg",
                'img_path_copyright' => "test1_copy.jpg",
                'author' => $user->username,
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
                'img_path' => "test2.jpg",
                'img_path_copyright' => "test2_copy.jpg",
                'author' => $user->username,
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'aircraft' => "Lockheed Martin F-35A Lightning II",
                'license_plate' => "22-5684",
                'airline' => "United States - US Air Force (USAF)",
                'location' => "Other Location - Lake District",
                'country' => "United Kingdom",
                'img_path' => "test3.jpg",
                'img_path_copyright' => "test3_copy.jpg",
                'author' => $user->username,
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]);
    }
}
