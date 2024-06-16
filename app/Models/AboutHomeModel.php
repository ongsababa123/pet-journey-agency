<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutHomeModel extends Model
{
    protected $table      = 'about_home'; // Table name
    protected $primaryKey = 'id_about_home';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['detail', 'path_video', 'language'];
}
