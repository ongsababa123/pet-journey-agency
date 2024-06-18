<?php

namespace App\Controllers\Dashboard\Homepage;

use App\Controllers\BaseController;
use App\Models\CoverPageModel;

class HomePage_ConverController extends BaseController
{
    protected $uri_menu;
    protected $CoverPageModel;

    public function __construct()
    {
        helper(['form', 'file']);
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
        echo view('dashboard/layout/header', $data);
        echo view('dashboard/home_page/index_cover');
        echo view('dashboard/layout/footer');
    }

    //-- get data image cover --//
    public function getData_cover()
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];

        if (!empty($searchValue)) {
            $this->CoverPageModel->groupStart()
                ->like('name_image', $searchValue)
                ->groupEnd();
        }
        $totalRecords = $this->CoverPageModel->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->CoverPageModel->groupStart()
                ->like('name_image', $searchValue)
                ->groupEnd();
        }
        $data = $this->CoverPageModel->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

    //-- create image cover --//
    public function create_cover()
    {
        $target_dir = ROOTPATH . 'dist/img/cover/';

        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();

            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }

            $image->move($target_dir, $imageName);
            $data_cover = [
                'name_image' => $this->request->getVar('inputName_cover'),
                'path_image' => $imageName,
                'status' => 0,
                'language' => $this->request->getVar('select_language'),
            ];

            $this->CoverPageModel->insert((object) $data_cover);
            $response = [
                'success' => true,
                'message' => 'สร้างภาพหน้าปกสําเร็จ',
                'reload' => true,
            ];
            return $this->response->setJSON($response);
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัพโหลดภาพหน้าปก',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }
    }

    //-- change status image --//
    public function change_status_cover($id_cover, $status)
    {
        $this->CoverPageModel->update($id_cover, (object)[
            'status' => $status == 1 ? 0 : 1
        ]);
        $response = [
            'success' => true,
            'message' => 'เปลี่ยนสถานะของรางวัลสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //- edit image cover --//
    public function update_cover($id_cover)
    {
        $data_cover = [
            'name_image' => $this->request->getVar('inputName_cover'),
            'language' => $this->request->getVar('select_language'),
        ];

        $target_dir = ROOTPATH . 'dist/img/cover/';
        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }
            $image->move($target_dir, $imageName);
            $data_cover['path_image'] = $imageName;
        }

        $this->CoverPageModel->update($id_cover, (object) $data_cover);
        $response = [
            'success' => true,
            'message' => 'แก้ไขภาพหน้าปกสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
    //-- delete image cover --//
    public function delete_cover($id_cover, $path_image)
    {
        $this->CoverPageModel->delete($id_cover);
        if (file_exists(ROOTPATH . 'dist/img/cover/' . $path_image)) {
            unlink(ROOTPATH . 'dist/img/cover/' . $path_image);
        }
        $response = [
            'success' => true,
            'message' => 'ลบภาพหน้าปกสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
}
