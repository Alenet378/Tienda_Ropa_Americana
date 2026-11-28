<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marca::insert([
            ['nombre' => 'Ann Taylor'],
            ['nombre' => 'Banana Republic'],
            ['nombre' => 'BCBG'],
            ['nombre' => 'Calvin Klein'],
            ['nombre' => 'Chicos'],
            ['nombre' => 'Express'],
            ['nombre' => 'Gap'],
            ['nombre' => 'Gucci'],
            ['nombre' => 'H&M'],
            ['nombre' => 'Jessica Simpson'],
            ['nombre' => 'Kenneth Cole'],
            ['nombre' => 'MK'],
            ['nombre' => 'Nautica'],
            ['nombre' => 'Nine West'],
            ['nombre' => 'Ralp Lauren'],
            ['nombre' => 'Talbots'],
            ['nombre' => 'Tommy Halfiger'],
            ['nombre' => 'Vince Camuto'],
            ['nombre' => 'Vineyard Vines'],
            ['nombre' => 'Zara'],
        ]);
    }
}
