<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceHeaderModel extends Model
{
    protected $table      = 'service_header'; // Table name
    protected $primaryKey = 'id_service_header';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['header_service_name_th', 'header_service_name_en', 'image_path', 'status'];
}
