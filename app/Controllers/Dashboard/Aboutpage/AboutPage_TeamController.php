<?php

namespace App\Controllers\Dashboard\Aboutpage;

use App\Controllers\BaseController;
use App\Models\TeamModel;

class AboutPage_TeamController extends BaseController
{
    protected $uri_menu;
    protected $TeamModel;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->TeamModel = new TeamModel();
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
        echo view('dashboard/about_page/index_about_team');
        echo view('dashboard/layout/footer');
    }

    //-- get data team --//
    public function getData_team()
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $select_status = $this->request->getVar('select_status');
        $searchValue = $this->request->getVar('search')['value'];

        if (!empty($searchValue)) {
            $this->TeamModel->groupStart()
                ->like('name_last_name_th', $searchValue)
                ->orLike('name_last_name_en', $searchValue)
                ->orLike('position_th', $searchValue)
                ->orLike('position_en', $searchValue)
                ->groupEnd();
        }
        $totalRecords = ($select_status == 2) ? $this->TeamModel->countAllResults() : $this->TeamModel->where('status', $select_status)->countAllResults();


        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->TeamModel->groupStart()
                ->like('name_last_name_th', $searchValue)
                ->orLike('name_last_name_en', $searchValue)
                ->orLike('position_th', $searchValue)
                ->orLike('position_en', $searchValue)
                ->groupEnd();
        }
        
        $data = ($select_status == 2) ? $this->TeamModel->findAll($limit, $start) : $this->TeamModel->where('status', $select_status)->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

    //-- create data team --//
    public function create_about_team()
    {
        $target_dir = ROOTPATH . 'dist/img/team/';

        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();

            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }

            $image->move($target_dir, $imageName);
            $data_team = [
                'name_last_name_th' => $this->request->getVar('name_last_name_th'),
                'position_th' => $this->request->getVar('position_th'),
                'name_last_name_en' => $this->request->getVar('name_last_name_en'),
                'position_en' => $this->request->getVar('position_en'),
                'image_path' => $imageName,
                'status' => 0,
            ];

            $this->TeamModel->insert((object) $data_team);
            $response = [
                'success' => true,
                'message' => 'สร้างข้อมูลทีมสำเร็จ',
                'reload' => true,
            ];
            return $this->response->setJSON($response);
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัพโหลดภาพทีม',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }
    }

    //- edit data team --//
    public function update_about_team($id_team)
    {
        $path_image_old = $this->request->getVar('path_image_old');

        $data_team = [
            'name_last_name_th' => $this->request->getVar('name_last_name_th'),
            'position_th' => $this->request->getVar('position_th'),
            'name_last_name_en' => $this->request->getVar('name_last_name_en'),
            'position_en' => $this->request->getVar('position_en'),
        ];

        $target_dir = ROOTPATH . 'dist/img/team/';
        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }
            $image->move($target_dir, $imageName);
            $data_team['image_path'] = $imageName;

            if (is_file($target_dir . $path_image_old)) {
                unlink($target_dir . $path_image_old);
            }
        }

        $this->TeamModel->update($id_team, (object) $data_team);
        $response = [
            'success' => true,
            'message' => 'แก้ไขข้อมูลทีมสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- delete data team --//
    public function delete_team($id_team)
    {
        $path_image = $this->TeamModel->find($id_team)['image_path'];
        $this->TeamModel->delete($id_team);
        if (file_exists(ROOTPATH . 'dist/img/team/' . $path_image)) {
            unlink(ROOTPATH . 'dist/img/team/' . $path_image);
        }
        $response = [
            'success' => true,
            'message' => 'ลบข้อมูลทีมสำเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- change status team --//
    public function change_status_team($id_team, $status)
    {
        $this->TeamModel->update($id_team, (object)[
            'status' => $status == 1 ? 0 : 1
        ]);
        $response = [
            'success' => true,
            'message' => 'เปลี่ยนสถานะสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
}
