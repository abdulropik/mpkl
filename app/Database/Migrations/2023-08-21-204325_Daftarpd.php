<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftarpd extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pd' => [
                'type'           => 'INT',
                'constraint'     => 111,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nik_pd' => [
                'type'       => 'VARCHAR',
                'constraint' => 16,
                'NOT NULL'   => true,
            ],
            'nisn' => [
                'type'       => 'VARCHAR',
                'constraint' => 10
            ],
            'nipd' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
                'NOT NULL'   => true,
            ],
            'nama_pd' => [
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
            'jurusan_id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],

        ]);
        $this->forge->addKey('id_pd', true);
        $this->forge->addForeignKey('jurusan_id', 'jurusan', 'id');
        $this->forge->createTable('daftarPD');
    }

    public function down()
    {
        $this->forge->dropTable('daftarPD');
    }
}
