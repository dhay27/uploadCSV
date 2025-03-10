<?php

namespace App\Models;

use CodeIgniter\Model;

class ArchivosCVS extends Model
{
    protected $table = 'datos'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'model', 'manufacturer', 'cost_in_credits', 'length', 'max_atmosphering_speed', 'crew', 'passengers',
     'cargo_capacity', 'consumables', 'hyperdrive_rating', 'MGLT' , 'starship_class', 'created', 'edited', 'url'];
}