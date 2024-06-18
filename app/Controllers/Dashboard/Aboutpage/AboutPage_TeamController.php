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
        $searchValue = $this->request->getVar('search')['value'];

        if (!empty($searchValue)) {
            $this->TeamModel->groupStart()
                ->like('name_last_name', $searchValue)
                ->like('position', $searchValue)
                ->groupEnd();
        }
        $totalRecords = $this->TeamModel->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->TeamModel->groupStart()
                ->like('name_last_name', $searchValue)
                ->like('position', $searchValue)
                ->groupEnd();
        }
        $data = $this->TeamModel->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }
}
