<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $connection = "mongodb";
    protected $collection = "users";

    protected $fillable = [
        '_id',
        'name',
        'email',
        'password'
    ];

    // protected $hidden = [];

    protected $dates = ['created_at','updated_at'];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function scopeVerified(Builder $query) : Builder
    {
        return $query->whereNotNull('created_at')->orderBy('created_at','desc');
    }
}
