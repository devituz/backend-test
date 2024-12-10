<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create(['name' => 'Mato', 'quantity' => 20]);
        Material::create(['name' => 'Tugma', 'quantity' => 15]);
        Material::create(['name' => 'Ip', 'quantity' => 10]);
        Material::create(['name' => 'Zamok', 'quantity' => 5]);
    }
}
