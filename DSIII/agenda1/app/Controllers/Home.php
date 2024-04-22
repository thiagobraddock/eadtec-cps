<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Prepare os dados para a view

        $data = [
            'title' => 'Página Inicial',
            'message' => 'Seja bem-vindo ao meu site!',
        ];

        // Retorna a view, passando os dados
        return view('welcome_message', $data);
    }
}
