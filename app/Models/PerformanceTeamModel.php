<?php

namespace App\Models;

use CodeIgniter\Model;

class PerformanceTeamModel extends Model
{
    protected $table      = 'performance_team_data'; // Table name
    protected $primaryKey = 'id_team';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['image_path', 'detail_th', 'detail_en', 'status'];
}
