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
            'movie_id'=>2,
            'film_release_date' => date('2024-7-22'),
            'show_time'=> '11:00',
            'sinema_hall_no'=> 1,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>2,
            'film_release_date' => date('2024-7-11'),
            'show_time'=> '10:00',
            'sinema_hall_no'=> 4,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>3,
            'film_release_date' => date('2024-6-7'),
            'show_time'=> '2:00',
            'sinema_hall_no'=> 2,
            'total_seat'=>30,
            'available_seat'=> 19,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>3,
            'film_release_date' => date('2024-7-25'),
            'show_time'=> '5:00',
            'sinema_hall_no'=> 2,
            'total_seat'=>30,
            'available_seat'=> 9,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>3,
            'film_release_date' => date('2024-7-22'),
            'show_time'=> '10:00',
            'sinema_hall_no'=> 5,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>4,
            'film_release_date' => date('2024-7-12'),
            'show_time'=> '8:00',
            'sinema_hall_no'=> 5,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>4,
            'film_release_date' => date('2024-7-13'),
            'show_time'=> '3:00',
            'sinema_hall_no'=> 1,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>5,
            'film_release_date' => date('2024-6-13'),
            'show_time'=> '7:00',
            'sinema_hall_no'=> 2,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>5,
            'film_release_date' => date('2024-7-15'),
            'show_time'=> '9:00',
            'sinema_hall_no'=> 1,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>6,
            'film_release_date' => date('2024-7-18'),
            'show_time'=> '1:00',
            'sinema_hall_no'=> 5,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>7,
            'film_release_date' => date('2024-7-1'),
            'show_time'=> '9:00',
            'sinema_hall_no'=> 1,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);
        Show_Movie::create([
            'movie_id'=>7,
            'film_release_date' => date('2024-7-1'),
            'show_time'=> '2:00',
            'sinema_hall_no'=> 1,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);
        Show_Movie::create([
            'movie_id'=>11,
            'film_release_date' => date('2024-7-7'),
            'show_time'=> '4:00',
            'sinema_hall_no'=> 1,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);
        Show_Movie::create([
            'movie_id'=>11,
            'film_release_date' => date('2024-10-7'),
            'show_time'=> '4:00',
            'sinema_hall_no'=> 2,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);
        Show_Movie::create([
            'movie_id'=>11,
            'film_release_date' => date('2024-11-7'),
            'show_time'=> '7:00',
            'sinema_hall_no'=> 4,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>10,
            'film_release_date' => date('2024-8-7'),
            'show_time'=> '7:00',
            'sinema_hall_no'=> 2,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);

        Show_Movie::create([
            'movie_id'=>10,
            'film_release_date' => date('2024-8-7'),
            'show_time'=> '1:00',
            'sinema_hall_no'=> 2,
            'total_seat'=>30,
            'available_seat'=> 7,
            'available_age'=> 20,
        ]);
    }
}
