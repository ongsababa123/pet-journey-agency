<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAdminModel extends Model
{
    protected $table      = 'user_admin'; // Table name
    protected $primaryKey = 'id_user_admin';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['email_admin', 'name_last_admin', 'password_admin', 'time_stamp_login', 'status'];
}
