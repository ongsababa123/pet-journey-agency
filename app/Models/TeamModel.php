<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table      = 'veterinary_team'; // Table name
    protected $primaryKey = 'id_team';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['name_last_name_th', 'name_last_name_en', 'position_th', 'position_en', 'image_path', 'status'];
}
