<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_material extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'material_id'];

}
