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

    ];
}
