<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutPageModel extends Model
{
    protected $table      = 'about_page'; // Table name
    protected $primaryKey = 'id_about_page';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['detail_page', 'image_page_path', 'language'];
}
