<?php

namespace App\Models;

use CodeIgniter\Model;

class PartnerModel extends Model
{
    protected $table      = 'partner_data'; // Table name
    protected $primaryKey = 'id_partner';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['name_partner', 'type_partner', 'logo_partner_path' , 'status'];
}
