<?php

namespace App\Controllers\Dashboard\Homepage;

use App\Controllers\BaseController;
use App\Models\AboutHomeModel;

class HomePage_AboutController extends BaseController
{
    protected $uri_menu;
    protected $about_home_model;
    public function __construct()
    {
        helper(['form', 'file']);
        $this->about_home_model = new AboutHomeModel();
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

        $data['about_home_data'] = $this->about_home_model->findAll();
        // var_dump($data['about_home_data']);
        echo view('dashboard/layout/header', $data);
        echo view('dashboard/home_page/index_about');
        echo view('dashboard/layout/footer');
    }

    // อัพเดทข้อมูลหน้าแรกเกี่ยวกับ //
    public function update_about_homepage($id_about_home = null, $path_video_old = null)
    {
        $data_update = [
            'detail' => $this->request->getVar('text_area_content_about')
        ];

        $file_video = $this->request->getFile('upload_video');
        if ($file_video->isValid() && !$file_video->hasMoved()) {
            $target_dir = ROOTPATH . 'dist/video/about_video/';
            $file_video_name = $file_video->getName();

            if (file_exists($target_dir . $file_video_name)) {
                $file_video_name = $file_video->getRandomName();
            }

            $file_video->move($target_dir, $file_video_name);
            $data_update['path_video'] = $file_video_name;

            if (is_file($target_dir . $path_video_old)) {
                unlink($target_dir . $path_video_old);
            }
        }

        $this->about_home_model->update($id_about_home, (object) $data_update);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'อัพเดทข้อมูลเรียบร้อยแล้ว',
            'reload' => true,
        ]);
    }
}
