<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show_Movie extends Model
{
    use HasFactory;
    protected $fillable=[
        'movie_id',
        'film_release_date',
        'show_time',
        'sinema_hall_no',
        'total_seat' ,
        'available_seat' ,
        'available_age',
    ];
   
    public function movies(){
        return $this->belongsTo(Movie::class);
    }

    public function Reservations(){
        return $this->hasMany(reservation::class);
        
    }
    
}