<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity'];

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'product_materials');
    }
}
