<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\ReviewDataModel;

class ReviewDataController extends BaseController
{
    protected $uri_menu;
    protected $ReviewDataModel;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->ReviewDataModel = new ReviewDataModel();
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
        echo view('dashboard/index_review');
        echo view('dashboard/layout/footer');
    }

    //-- create_review --//
    public function create_review()
    {
        $target_dir = ROOTPATH . 'dist/img/review/';
        $image = $this->request->getFile('input_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();

            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }

            $image->move($target_dir, $imageName);
            $data_cover = [
                'detail_comment_th' => $this->request->getVar('detail_comment_th'),
                'detail_comment_en' => $this->request->getVar('detail_comment_en'),
                'image_path' => $imageName,
                'status' => 0,
            ];

            $this->ReviewDataModel->insert((object) $data_cover);
            $response = [
                'success' => true,
                'message' => 'สร้างรีวิวสําเร็จ',
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
    //-- get data review --//
    public function getData_review()
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];
        $select_status = $this->request->getVar('select_status');

        if (!empty($searchValue)) {
            $this->ReviewDataModel->groupStart()
                ->like('detail_comment_th', $searchValue)
                ->orLike('detail_comment_en', $searchValue)
                ->groupEnd();
        }
        $totalRecords = ($select_status == 2) ? $this->ReviewDataModel->countAllResults() : $this->ReviewDataModel->where('status', $select_status)->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->ReviewDataModel->groupStart()
                ->like('detail_comment_th', $searchValue)
                ->orLike('detail_comment_en', $searchValue)
                ->groupEnd();
        }
        
        $data = ($select_status == 2) ? $this->ReviewDataModel->findAll($limit, $start) : $this->ReviewDataModel->where('status', $select_status)->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }
    //-- change status review --//
    public function change_status_review($id_review, $status)
    {
        $this->ReviewDataModel->update($id_review, (object)[
            'status' => $status == 1 ? 0 : 1
        ]);
        $response = [
            'success' => true,
            'message' => 'เปลี่ยนสถานะรีวิว',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
    //-- delete image cover --//
    public function delete_cover($id_review, $path_image)
    {
        $this->ReviewDataModel->delete($id_review);
        if (file_exists(ROOTPATH . 'dist/img/review/' . $path_image)) {
            unlink(ROOTPATH . 'dist/img/review/' . $path_image);
        }
        $response = [
            'success' => true,
            'message' => 'ลบภาพหน้าปกสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
    //- edit review --//
    public function update_review($id_review, $path_image_old)
    {
        $data_cover = [
            'detail_comment_th' => $this->request->getVar('detail_comment_th'),
            'detail_comment_en' => $this->request->getVar('detail_comment_en'),
        ];

        $target_dir = ROOTPATH . 'dist/img/review/';
        $image = $this->request->getFile('input_image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            if (file_exists($target_dir . $imageName)) {
                $imageName = $image->getRandomName();
            }

            $image->move($target_dir, $imageName);
            $data_cover['image_path'] = $imageName;

            if (is_file($target_dir . $path_image_old)) {
                unlink($target_dir . $path_image_old);
            }
        }

        $this->ReviewDataModel->update($id_review, (object) $data_cover);
        $response = [
            'success' => true,
            'message' => 'แก้ไขรีวิวสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
}
