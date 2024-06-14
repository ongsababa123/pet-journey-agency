<?php

namespace App\Models;

use CodeIgniter\Model;

class CoverPageModel extends Model
{
    protected $table      = 'cover_page_data'; // Table name
    protected $primaryKey = 'id_cover';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['path_image', 'status', 'language'];
}
