<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FilmModel;

class Filmes extends BaseController
{
    protected $filmModel;

    public function __construct()
    {
        $this->filmModel = new FilmModel();
    }

    public function index()
    {

        // $movies = [
        //     [
        //         'id' => 1,
        //         'movieTitle' => 'Um sonho de liberdade',
        //         'rating' => 4,
        //         'releaseYear' => 1994,
        //         'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/umX3lBhHoTV7Lsci140Yr8VpXyN.jpg',
        //         'categories' => ['Drama'],
        //         'watched' => false
        //     ],
        //     [
        //         'id' => 2,
        //         'movieTitle' => 'Exterminador do Futuro 2',
        //         'rating' => 5,
        //         'releaseYear' => 1991,
        //         'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/l5uPlrjcVSI3z3duYeyRAP2E2D0.jpg',
        //         'categories' => ['Sci-Fi', 'Ação'],
        //         'watched' => false
        //     ],
        //     [
        //         'id' => 3,
        //         'movieTitle' => 'The Dark Knight',
        //         'rating' => 4,
        //         'releaseYear' => 2008,
        //         'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/iGZX91hIqM9Uu0KGhd4MUaJ0Rtm.jpg',
        //         'categories' => ['Ação', 'Drama'],
        //         'watched' => false
        //     ],
        //     [
        //         'id' => 4,
        //         'movieTitle' => 'Forrest Gump',
        //         'rating' => 4,
        //         'releaseYear' => 1994,
        //         'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/d74WpIsH8379TIL4wUxDneRCYv2.jpg',
        //         'categories' => ['Drama', 'Romance'],
        //         'watched' => false
        //     ],
        // ];

        // Verifica se a tabela está vazia antes de inserir
        if ($this->filmModel->countAll() == 0) {
            $this->filmModel->insertBatch([
                [

                    'movieTitle' => 'Um sonho de liberdade',
                    'rating' => 4,
                    'releaseYear' => 1994,
                    'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/umX3lBhHoTV7Lsci140Yr8VpXyN.jpg',
                    'categories' => 'Drama',
                    'watched' => false
                ],
                [

                    'movieTitle' => 'Exterminador do Futuro 2',
                    'rating' => 5,
                    'releaseYear' => 1991,
                    'imageUrl' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/l5uPlrjcVSI3z3duYeyRAP2E2D0.jpg',
                    'categories' => 'Sci-Fi, Ação',
                    'watched' => false
                ],
            ]);
        }


        // Busca todos os filmes do banco de dados
        $movies = $this->filmModel->findAll();

        return view('filmes/home', ['movies' => $movies]);
    }

    public function lancamentos()
    {
        return view('filmes/lancamentos');
    }
}
