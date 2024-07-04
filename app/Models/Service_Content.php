<?php

namespace App\Models;

use CodeIgniter\Model;

class Service_Content extends Model
{
    protected $table      = 'service_content'; // Table name
    protected $primaryKey = 'id_service_content';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['id_service_header', 'content', 'language', 'type_partner'];
}
