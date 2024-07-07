<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFilmsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'movieTitle' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'rating' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'releaseYear' => [
                'type'       => 'YEAR',
            ],
            'imageUrl' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'categories' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'watched' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('films');
    }

    public function down()
    {
        $this->forge->dropTable('films');
    }
}
