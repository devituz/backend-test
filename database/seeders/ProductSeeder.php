<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product1 = Product::create(['name' => 'Koylak', 'quantity' => 30]);
        $product2 = Product::create(['name' => 'Shim', 'quantity' => 20]);

        $material1 = Material::find(1);
        $material2 = Material::find(2);
        $material3 = Material::find(3);
        $material4 = Material::find(4);

        $product1->materials()->attach([$material1->id, $material2->id]);
        $product2->materials()->attach([$material1->id, $material3->id, $material4->id]);
    }
}
