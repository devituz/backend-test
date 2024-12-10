<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Warehouses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $material1 = Material::find(1);
        $material2 = Material::find(2);
        $material3 = Material::find(3);
        $material4 = Material::find(4);

        Warehouses::create(['material_id' => $material1->id, 'quantity' => 12, 'price' => 1500]);
        Warehouses::create(['material_id' => $material1->id, 'quantity' => 12, 'price' => 1600]);
        Warehouses::create(['material_id' => $material2->id, 'quantity' => 150, 'price' => 300]);
        Warehouses::create(['material_id' => $material3->id, 'quantity' => 40, 'price' => 500]);
        Warehouses::create(['material_id' => $material3->id, 'quantity' => 260, 'price' => 550]);
        Warehouses::create(['material_id' => $material4->id, 'quantity' => 20, 'price' => 2000]);
    }
}
