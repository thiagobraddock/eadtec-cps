<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $movies = [
            [
                'id' => 1,
                'movieTitle' => 'Um sonho de liberdade',
                'rating' => 4,
                'releaseYear' => 1994,
                'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/umX3lBhHoTV7Lsci140Yr8VpXyN.jpg',
                'categories' => ['Drama'],
                'watched' => false
            ],
            [
                'id' => 2,
                'movieTitle' => 'Exterminador do Futuro 2',
                'rating' => 5,
                'releaseYear' => 1991,
                'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/l5uPlrjcVSI3z3duYeyRAP2E2D0.jpg',
                'categories' => ['Sci-Fi', 'Ação'],
                'watched' => false
            ],
            [
                'id' => 3,
                'movieTitle' => 'The Dark Knight',
                'rating' => 4,
                'releaseYear' => 2008,
                'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/iGZX91hIqM9Uu0KGhd4MUaJ0Rtm.jpg',
                'categories' => ['Ação', 'Drama'],
                'watched' => false
            ],
            [
                'id' => 4,
                'movieTitle' => 'Forrest Gump',
                'rating' => 4,
                'releaseYear' => 1994,
                'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/d74WpIsH8379TIL4wUxDneRCYv2.jpg',
                'categories' => ['Drama', 'Romance'],
                'watched' => false
            ],
        ];

        return view('home', ['movies' => $movies]);
    }
}
