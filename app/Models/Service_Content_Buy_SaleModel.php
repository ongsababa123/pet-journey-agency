<?php

namespace App\Models;

use CodeIgniter\Model;

class Service_Content_Buy_SaleModel extends Model
{
    protected $table      = 'service_content_buy_sale'; // Table name
    protected $primaryKey = 'id_service_content_buy_sale';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['id_service_header', 'image_path', 'name_pet_th', 'name_pet_en', 'breed_th', 'breed_en', 'gender', 'age', 'color_th', 'color_en', 'characteristics_th', 'characteristics_en', 'vaccination_history_th', 'vaccination_history_en', 'price', 'status','create_date',];
}
