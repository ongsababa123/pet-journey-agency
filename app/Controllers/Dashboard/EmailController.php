<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class EmailController extends BaseController
{
    protected $ContactModel;
    protected $email_receive;
    public function __construct()
    {
        helper(['form', 'file']);
        $this->ContactModel = new ContactModel();

        $email_receive_get = $this->ContactModel->select('email_receive')->first();
        $this->email_receive = $email_receive_get['email_receive'];
    }
    public function sendEmail()
    {
        $email = \Config\Services::email();

        $email->setFrom($this->email_receive, 'Pet Journey Agency');
        $email->setTo($this->email_receive);

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

        $email->setFrom($this->email_receive, 'Pet Journey Agency');
        $email->setTo($this->email_receive);

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

        $email->setFrom($this->email_receive, 'Pet Journey Agency');
        $email->setTo($this->email_receive);

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
