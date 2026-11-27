<?php

namespace Database\Seeders;

use App\Models\GrupoTalla;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoTallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GrupoTalla::insert([
            ['nombre' => 'Letras'],
            ['nombre' => 'Numerica'],
            ['nombre' => 'Calzado'],
            ['nombre' => 'Talla Unica'],
        ]);
    }
}
