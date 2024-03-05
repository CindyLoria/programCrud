<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'tgllahir' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'alamat'=> [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'universitas'=> [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'email'=> [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'created_at'=> [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'updated_at'=> [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'deleted_at'=> [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('mhs');
    }

    public function down()
    {
        $this->forge->dropTable('mhs', true);
    }
}
