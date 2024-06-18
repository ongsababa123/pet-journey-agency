<?php

namespace App\Controllers\Dashboard\Aboutpage;

use App\Controllers\BaseController;
use App\Models\AboutPageModel;

class AboutPage_HeadController extends BaseController
{
    protected $uri_menu;
    protected $AboutPageModel;
    public function __construct()
    {
        helper(['form', 'file']);
        $this->AboutPageModel = new AboutPageModel();
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
        $data_about_page['about_page'] = $this->AboutPageModel->findAll();;
        echo view('dashboard/layout/header', $data);
        echo view('dashboard/about_page/index_about_head', $data_about_page);
        echo view('dashboard/layout/footer');
    }

    //-- update about head--//
    public function update_about_head($id_about_page, $image_page_path_old)
    {
        $data_update = [
            'detail_page' => $this->request->getVar('text_area_content_about')
        ];

        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $target_dir = ROOTPATH . 'dist/img/about-team/';
            $image_name = $image->getName();

            if (file_exists($target_dir . $image_name)) {
                $image_name = $image->getRandomName();
            }

            $image->move($target_dir, $image_name);
            $data_update['image_page_path'] = $image_name;

            if (is_file($target_dir . $image_page_path_old)) {
                unlink($target_dir . $image_page_path_old);
            }
        }

        $this->AboutPageModel->update($id_about_page, (object) $data_update);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'อัพเดทข้อมูลเรียบร้อยแล้ว',
            'reload' => true,
        ]);
    }
}
