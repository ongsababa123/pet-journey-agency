<?php


namespace App\Controllers\Dashboard\Aboutpage;

use App\Controllers\BaseController;
use App\Models\More_aboutModel;

class AboutPage_MoreController extends BaseController
{
    protected $uri_menu;
    protected $More_aboutModel;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->More_aboutModel = new More_aboutModel();
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
        echo view('dashboard/about_page/index_about_more');
        echo view('dashboard/layout/footer');
    }

    //-- get data more --//
    public function getData_more()
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];
        $select_status = $this->request->getVar('select_status');

        if (!empty($searchValue)) {
            $this->More_aboutModel->groupStart()
                ->like('topic_name_th', $searchValue)
                ->orLike('topic_name_en', $searchValue)
                ->groupEnd();
        }
        $totalRecords = ($select_status == 2) ? $this->More_aboutModel->countAllResults() : $this->More_aboutModel->where('status', $select_status)->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->More_aboutModel->groupStart()
                ->like('topic_name_th', $searchValue)
                ->orLike('topic_name_en', $searchValue)
                ->groupEnd();
        }
        
        $data = ($select_status == 2) ? $this->More_aboutModel->findAll($limit, $start) : $this->More_aboutModel->where('status', $select_status)->findAll($limit, $start);

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
    public function create_about_more()
    {
        $target_dir = ROOTPATH . 'dist/img/about-more/';

        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();

            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }

            $image->move($target_dir, $imageName);
            $data_team = [
                'topic_name_th' => $this->request->getVar('topic_name_th'),
                'topic_name_en' => $this->request->getVar('topic_name_en'),
                'detail_th' => $this->request->getVar('detail_th'),
                'detail_en' => $this->request->getVar('detail_en'),
                'image_path' => $imageName,
                'status' => 0,
            ];

            $this->More_aboutModel->insert((object) $data_team);
            $response = [
                'success' => true,
                'message' => 'สร้างข้อมูลเพิ่มเติมสำเร็จ',
                'reload' => true,
            ];
            return $this->response->setJSON($response);
        } else {
            $response = [
                'success' => false,
                'message' => 'โปรดอัพโหลดภาพเพิ่มเติม',
                'reload' => false,
            ];
            return $this->response->setJSON($response);
        }
    }

    //- edit data more --//
    public function update_about_more($id_more_about_pet)
    {
        $path_image_old = $this->request->getVar('path_image_old');
        $data_more = [
            'topic_name_th' => $this->request->getVar('topic_name_th'),
            'topic_name_en' => $this->request->getVar('topic_name_en'),
            'detail_th' => $this->request->getVar('detail_th'),
            'detail_en' => $this->request->getVar('detail_en'),
        ];

        $target_dir = ROOTPATH . 'dist/img/about-more/';
        $image = $this->request->getFile('upload_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }
            $image->move($target_dir, $imageName);
            $data_more['image_path'] = $imageName;

            if (is_file($target_dir . $path_image_old)) {
                unlink($target_dir . $path_image_old);
            }
        }

        $this->More_aboutModel->update($id_more_about_pet, (object) $data_more);
        $response = [
            'success' => true,
            'message' => 'แก้ไขข้อมูลเพิ่มเติมสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- delete data more --//
    public function delete_more($id_more_about_pet)
    {
        $path_image = $this->More_aboutModel->find($id_more_about_pet)['image_path'];
        $this->More_aboutModel->delete($id_more_about_pet);
        if (file_exists(ROOTPATH . 'dist/img/about-more/' . $path_image)) {
            unlink(ROOTPATH . 'dist/img/about-more/' . $path_image);
        }
        $response = [
            'success' => true,
            'message' => 'ลบข้อมูลทีมสำเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- change status more --//
    public function change_status_more($id_more_about_pet, $status)
    {
        $this->More_aboutModel->update($id_more_about_pet, (object)[
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
