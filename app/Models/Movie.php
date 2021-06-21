<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $fillable = [
        'nama_film',
        'desk_film',
        'cover_film',
        'harga',
    ];

    public function booking() 
    {
        return $this->hasMany(Booking::class, 'id');
    }
}
