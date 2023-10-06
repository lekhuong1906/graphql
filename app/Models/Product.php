<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends 
{
    use HasFactory;
    protected $connection="mongodb";
    protected $collection="products";

    protected $fillable = [
        'title', 'author', 'language', 'year_published', 'isbn'
    ];
}
