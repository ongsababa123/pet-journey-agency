<?php

namespace App\Models;

use CodeIgniter\Model;

class Service_Content_Buy_SaleModel extends Model
{
    protected $table      = 'service_content_buy_sale'; // Table name
    protected $primaryKey = 'id_service_content_buy_sale';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['id_service_header', 'image_path', 'name_pet', 'breed', 'gender', 'age', 'color', 'characteristics', 'vaccination_history', 'price', 'status', 'language','create_date',];
}
