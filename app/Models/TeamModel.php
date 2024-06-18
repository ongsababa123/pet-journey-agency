<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table      = 'veterinary_team'; // Table name
    protected $primaryKey = 'id_team';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['name_last_name', 'position', 'image_path', 'language', 'status'];
}
