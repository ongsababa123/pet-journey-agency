<?php

namespace App\Models;

use CodeIgniter\Model;

class Message_ContactModel extends Model
{
    protected $table      = 'message_contact'; // Table name
    protected $primaryKey = 'id_message_contact';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['name', 'lastname', 'email', 'phone_number', 'message', 'date_time', 'status'];
}
