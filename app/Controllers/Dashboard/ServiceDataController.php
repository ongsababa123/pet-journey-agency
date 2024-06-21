<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\ServiceHeaderModel;
use App\Models\Service_Content_Buy_SaleModel;

class ServiceDataController extends BaseController
{
    protected $uri_menu;
    protected $ServiceHeaderModel;
    protected $Service_Content_Buy_SaleModel;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->ServiceHeaderModel = new ServiceHeaderModel();
        $this->Service_Content_Buy_SaleModel = new Service_Content_Buy_SaleModel();
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
        echo view('dashboard/index_service');
        echo view('dashboard/layout/footer');
    }
<<<<<<< HEAD
=======

    //-- get data service --//
    public function getData_service()
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];

        if (!empty($searchValue)) {
            $this->ServiceHeaderModel->groupStart()
                ->like('header_service_name', $searchValue)
                ->groupEnd();
        }
        $totalRecords = $this->ServiceHeaderModel->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->ServiceHeaderModel->groupStart()
                ->like('header_service_name', $searchValue)
                ->groupEnd();
        }
        $data = $this->ServiceHeaderModel->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

    //-- create data service --//
    public function create_service()
    {
        $target_dir = ROOTPATH . 'dist/img/service/';

        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();

            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }

            $image->move($target_dir, $imageName);
            $data_service = [
                'header_service_name' => $this->request->getVar('header_service_name'),
                'image_path' => $imageName,
                'status' => 0,
                'language' => $this->request->getVar('select_language'),
            ];

            $this->ServiceHeaderModel->insert((object) $data_service);
            $response = [
                'success' => true,
                'message' => 'สร้างข้อมูลเซอร์วิสเรียบร้อย',
                'reload' => true,
            ];
            return $this->response->setJSON($response);
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัพโหลดภาพ',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }
    }

    //- edit data service --//
    public function update_service($id_service_header, $path_image_old)
    {
        $data_service = [
            'header_service_name' => $this->request->getVar('header_service_name'),
            'language' => $this->request->getVar('select_language'),
        ];

        $target_dir = ROOTPATH . 'dist/img/service/';
        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }
            $image->move($target_dir, $imageName);
            $data_service['image_path'] = $imageName;

            if (is_file($target_dir . $path_image_old)) {
                unlink($target_dir . $path_image_old);
            }
        }

        $this->ServiceHeaderModel->update($id_service_header, (object) $data_service);
        $response = [
            'success' => true,
            'message' => 'แก้ไขข้อมูลทีมสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- change status service --//
    public function change_status_service($id_team, $status)
    {
        $this->ServiceHeaderModel->update($id_team, (object)[
            'status' => $status == 1 ? 0 : 1
        ]);
        $response = [
            'success' => true,
            'message' => 'เปลี่ยนสถานะสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //------------------------------ service_content_buy_sale --------------------------//

    public function index_service_content_buy_sale($id_service_header)
    {
        $data['uri_menu'] = $this->uri_menu;
        $data_service['data_service'] = $this->ServiceHeaderModel->find($id_service_header);
        echo view('dashboard/layout/header', $data);
        echo view('dashboard/service/index_content_buy_sale' , $data_service);
        echo view('dashboard/layout/footer');
    }

    //-- get data animal --//
    public function getData_animal($id_service_header)
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];

        if (!empty($searchValue)) {
            $this->Service_Content_Buy_SaleModel->groupStart()
                ->like('name_pet', $searchValue)
                ->like('breed', $searchValue)
                ->groupEnd();
        }
        $totalRecords = $this->Service_Content_Buy_SaleModel->where('id_service_header', $id_service_header)->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->Service_Content_Buy_SaleModel->groupStart()
                ->like('name_pet', $searchValue)
                ->like('breed', $searchValue)
                ->groupEnd();
        }
        $data = $this->Service_Content_Buy_SaleModel->where('id_service_header', $id_service_header)->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }
>>>>>>> Bank
}
