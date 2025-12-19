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
        $this->uri_menu = $path_parts[2] . '/' . $path_parts[4];
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
            $lang = isset($cut_url[0]) ? $cut_url[0] : 'en';
            foreach ($data['service_header'] as $key => $value) {
                if ($value['id_service_header'] == $id_service_header) {
                    if ($lang === 'th') {
                        $data['title'] = !empty($value['header_service_name_th']) ? $value['header_service_name_th'] : ($value['header_service_name_en'] ?? 'บริการ');
                    } else {
                        $data['title'] = !empty($value['header_service_name_en']) ? $value['header_service_name_en'] : ($value['header_service_name_th'] ?? 'Service');
                    }
                }
            }

            // set SEO metas for service page
            helper('seo');
            $serviceTitle = isset($data['title']) ? $data['title'] : ($lang === 'th' ? 'บริการ' : 'Service');
            $description = '';
            if (!empty($data['service_content']['content'])) {
                $plain = strip_tags($data['service_content']['content']);
                $description = mb_substr(trim(preg_replace('/\s+/', ' ', $plain)), 0, 150);
            } else {
                $description = $lang === 'th' ? ($serviceTitle . ' - บริการจาก PetEx') : ($serviceTitle . ' - Services by PetEx');
            }
            $keywords = $serviceTitle . ', PetEx, ' . ($lang === 'th' ? 'บริการสัตว์เลี้ยง' : 'pet services');
            set_meta([
                'description' => $description,
                'keywords' => $keywords,
                'image' => base_url('dist/img/og-image-demo.png'),
                'image_alt' => $serviceTitle,
                'canonical' => current_url(),
            ]);

            // Breadcrumbs for this service page (for JSON-LD)
            $data['breadcrumbs'] = [
                ['name' => ($cut_url[0] == 'th' ? 'หน้าแรก' : 'Home'), 'url' => base_url($cut_url[0] . '/homepage')],
                ['name' => ($cut_url[0] == 'th' ? 'บริการ' : 'Services'), 'url' => base_url($cut_url[0] . '/servicepage/' . $id_service_header)],
                ['name' => $serviceTitle, 'url' => current_url()],
            ];

            // Service structured data
            $ld = [
                "@context" => "https://schema.org",
                "@type" => "Service",
                "name" => $serviceTitle,
                "description" => $description,
                "provider" => [
                    "@type" => "Organization",
                    "name" => isset($data['contact_data']['company_name']) ? $data['contact_data']['company_name'] : ($data['contact_data']['facebook_name'] ?? 'PetEx'),
                    "url" => base_url()
                ],
                "url" => current_url(),
                "image" => [base_url('dist/img/og-image-demo.png')],
                "inLanguage" => ($lang === 'th' ? 'th' : 'en')
            ];

            $data['ld_service'] = $ld;

            echo view('layout/header', $data);
            echo view('front_page/servicepage', $data);
            echo view('layout/footer');
        }
    }
}
