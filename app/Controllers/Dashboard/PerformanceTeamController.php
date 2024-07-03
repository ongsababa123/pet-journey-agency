<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PerformanceTeamModel;

class PerformanceTeamController extends BaseController
{
    protected $uri_menu;
    protected $PerformanceTeamModel;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->PerformanceTeamModel = new PerformanceTeamModel();
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
        $data_performance_team['data_performance_team'] = $this->PerformanceTeamModel->findAll();

        echo view('dashboard/layout/header', $data);
        echo view('dashboard/index_performance', $data_performance_team);
        echo view('dashboard/layout/footer');
    }

    //-- update performance --//
    public function update_performance($id_team, $image_path_old)
    {
        $type_show =  $this->request->getVar('r2');
        $data_update = [];
        if ($type_show === '1') {
            $image = $this->request->getFile('input_image');
            if ($image->isValid() && !$image->hasMoved()) {
                $target_dir = ROOTPATH . 'dist/img/performance/';
                $image_name = $image->getName();

                if (file_exists($target_dir . $image_name)) {
                    $image_name = $image->getRandomName();
                }

                $image->move($target_dir, $image_name);
                $data_update['image_path'] = $image_name;

                if (is_file($target_dir . $image_path_old)) {
                    unlink($target_dir . $image_path_old);
                }
            }

            $data_update['detail_th'] = $this->request->getVar('detail_th');
            $data_update['detail_en'] = $this->request->getVar('detail_en');
            $data_update['type_show'] = $type_show;
        } else if ($type_show === '2') {
            $image = $this->request->getFile('input_image');
            if ($image->isValid() && !$image->hasMoved()) {
                $target_dir = ROOTPATH . 'dist/img/performance/';
                $image_name = $image->getName();

                if (file_exists($target_dir . $image_name)) {
                    $image_name = $image->getRandomName();
                }

                $image->move($target_dir, $image_name);
                $data_update['image_path'] = $image_name;

                if (is_file($target_dir . $image_path_old)) {
                    unlink($target_dir . $image_path_old);
                }
            }
            $data_update['type_show'] = $type_show;
        } else if ($type_show === '3') {
            $data_update['detail_th'] = $this->request->getVar('detail_th');
            $data_update['detail_en'] = $this->request->getVar('detail_en');
            $data_update['color_bg'] = $this->request->getVar('color_bg');
            $data_update['color_text'] = $this->request->getVar('color_text');
            $data_update['type_show'] = $type_show;
        }

        $this->PerformanceTeamModel->update($id_team, (object) $data_update);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'อัพเดทข้อมูลเรียบร้อยแล้ว',
            'reload' => true,
        ]);
    }
}
