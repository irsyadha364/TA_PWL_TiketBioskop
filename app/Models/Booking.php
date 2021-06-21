<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Movie;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $fillable = [        
        'jumlah_tiket',
        'tanggal',
        'jam',                              
        'total_harga',                              
    ];

    public function user() 
    {        
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function movie() 
    {        
        return $this->belongsTo(Movie::class, 'id_film');
    }
}
