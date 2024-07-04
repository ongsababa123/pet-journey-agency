<?php

namespace App\Controllers\FrontPage;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\ServiceHeaderModel;
use App\Models\CoverPageModel;
use App\Models\Service_Content;
use App\Models\PartnerModel;

class ServicePage extends BaseController
{
    protected $uri_menu;
    protected $ContactModel;
    protected $ServiceHeaderModel;
    protected $CoverPageModel;
    protected $Service_Content;
    protected $PartnerModel;
    public function __construct()
    {
        helper(['url', 'form', 'view']);
        $current_url = current_url();
        $this->ContactModel = new ContactModel();
        $this->ServiceHeaderModel = new ServiceHeaderModel();
        $this->CoverPageModel = new CoverPageModel();
        $this->Service_Content = new Service_Content();
        $this->PartnerModel = new PartnerModel();
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
        $cut_url = explode('/', $this->uri_menu);

        // var_dump($data);
        $data['contact_data'] = $this->ContactModel->first();
        $data['service_header'] = $this->ServiceHeaderModel->where('status', 1)->findAll();
        $data['cover_page'] = $this->CoverPageModel->where('status', 1)->findAll();
        $data['service_content'] = $this->Service_Content->where('language', $cut_url[0])->where('id_service_header', $id_service_header)->first();
        if (empty($data['service_content'])) {
            return redirect()->to(base_url($cut_url[0] . '/error'));
        } else {
            if ($data['service_content']['type_partner'] != 0) {
                $data['service_content']['data_partners'] = $this->PartnerModel->where('type_partner', $data['service_content']['type_partner'])->where('status', 1)->findAll();
            }
            $data['id_service_header'] = $id_service_header;

            echo view('layout/header', $data);
            echo view('front_page/servicepage', $data);
            echo view('layout/footer');
        }
    }
}
