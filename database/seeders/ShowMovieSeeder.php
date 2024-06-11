<?php

namespace Database\Seeders;

use App\Models\Show_Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShowMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Show_Movie::create([
            'movie_id'=>1,
            'film_release_date' => date('2024-5-31'),
            'show_time'=> '3:00',
            'sinema_hall_no'=> 1,
            'total_seat'=>30,
            'available_seat'=> 10,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>1,
            'film_release_date' => date('2024-5-31'),
            'show_time'=> '6:00',
            'sinema_hall_no'=> 1,
            'total_seat'=>30,
            'available_seat'=> 25,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>1,
            'film_release_date' => date('2024-6-2'),
            'show_time'=> '1:00',
            'sinema_hall_no'=> 3,
            'total_seat'=>30,
            'available_seat'=> 25,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>3,
            'film_release_date' => date('2023-6-7'),
            'show_time'=> '2:00',
            'sinema_hall_no'=> 2,
            'total_seat'=>30,
            'available_seat'=> 19,
            'available_age'=> 20,
        ]);
    }
}
