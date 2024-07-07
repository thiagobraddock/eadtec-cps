<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table = 'films';  // Especifica a tabela do banco de dados
    protected $primaryKey = 'id';  // Define a chave primária

    protected $allowedFields = ['movieTitle', 'rating', 'releaseYear', 'imageUrl', 'categories', 'watched'];

    protected $useTimestamps = false;  // Ativa o uso de timestamps
    protected $createdField  = 'created_at';  // Campo para armazenar o timestamp de criação
    protected $updatedField  = 'updated_at';  // Campo para armazenar o timestamp de atualização
}
