<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CoverPageModel;

class HomePage_edit_cover extends BaseController
{
    protected $uri_menu;
    protected $CoverPageModel;

    public function __construct()
    {
        helper(['form']);
        helper(['filesystem']);
        $this->CoverPageModel = new CoverPageModel();
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
        echo view('dashboard/header', $data);
        echo view('dashboard/home_page/index_cover');
        echo view('dashboard/footer');
    }


}
