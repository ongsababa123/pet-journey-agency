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
        $select_status = $this->request->getVar('select_status');
        $select_lang = $this->request->getVar('select_lang');

        // Start building query
        $this->CoverPageModel->select('*');

        // Apply search filter
        if (!empty($searchValue)) {
            $this->CoverPageModel->like('name_image', $searchValue);
        }

        // Apply language filter
        if ($select_lang !== 'all') {
            $this->CoverPageModel->where('language', $select_lang);
        }

        // Apply status filter
        if ($select_status !== '2') {
            $this->CoverPageModel->where('status', $select_status);
        }

        // Count total records
        $totalRecords = $this->CoverPageModel->countAllResults();

        // Apply filters again for filtered count
        if (!empty($searchValue)) {
            $this->CoverPageModel->like('name_image', $searchValue);
        }
        if ($select_lang !== 'all') {
            $this->CoverPageModel->where('language', $select_lang);
        }
        if ($select_status !== '2') {
            $this->CoverPageModel->where('status', $select_status);
        }

        // Get filtered records with limit and start
        $data = $this->CoverPageModel->findAll($limit, $start);

        // Prepare response
        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => count($data),
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        // Return JSON response
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
        $path_image_old = $this->request->getVar('path_image_old');
        $target_dir = ROOTPATH . 'dist/img/cover/';
        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }
            $image->move($target_dir, $imageName);
            $data_cover['path_image'] = $imageName;

            if (is_file($target_dir . $path_image_old)) {
                unlink($target_dir . $path_image_old);
            }
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
    public function delete_cover($id_cover)
    {
        $path_image = $this->CoverPageModel->find($id_cover)['path_image'];

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
