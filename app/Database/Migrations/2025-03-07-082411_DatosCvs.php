<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DatosCvs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INTEGER', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'model'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'manufacturer'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'cost_in_credits'  => ['type' => 'VARCHAR', 'constraint' => 255],
            'length' => ['type' => 'VARCHAR', 'constraint' => 255],
            'max_atmosphering_speed' => ['type' => 'VARCHAR', 'constraint' => 255],
            'passengers' => ['type' => 'VARCHAR', 'constraint' => 255],
            'cargo_capacity' => ['type' => 'VARCHAR', 'constraint' => 255],
            'consumables' =>['type' => 'VARCHAR', 'constraint' => 255],
            'hyperdrive_rating' =>['type' => 'VARCHAR', 'constraint' => 255],
            'MGLT' => ['type' => 'VARCHAR', 'constraint' => 255],
            'starship_class' => ['type' => 'VARCHAR', 'constraint' => 255],
            'created' => ['type' => 'VARCHAR', 'constraint' => 255],
            'edited' => ['type' => 'VARCHAR', 'constraint' => 255],
            'url' =>['type' => 'VARCHAR', 'constraint' => 255],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('datos_csv');
    }

    public function down()
    {
        //
    }
}
