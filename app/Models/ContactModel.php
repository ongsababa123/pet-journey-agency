<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table      = 'contact'; // Table name
    protected $primaryKey = 'id_contact';    // Primary key column name

    // Specify which columns can be updated
    protected $allowedFields = ['open_time', 'open_time_en', 'email', 'phone_number', 'facebook_link', 'facebook_name', 'instragram_link', 'instragram_name', 'line_link', 'line_name', 'whatsapp', 'logo_image_path', 'email_receive'];
}
