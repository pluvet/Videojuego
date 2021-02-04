<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'genre',
        'price',
        'stock',
        'discount'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function reviews(){

        return $this->hasMany(Review::class);

    }
}
