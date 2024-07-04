<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\ServiceHeaderModel;
use App\Models\Service_Content_Buy_SaleModel;
use App\Models\Service_Content;
use App\Models\PartnerModel;

class ServiceDataController extends BaseController
{
    protected $uri_menu;
    protected $ServiceHeaderModel;
    protected $Service_Content_Buy_SaleModel;
    protected $Service_Content;
    protected $PartnerModel;
    

    public function __construct()
    {
        helper(['form', 'file']);
        $this->ServiceHeaderModel = new ServiceHeaderModel();
        $this->Service_Content_Buy_SaleModel = new Service_Content_Buy_SaleModel();
        $this->Service_Content = new Service_Content();
        $this->PartnerModel = new PartnerModel();
        $current_url = current_url();

        // ตัดเหลือเฉพาะพาร์ทที่ต้องการ
        $parsed_url = parse_url($current_url, PHP_URL_PATH);
        $path_parts = explode('/', $parsed_url);

        // สมมติว่าเราต้องการส่วนสุดท้ายสองส่วน
        $this->uri_menu = $path_parts[count($path_parts) - 2] . '/' . $path_parts[count($path_parts) - 1];
    }

    //------------------------------ header service --------------------------//
    //-- index --//

    public function index()
    {
        $data['uri_menu'] = $this->uri_menu;
        echo view('dashboard/layout/header', $data);
        echo view('dashboard/index_service');
        echo view('dashboard/layout/footer');
    }

