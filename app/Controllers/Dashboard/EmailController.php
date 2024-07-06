<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class EmailController extends BaseController
{
    public function sendEmail()
    {
        $email = \Config\Services::email();

        $email->setFrom('areeyeooo@gmail.com', 'Pet Journey Agency');
        $email->setTo('areeyeooo@gmail.com');

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

    public function sendEmail_quotation($data)
    {
        $email = \Config\Services::email();

        $email->setFrom('areeyeooo@gmail.com', 'Pet Journey Agency');
        $email->setTo('areeyeooo@gmail.com');

        $email->setSubject('คำขอใบเสนอราคาใหม่จากคุณ - ' . $data['name_last']);

        $email_template = view('dashboard/email_quotation.php',  ['data' => $data]);
        $email->setMessage($email_template);

        if ($email->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function sendEmail_message_contact($data)
    {
        $email = \Config\Services::email();

        $email->setFrom('areeyeooo@gmail.com', 'Pet Journey Agency');
        $email->setTo('areeyeooo@gmail.com');

        $email->setSubject('ข้อมูลการติดต่อใหม่!');

        $email_template = view('dashboard/email_message_contact.php',  ['data' => $data]);
        $email->setMessage($email_template);

        if ($email->send()) {
            return true;
        } else {
            return false;
        }
    }
}
