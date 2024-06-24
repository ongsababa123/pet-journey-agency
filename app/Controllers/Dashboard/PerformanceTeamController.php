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
        $data_performance_team['data_performance_team'] = $this->PerformanceTeamModel->first();

        echo view('dashboard/layout/header', $data);
        echo view('dashboard/index_performance', $data_performance_team);
        echo view('dashboard/layout/footer');
    }
}
