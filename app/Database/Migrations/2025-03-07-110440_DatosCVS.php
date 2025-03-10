<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DatosCVS extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INTEGER', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'model' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'manufacturer' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'cost_in_credits' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'length' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'max_atmosphering_speed' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'crew' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'passengers' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'cargo_capacity' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'consumables' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'hyperdrive_rating' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'MGLT' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'starship_class' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'created' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'edited' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'url' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('datos');
    }

    public function down()
    {
        $this->forge->dropTable('datos');
    }
}
