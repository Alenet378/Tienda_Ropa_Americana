<?php

namespace Database\Seeders;

use App\Models\TipoPrenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoPrenda::insert([
            ['nombre' => 'Camisa', 'grupo_talla_id' => 1],
            ['nombre' => 'Pantalon', 'grupo_talla_id' => 2],
            ['nombre' => 'Blusa', 'grupo_talla_id' => 1],
            ['nombre' => 'Zapatos', 'grupo_talla_id' => 3],
            ['nombre' => 'Carteras', 'grupo_talla_id' => 4],
            ['nombre' => 'Vestido', 'grupo_talla_id' => 1],
            ['nombre' => 'Falda', 'grupo_talla_id' => 1],
            ['nombre' => 'Sueter', 'grupo_talla_id' => 1],
            ['nombre' => 'Conjunto', 'grupo_talla_id' => 1],
            ['nombre' => 'Mono', 'grupo_talla_id' => 1],
        ]);
    }
}
