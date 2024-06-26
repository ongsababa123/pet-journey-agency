<?php

namespace App\Models;

use CodeIgniter\Model;

class More_aboutModel extends Model
{
    protected $table      = 'more_about_pet'; // Table name
    protected $primaryKey = 'id_more_about_pet';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['topic_name_th', 'topic_name_en', 'detail_th', 'detail_en', 'image_path', 'status'];
}