    //-- get data service --//
    public function getData_service()
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];
        $select_status = $this->request->getVar('select_status');

        if (!empty($searchValue)) {
            $this->ServiceHeaderModel->groupStart()
                ->like('header_service_name_th', $searchValue)
                ->orLike('header_service_name_en', $searchValue)
                ->groupEnd();
        }

        $totalRecords = ($select_status == 2) ? $this->ServiceHeaderModel->countAllResults() : $this->ServiceHeaderModel->where('status', $select_status)->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->ServiceHeaderModel->groupStart()
                ->like('header_service_name_th', $searchValue)
                ->orLike('header_service_name_en', $searchValue)
                ->groupEnd();
        }
        
        $data = ($select_status == 2) ? $this->ServiceHeaderModel->findAll($limit, $start) : $this->ServiceHeaderModel->where('status', $select_status)->findAll($limit, $start);

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
                'header_service_name_th' => $this->request->getVar('header_service_name_th'),
                'header_service_name_en' => $this->request->getVar('header_service_name_en'),
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
            'header_service_name_th' => $this->request->getVar('header_service_name_th'),
            'header_service_name_en' => $this->request->getVar('header_service_name_en'),
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
            'message' => 'แก้ไขข้อมูลเซอร์วิสเรียบร้อย',
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

    public function index_service_content_buy_sale($id_service_header , $language)
    {
        $data['uri_menu'] = $this->uri_menu;
        $data_service['data_service'] = $this->ServiceHeaderModel->find($id_service_header);
        $data_service['data_service'] = array_merge($data_service['data_service'], ['language' => $language]);
        echo view('dashboard/layout/header', $data);
        echo view('dashboard/service/index_content_buy_sale', $data_service);
        echo view('dashboard/layout/footer');
    }

    //-- get data animal --//
    public function getData_animal($id_service_header , $language)
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
        $totalRecords = $this->Service_Content_Buy_SaleModel->where('id_service_header', $id_service_header)->where('language', $language)->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->Service_Content_Buy_SaleModel->groupStart()
                ->like('name_pet', $searchValue)
                ->like('breed', $searchValue)
                ->groupEnd();
        }
        $data = $this->Service_Content_Buy_SaleModel->where('id_service_header', $id_service_header)->where('language', $language)->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

    //-- create data animal --//
    public function create_animal($id_service_header)
    {
        $target_dir = ROOTPATH . 'dist/img/animal/';

        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();

            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }

            $image->move($target_dir, $imageName);
            $data_animal = [
                'name_pet' => $this->request->getVar('name_pet'),
                'breed' => $this->request->getVar('breed'),
                'gender' => $this->request->getVar('gender'),
                'age' => $this->request->getVar('age'),
                'color' => $this->request->getVar('color'),
                'characteristics' => $this->request->getVar('characteristics'),
                'vaccination_history' => $this->request->getVar('vaccination_history'),
                'price' => $this->request->getVar('price'),
                'create_date' => date('Y-m-d H:i:s'),
                'image_path' => $imageName,
                'status' => 0,
                'language' => $this->request->getVar('select_language'),
                'id_service_header' => $id_service_header
            ];

            $this->Service_Content_Buy_SaleModel->insert((object) $data_animal);
            $response = [
                'success' => true,
                'message' => 'สร้างข้อมูลสัตว์เลี้ยงเรียบร้อย',
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
    public function update_animal($id_service_content_buy_sale, $path_image_old)
    {
        $data_animal = [
            'name_pet' => $this->request->getVar('name_pet'),
            'breed' => $this->request->getVar('breed'),
            'gender' => $this->request->getVar('gender'),
            'age' => $this->request->getVar('age'),
            'color' => $this->request->getVar('color'),
            'characteristics' => $this->request->getVar('characteristics'),
            'vaccination_history' => $this->request->getVar('vaccination_history'),
            'price' => $this->request->getVar('price'),
            'create_date' => date('Y-m-d H:i:s'),
        ];

        $target_dir = ROOTPATH . 'dist/img/animal/';
        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }
            $image->move($target_dir, $imageName);
            $data_animal['image_path'] = $imageName;

            if (is_file($target_dir . $path_image_old)) {
                unlink($target_dir . $path_image_old);
            }
        }

        $this->Service_Content_Buy_SaleModel->update($id_service_content_buy_sale, (object) $data_animal);
        $response = [
            'success' => true,
            'message' => 'แก้ไขข้อมูลสัตว์เลี้ยงเรียบร้อย',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- change status animal --//
    public function change_status_animal($id_service_content_buy_sale, $status)
    {
        $this->Service_Content_Buy_SaleModel->update($id_service_content_buy_sale, (object)[
            'status' => $status
        ]);
        $response = [
            'success' => true,
            'message' => 'เปลี่ยนสถานะสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- delete animal --//
    public function delete_animal($id_service_content_buy_sale, $path_image)
    {
        $this->Service_Content_Buy_SaleModel->delete($id_service_content_buy_sale);
        if (file_exists(ROOTPATH . 'dist/img/animal/' . $path_image)) {
            unlink(ROOTPATH . 'dist/img/animal/' . $path_image);
        }
        $response = [
            'success' => true,
            'message' => 'ลบข้อมูลสัตว์เลี้ยงเรียบร้อย',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //------------------------------ service_content --------------------------//
    //-- index service content --//

    public function index_service_content($id_service_header , $language)
    {
        $data['uri_menu'] = $this->uri_menu;
        $data_service['data_service'] = $this->ServiceHeaderModel->find($id_service_header);
        $data_service['data_service'] = array_merge($data_service['data_service'], ['language' => $language]);
        $data_service['data_service_content'] = $this->Service_Content->where('id_service_header', $id_service_header)->where('language', $language)->first();

        echo view('dashboard/layout/header', $data);
        echo view('dashboard/service/index_content', $data_service);
        echo view('dashboard/layout/footer');
    }

    //-- create service content --//
    public function create_service_content($id_service_header)
    {
        $data_service_content = [
            'id_service_header' => $id_service_header,
            'content' => $this->request->getVar('content'),
            'language' => $this->request->getVar('select_language'),
            'type_partner' => $this->request->getVar('partner'),
        ];
        $this->Service_Content->insert((object) $data_service_content);
        $response = [
            'success' => true,
            'message' => 'อัพเดทข้อมูลเรียบร้อย',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- update service content --//
    public function update_service_content($id_service_content)
    {
        $data_service_content = [
            'content' => $this->request->getVar('content'),
            'language' => $this->request->getVar('select_language'),
            'type_partner' => $this->request->getVar('partner'),
        ];
        $this->Service_Content->update($id_service_content, (object) $data_service_content);
        $response = [
            'success' => true,
            'message' => 'อัพเดทข้อมูลเรียบร้อย',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
}
