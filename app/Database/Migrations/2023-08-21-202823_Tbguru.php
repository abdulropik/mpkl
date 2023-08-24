<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbguru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idguru' => [
                'type'           => 'INT',
                'constraint'     => 111,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nik_guru' => [
                'type'       => 'VARCHAR',
                'constraint' => 16,
                'NOT NULL'   => true,
            ],
            'nip' => [
                'type'       => 'VARCHAR',
                'constraint' => 10
            ],
            'nama_guru' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'jk_pd' => [
                'type' => 'ENUM',
                'constraint' => array('Laki-laki', 'Perempuan'),
                'default'    => 'Laki-laki',
            ],
            'tempatlahir_pd' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'tgllahir_pd' => [
                'type'       => 'DATE',
            ],
            'agama' => [
                'type' => 'ENUM',
                'constraint' => array('Islam', 'Kristen', 'Khatolik', 'Hindu', 'Budha'),
                'default'    => 'Islam',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

        ]);
        $this->forge->addKey('idguru', true);
        $this->forge->createTable('guru');
    }

    public function down()
    {
        $this->forge->dropTable('guru');
    }
}
