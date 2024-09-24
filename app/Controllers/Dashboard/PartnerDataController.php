<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PartnerModel;

class PartnerDataController extends BaseController
{
    protected $uri_menu;
    protected $PartnerModel;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->PartnerModel = new PartnerModel();
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
        echo view('dashboard/index_partner');
        echo view('dashboard/layout/footer');
    }

    //-- get data partner --//
    public function getData_partner($type_partner)
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];
        $select_status = $this->request->getVar('select_status');

        if (!empty($searchValue)) {
            $this->PartnerModel->groupStart()
                ->like('name_partner', $searchValue)
                ->groupEnd();
        }
        $totalRecords = ($select_status == 2) ? $this->PartnerModel->where('type_partner', $type_partner)->countAllResults() : $this->PartnerModel->where('status', $select_status)->where('type_partner', $type_partner)->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->PartnerModel->groupStart()
                ->like('name_partner', $searchValue)
                ->groupEnd();
        }
        
        $data = ($select_status == 2) ? $this->PartnerModel->where('type_partner', $type_partner)->findAll($limit, $start) : $this->PartnerModel->where('status', $select_status)->where('type_partner', $type_partner)->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

    //-- create partner --//
    public function create_partner($type_partner)
    {
        $target_dir = ROOTPATH . 'dist/img/partner/';
        $image = $this->request->getFile('input_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();

            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }

            $image->move($target_dir, $imageName);
            $data_partner = [
                'name_partner' => $this->request->getVar('name_partner'),
                'type_partner' => $type_partner,
                'logo_partner_path' => $imageName,
            ];

            $this->PartnerModel->insert((object) $data_partner);
            $response = [
                'success' => true,
                'message' => 'สร้างพาร์ทเนอร์สำเร็จ',
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

    //-- change status partner --//
    public function change_status_partner($id_partner, $status)
    {
        $this->PartnerModel->update($id_partner, (object)[
            'status' => $status == 1 ? 0 : 1
        ]);
        $response = [
            'success' => true,
            'message' => 'เปลี่ยนสถานะพาร์ทเนอร์สำเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- delete image partner --//
    public function delete_partner($id_partner)
    {
        $path_image = $this->PartnerModel->find($id_partner)['logo_partner_path'];
        $this->PartnerModel->delete($id_partner);
        if (file_exists(ROOTPATH . 'dist/img/partner/' . $path_image)) {
            unlink(ROOTPATH . 'dist/img/partner/' . $path_image);
        }
        $response = [
            'success' => true,
            'message' => 'ลบภาพพาร์ทเนอร์สำเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //- edit partner --//
    public function update_partner($id_partner)
    {
        $path_image_old = $this->request->getVar('path_image_old');
        $data_partner = [
            'name_partner' => $this->request->getVar('name_partner'),
        ];

        $target_dir = ROOTPATH . 'dist/img/partner/';
        $image = $this->request->getFile('input_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }

            $image->move($target_dir, $imageName);
            $data_partner['logo_partner_path'] = $imageName;

            if (is_file($target_dir . $path_image_old)) {
                unlink($target_dir . $path_image_old);
            }
        }

        $this->PartnerModel->update($id_partner, (object) $data_partner);
        $response = [
            'success' => true,
            'message' => 'แก้ไขข้อมูลพาร์ทเนอร์สำเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
}
