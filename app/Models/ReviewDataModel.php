<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewDataModel extends Model
{
    protected $table      = 'review_data'; // Table name
    protected $primaryKey = 'id_review';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['image_path', 'detail_comment_th', 'detail_comment_en', 'status'];
}
