<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFoto extends Migration
{
    public function up()
    {
        $this->forge->addColumn('mhs', [
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('mhs', ['foto']);

    }
}
