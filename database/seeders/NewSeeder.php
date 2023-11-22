<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => "SpaceX: Starship despega con éxito y logra separar las etapas del cohete",
                'subtitle' => "El lanzamiento de Starship por parte de SpaceX demuestra la importancia del método de prueba y error en la consecución de sus objetivos",
                'author' => "Rizzle27",
                'img_path' => "StartShip.jpg",
                'body' => 'La Starship despegó con éxito gracias a la potencia de los 33 motores Raptor del acelerador superpesado (éxito 1), logró separar las etapas (éxito 2), el Sistema de Seguridad de Terminación de Vuelo FTS funciono correctamente (éxito3), se identificaron los fallos y errores que les permitirá mejorar la fiabilidad de Starship en el siguiente lanzamiento de prueba (éxito 4).',
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
