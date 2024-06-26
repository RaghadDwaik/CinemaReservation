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
            'rating' => '7.0',
            'run_time'=>'100 minutes',
            'release_date' => date('2024-5-31')  ,
            'type'=> 'Drama',
            'trailer_url' => 'https://www.youtube.com/watch?v=npd8RywPJ_E'



        ]);

        Movie::create([
            'movie_name'=>'The Mill',
            'image' => 'img/movie_images/the_mill.jpg',
            'language'=>'English',
            'description'=>'A businessman mysteriously wakes up in an open-air prison cell with only an old grist mill. Forced to work as a beast of burden, he must find a way to escape before the birth of his child.',
            'rating' => '6.0',
            'run_time'=>'106  minutes',
            'release_date' => date('2023-10-9'),
            'type' =>'Drama',
            'trailer_url' => 'https://www.youtube.com/watch?v=Eab4AxcTols',


        ]);
        Movie::create([
            'movie_name'=>'Paradox Effect',
            'image' => 'img/movie_images/paradox_effect.jpg',
            'language'=>'English',
            'description'=>'After witnessing a murder, an ex-junkie is forced to cooperate with the killer to save her daughters life. She must fight time, the police and the criminal underworld to save the only person who means something to her.',
            'rating' => '9.0',
            'run_time'=>'87  minutes',
            'release_date' => date('2023-6-7'),
            'type' =>'Action',
            'trailer_url' => 'https://www.youtube.com/watch?v=DjmNWIymTf4',


        ]);

        Movie::create([
            'movie_name'=>'IF',
            'image' => 'img/movie_images/if.jpg',
            'language'=>'English',
            'description'=>'From writer and director John Krasinski, IF is about a girl who discovers that she can see everyones imaginary friends and what she does with that superpower as she embarks on a magical adventure to reconnect forgotten IFs with their kids.',
            'rating' => '3.9',
            'run_time'=>'104  minutes',
            'release_date' => date('2024-5-17'),
            'type' =>'Animation',
            'trailer_url' => 'https://www.youtube.com/watch?v=NISb51kjq7U',


        ]);

        Movie::create([
            'movie_name'=>'The Garfield Movie',
            'image' => 'img/movie_images/the_garfield_movie.jpg',
            'language'=>'English',
            'description'=>'After Garfields unexpected reunion with his long-lost father, ragged alley cat Vic, he and his canine friend Odie are forced from their perfectly pampered lives to join Vic on a risky heist.',
            'rating' => '5.9',
            'run_time'=>'101  minutes',
            'release_date' => date('2024-5-24'),
            'type' =>'Animation',
            'trailer_url' => 'https://www.youtube.com/watch?v=IeFWNtMo1Fs',


        ]);

        Movie::create([
            'movie_name'=>'يوم 13',
            'image' => 'img/movie_images/day_13.jpg',
            'language'=>'عربي',
            'description'=>'في إطار من الرعب، يعود عز الدين من الخارج بعد غياب سنوات طويلة، باحثا عن أهله، ومع إقامته في قصر عائلته، يكتشف مغامرة غير متوقعة داخل القصر.',
            'rating' => '5.9',
            'run_time'=>'112  minutes',
            'release_date' => date('2023-4-21'),
            'type' =>'Action',
            'trailer_url' => 'https://www.youtube.com/watch?v=IWEFeqZKcc4',


        ]);
        Movie::create([
            'movie_name'=>'Stay with Us',
            'image' => 'img/movie_images/reste_un_peu.jpg',
            'language'=>'English',
            'description'=>'Gad returns from the USA to his French homeland. However, he does not tell his Jewish family that he now wants to convert to Catholicism. When Gads parents learn of this, they try to bring him back to Judaism.',
            'rating' => '5.9',
            'run_time'=>'90  minutes',
            'release_date' => date('2022-10-24'),
            'type' =>'Comedy',
            'trailer_url' => 'https://www.youtube.com/watch?v=oa30YSyWvGs',


        ]);

        Movie::create([
            'movie_name'=>'Paradox Effect',
            'image' => 'img/movie_images/paradox_effect.jpg',
            'language'=>'English',
            'description'=>'After witnessing a murder, an ex-junkie is forced to cooperate with the killer to save her daughters life. She must fight time, the police and the criminal underworld to save the only person who means something to her.',
            'rating' => '9.0',
            'run_time'=>'87  minutes',
            'release_date' => date('2023-6-7'),
            'type' =>'Action',
            'trailer_url' => 'https://www.youtube.com/watch?v=DjmNWIymTf4',



        ]);

        Movie::create([
            'movie_name'=>'Eric',
            'image' => 'img/movie_images/eric.jpg',
            'language'=>'English',
            'description'=>'Vincent, a grief-stricken father whose son goes missing, finds solace through his friendship with Eric, the monster that lives under Edgars bed.',
            'rating' => '7.0',
            'run_time'=>'55  minutes',
            'release_date' => date('2024-3-24'),
            'type' =>'Drama',
            'trailer_url' => 'https://www.youtube.com/watch?v=eGaAl_8QW2c',


        ]);

        Movie::create([
            'movie_name'=>'Challengers',
            'image' => 'img/movie_images/challengerc.jpeg',
            'language'=>'English',
            'description'=>'Tashi, a former tennis prodigy turned coach, turned her husband into a champion. But to overcome a losing streak, he needs to face his ex-best friend and Tashis ex-boyfriend.',
            'rating' => '2.6',
            'run_time'=>'131  minutes',
            'release_date' => date('2024-4-26'),
            'type' =>'Drama',
            'trailer_url' => 'https://www.youtube.com/watch?v=-2N3hmRmwHQ',


        ]);

        Movie::create([
            'movie_name'=>'Inside Out 2',
            'image' => 'img/movie_images/inside_out.jpg',
            'language'=>'English',
            'description'=>'Follow Riley, in her teenage years, encountering new emotions.',
            'rating' => '2.6',
            'run_time'=>'100  minutes',
            'release_date' => date('2024-6-14'),
            'type' =>'Animation',
            'trailer_url' => 'https://www.youtube.com/watch?v=LEjhY15eCx0',


        ]);

        Movie::create([
            'movie_name'=>'The Lion King',
            'image' => 'img/movie_images/lion_king.jpg',
            'language'=>'English',
            'description'=>'Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.',
            'rating' => '8.5',
            'run_time'=>'88  minutes',
            'release_date' => date('1994-7-14'),
            'type' =>'Animation',
            'trailer_url' => 'https://www.youtube.com/watch?v=7TavVZMewpY',


        ]);


    }
}
