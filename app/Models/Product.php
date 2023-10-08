<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $connection="mongodb";
    protected $collection="products";

    protected $fillable = [
        'title', 'price', 'description', 'user_id'
    ];

    protected $dates = ['created_at','updated_at'];
}
