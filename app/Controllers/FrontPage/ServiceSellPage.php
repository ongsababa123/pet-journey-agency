<?php

namespace App\Controllers\FrontPage;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\ServiceHeaderModel;
use App\Models\CoverPageModel;
use App\Models\Service_Content_Buy_SaleModel;

class ServiceSellPage extends BaseController
{
    protected $uri_menu;
    protected $ContactModel;
    protected $ServiceHeaderModel;
    protected $CoverPageModel;
    protected $Service_Content_Buy_SaleModel;
    public function __construct()
    {
        helper(['url', 'form', 'view']);
        $current_url = current_url();
        $this->ContactModel = new ContactModel();
        $this->ServiceHeaderModel = new ServiceHeaderModel();
        $this->CoverPageModel = new CoverPageModel();
        $this->Service_Content_Buy_SaleModel = new Service_Content_Buy_SaleModel();

        // ตัดเหลือเฉพาะพาร์ทที่ต้องการ
        $parsed_url = parse_url($current_url, PHP_URL_PATH);
        $path_parts = explode('/', $parsed_url);

        // สมมติว่าเราต้องการส่วนสุดท้ายสองส่วน
        $this->uri_menu = $path_parts[3] . '/' . $path_parts[4];
    }


    //-- index --//
    public function index($id_service_header)
    {
        $data['uri_menu'] = $this->uri_menu;
        $data['contact_data'] = $this->ContactModel->first();
        $data['service_header'] = $this->ServiceHeaderModel->where('status', 1)->findAll();
        $data['cover_page'] = $this->CoverPageModel->where('status', 1)->findAll();
        $data['service_content_buy_sale'] = $this->Service_Content_Buy_SaleModel
            ->whereIn('status', [1, 2])
            ->where('id_service_header', $id_service_header)
            ->findAll();
        $data['id_service_header'] = $id_service_header;

        echo view('layout/header', $data);
        echo view('front_page/servicesellpage', $data);
        echo view('layout/footer');
    }
}
