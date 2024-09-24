<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class ContactDataController extends BaseController
{
    protected $uri_menu;
    protected $ContactModel;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->ContactModel = new ContactModel();
        $current_url = current_url();

        // ตัดเหลือเฉพาะพาร์ทที่ต้องการ
        $parsed_url = parse_url($current_url, PHP_URL_PATH);
        $path_parts = explode('/', $parsed_url);

        // สมมติว่าเราต้องการส่วนสุดท้ายสองส่วน
        $this->uri_menu = $path_parts[count($path_parts) - 2] . '/' . $path_parts[count($path_parts) - 1];
    }

    //-- index --//
    public function index()
    {
        $data['uri_menu'] = $this->uri_menu;
        $data_contact['data_contact'] = $this->ContactModel->first();
        echo view('dashboard/layout/header', $data);
        echo view('dashboard/index_contact_menu', $data_contact);
        echo view('dashboard/layout/footer');
    }

    //-- update contact --//
    public function update_contact($id_contact){

        $path_image = $this->request->getVar('path_image_old');
        $data_contact = [
            'open_time' => $this->request->getVar('input_opentime'),
            'open_time_en' => $this->request->getVar('input_opentime_en'),
            'email' => $this->request->getVar('input_email'),
            'phone_number' => $this->request->getVar('input_phone_number'),
            'facebook_link' => $this->request->getVar('input_facebook_link'),
            'facebook_name' => $this->request->getVar('input_facebook_name'),
            'instragram_link' => $this->request->getVar('input_instragram_link'),
            'instragram_name' => $this->request->getVar('input_instragram_name'),
            'line_link' => $this->request->getVar('input_line_link'),
            'line_name' => $this->request->getVar('input_line_name'),
            'whatsapp' => $this->request->getVar('input_whatsapp'),
            'email_receive' => $this->request->getVar('input_email_receive'),
        ];
        $target_dir = ROOTPATH . 'dist/img/logo/';
        $image = $this->request->getFile('logo_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }
            $image->move($target_dir, $imageName);
            $data_contact['logo_image_path'] = $imageName;

            if (file_exists($target_dir . $path_image)) {
                unlink($target_dir . $path_image);
            }
        }
        $this->ContactModel->update($id_contact, (object) $data_contact);
        $response = [
            'success' => true,
            'message' => 'อัพเดทข้อมูลสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
}
