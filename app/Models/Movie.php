<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_name',
        'image',
        'language',
        'description',
        'rating',
        'run_time',
        'release_date',
        'type',
    ];

    //Laravel will automatically link the id column of the movie table to the movie_id column of the Show_Movie table.
    public function Show_Movies(){
        return $this -> hasMany(Show_Movie::class);
    }
    
}

