<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'movie_name'=>'A Part of You',
            'image' => 'img/movie_images/a_part_of_you_poster.jpg',  
            'language'=>'Swedish',
            'description'=>'A teenager struggles to pick up the pieces of her shattered world in this emotional and bittersweet coming-of-age drama about those who are left behind.',
            'rating' => '7.0 / 10',
            'run_time'=>'100 minutes',
            'release_date' => date('2024-5-31')  ,
            
            
        ]);
    }
}
