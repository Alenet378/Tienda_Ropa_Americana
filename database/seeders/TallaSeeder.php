<?php

namespace Database\Seeders;

use App\Models\Talla;  //Usando el modelo Talla
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Talla::insert([
            // Grupo de Talla: Letras
            ['nombre' => 'XS', 'grupo_talla_id' => 1, 'orden' => 1],
            ['nombre' => 'S', 'grupo_talla_id' => 1, 'orden' => 2],
            ['nombre' => 'M', 'grupo_talla_id' => 1, 'orden' => 3],
            ['nombre' => 'L', 'grupo_talla_id' => 1, 'orden' => 4],
            ['nombre' => 'XL', 'grupo_talla_id' => 1, 'orden' => 5],
            ['nombre' => '2X', 'grupo_talla_id' => 1, 'orden' => 6],

            // Grupo de Talla: Numérica
            ['nombre' => '4', 'grupo_talla_id' => 2, 'orden' => 1],
            ['nombre' => '6', 'grupo_talla_id' => 2, 'orden' => 2],
            ['nombre' => '8', 'grupo_talla_id' => 2, 'orden' => 3],
            ['nombre' => '9', 'grupo_talla_id' => 2, 'orden' => 4],
            ['nombre' => '10', 'grupo_talla_id' => 2, 'orden' => 5],
            ['nombre' => '12', 'grupo_talla_id' => 2, 'orden' => 6],
            ['nombre' => '14', 'grupo_talla_id' => 2, 'orden' => 7],
            ['nombre' => '27', 'grupo_talla_id' => 2, 'orden' => 8],
            ['nombre' => '9/10', 'grupo_talla_id' => 2, 'orden' => 9],

            // Grupo de Talla: Calzado
            ['nombre' => '5.5', 'grupo_talla_id' => 3, 'orden' => 1],
            ['nombre' => '6', 'grupo_talla_id' => 3, 'orden' => 2],
            ['nombre' => '7', 'grupo_talla_id' => 3, 'orden' => 3],
            ['nombre' => '7.5', 'grupo_talla_id' => 3, 'orden' => 4],
            ['nombre' => '8', 'grupo_talla_id' => 3, 'orden' => 5],
            ['nombre' => '8.5', 'grupo_talla_id' => 3, 'orden' => 6],
            ['nombre' => '9', 'grupo_talla_id' => 3, 'orden' => 7],
            ['nombre' => '9.5', 'grupo_talla_id' => 3, 'orden' => 8],
            ['nombre' => '10', 'grupo_talla_id' => 3, 'orden' => 9],
            ['nombre' => '40', 'grupo_talla_id' => 3, 'orden' => 10],
            ['nombre' => '41', 'grupo_talla_id' => 3, 'orden' => 11],
    
            // Grupo de Talla: Talla Unica
            ['nombre' => 'Unica', 'grupo_talla_id' => 4, 'orden' => 1],

        ]);
    }
}
