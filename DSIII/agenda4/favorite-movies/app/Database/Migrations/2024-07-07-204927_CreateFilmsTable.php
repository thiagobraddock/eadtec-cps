<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFilmsTable extends Migration
{
    public function up()
    {
        $fields = [
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
        ];
        $this->forge->addColumn('films', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('films', ['imageUrl', 'categories', 'watched']);
    }
}
