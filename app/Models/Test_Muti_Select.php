<?php

namespace App\Models;

use CodeIgniter\Model;

class Test_Muti_Select extends Model
{
    protected $table      = 'test_muti_select'; // Table name
    protected $primaryKey = 'id_muti_select';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['value_select'];
}
