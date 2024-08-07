<?php

namespace App\Controllers\FrontPage;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\ServiceHeaderModel;
use App\Models\CoverPageModel;
use App\Models\AboutPageModel;
use App\Models\TeamModel;
use App\Models\More_aboutModel;
class AboutUsPage extends BaseController
{
    protected $uri_menu;
    protected $ContactModel;
    protected $ServiceHeaderModel;
    protected $CoverPageModel;
    protected $AboutPageModel;
    protected $TeamModel;
    protected $More_aboutModel;
    public function __construct()
    {
        helper(['url', 'form', 'view']);
        $this->ContactModel = new ContactModel();
        $this->ServiceHeaderModel = new ServiceHeaderModel();
        $this->CoverPageModel = new CoverPageModel();
        $this->AboutPageModel = new AboutPageModel();
        $this->TeamModel = new TeamModel();
        $this->More_aboutModel = new More_aboutModel();
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
        $data['title'] = 'About Us';
        $data['uri_menu'] = $this->uri_menu;
        $data['contact_data'] = $this->ContactModel->first();
        $data['service_header'] = $this->ServiceHeaderModel->where('status', 1)->findAll();
        $data['cover_page'] = $this->CoverPageModel->where('status', 1)->findAll();
        $data['about_page'] = $this->AboutPageModel->findAll();
        $data['team'] = $this->TeamModel->where('status', 1)->findAll();
        $data['more_about'] = $this->More_aboutModel->where('status', 1)->findAll();
        
        echo view('layout/header' , $data);
        echo view('front_page/aboutuspage' , $data);
        echo view('layout/footer');
    }
}
