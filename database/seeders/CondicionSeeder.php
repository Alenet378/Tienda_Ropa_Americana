<?php

namespace Database\Seeders;

use App\Models\Condicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CondicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Condicion::insert([
            ['nombre' => 'Grado A'],
            ['nombre' => 'Vintage 90s'],
            ['nombre' => 'Nueva con Etiqueta'],
        ]);
    }
}
