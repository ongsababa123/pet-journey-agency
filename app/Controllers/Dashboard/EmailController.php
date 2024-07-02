<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class EmailController extends BaseController
{
    public function sendEmail()
    {
        $email = \Config\Services::email();

        $email->setFrom('6239010001@p-vec.ac.th', 'Pet Journey Agency');
        $email->setTo('6239010001@p-vec.ac.th');

        $email->setSubject('คำขอใบเสนอราคาใหม่จากคุณ');

        $email_template = view('dashboard/email_quotation.html');
        $email->setMessage($email_template);
        
        if ($email->send()) {
            echo 'Email successfully sent';
        } else {
            echo 'Error sending email';
            print_r($email->printDebugger(['headers']));
        }
    }
}
