<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbjurusan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'singkatan_jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('jurusan');
    }

    public function down()
    {
        $this->forge->dropTable('jurusan');
    }
}
