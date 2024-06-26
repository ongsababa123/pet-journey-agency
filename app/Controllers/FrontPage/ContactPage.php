<?php

namespace App\Controllers\FrontPage;

use App\Controllers\BaseController;

class ContactPage extends BaseController
{
    protected $uri_menu;
    public function __construct()
    {
        helper(['url', 'form', 'view']);
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
        echo view('layout/header');
        echo view('front_page/contactpage');
        echo view('layout/footer');
    }
}
