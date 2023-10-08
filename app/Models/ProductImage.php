<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $connection="mongodb";
    protected $collection="products";

    protected $fillable = [
        'image', 'product_id'
    ];

    protected $dates = ['created_at','updated_at'];
}
