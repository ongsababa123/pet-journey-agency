<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\QuotationModel;
use App\Models\ServiceHeaderModel;

class HomeDashboardController extends BaseController
{
    protected $uri_menu;
    protected $QuotationModel;
    protected $ServiceHeaderModel;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->QuotationModel = new QuotationModel();
        $this->ServiceHeaderModel = new ServiceHeaderModel();
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

        $data_page['quotation_all'] = $this->QuotationModel->countAllResults();
        $data_page['quotation_notread'] = $this->QuotationModel->where('status', '0')->countAllResults();
        $data_page['quotation_progress'] = $this->QuotationModel->where('status', '1')->countAllResults();
        $data_page['quotation_success'] = $this->QuotationModel->where('status', '2')->countAllResults();
        $data_page['quotation_cancel'] = $this->QuotationModel->where('status', '3')->countAllResults();
        $data_page['quotation_data'] = $this->QuotationModel->findAll();
        $data_page['service_header'] = $this->ServiceHeaderModel->findAll();
        
        echo view('dashboard/layout/header', $data);
        echo view('dashboard/index_home_dashboard' , $data_page);
        echo view('dashboard/layout/footer');
    }
}
