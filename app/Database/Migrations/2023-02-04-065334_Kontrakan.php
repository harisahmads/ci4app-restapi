<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kontrakan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_rumah' => [
                'type'       => 'INT',
                'constraint' => 3,
            ],
            'penghuni' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pekerjaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'no_kk' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'tanggal_masuk' => [
                'type'       => 'DATE',
                'null' => 'true',
            ],
            'lama_sewa' => [
                'type'       => 'INT',
                'constraint' => 2,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'current_timestamp' => 'true',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'current_timestamp' => 'true',
            ]
        ]);
        $this->forge->addKey('id', true); //primary key
        $this->forge->createTable('kontrakan');
    }

    public function down()
    {
        $this->forge->dropTable('kontrakan');
    }
}
