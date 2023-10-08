<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $connection="mongodb";
    protected $collection="products";

    protected $fillable = [
        'first_name', 'last_name', 'avatar', 'user_id'
    ];

    protected $dates = ['created_at','updated_at'];

}
