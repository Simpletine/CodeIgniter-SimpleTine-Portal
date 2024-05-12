<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSessions extends Migration
{

    protected $table_name = 'st_sessions';
    public function up()
    {
        // Create table
        $this->forge->addField([
            'id' => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'null'       => false
            ],
            'ip_address' => [
                'type'       => 'VARCHAR',
                'constraint' => 45,
                'null'       => false
            ],
            'timestamp' => [
                'type'       => 'TIMESTAMP',
                'null'       => false,
            ],
            'data' => [
                'type'       => 'BLOB',
                'null'       => false
            ]
        ]);

        // Add Key
        $this->forge->addKey('id', true);
        $this->forge->addKey('timestamp');

        $this->forge->createTable($this->table_name, true);

        // Update column timestamp default CURRENT_TIMESTAMP
        $this->db->query("ALTER TABLE {$this->table_name} MODIFY COLUMN `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
    }

    public function down()
    {
        // Drop table
        $this->forge->dropTable($this->table_name, true);
    }
}
