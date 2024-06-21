<?php

namespace App\Models;

use CodeIgniter\Model;

class QuotationModel extends Model
{
    protected $table      = 'quotation'; // Table name
    protected $primaryKey = 'id_quotation';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['name_last', 'email', 'phone_number', 'travel_date', 'country_of_origin', 'destination_country', 'travel_type', 'transport_format', 'service', 'breed', 'age', 'weight', 'note', 'status'];
}
