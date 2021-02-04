<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'videojuego_id',
        'customer',
        'analysis',
        'star'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function videojuego(){
        return $this->belongsTo(Product::class);
    }
}
