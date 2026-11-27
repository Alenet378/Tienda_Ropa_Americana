<?php

namespace Database\Seeders;

use App\Models\EstadoPrenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoPrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoPrenda::insert([
            ['nombre' => 'Vendida'],
            ['nombre' => 'En Carrito'],
            ['nombre' => 'Disponible'],
        ]);
    }
}
