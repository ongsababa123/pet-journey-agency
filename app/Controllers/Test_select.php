<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Test_Muti_Select;

class Test_select extends BaseController
{
    protected $Test_Muti_Select;
    public function __construct()
    {
        helper(['url', 'form', 'view']);
        $this->Test_Muti_Select = new Test_Muti_Select();
    }


    //-- index --//
    public function index()
    {
        $data['muti_select'] =$this->Test_Muti_Select->findAll();
        echo view('index_test_select', $data);
    }

    public function test_update($id_muti_select)
    {
        $selected = $this->request->getPost('select2');
        if (empty($selected)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'กรุณาเลือกข้อมูล',
                'reload' => false,
                'selected' => $selected
            ]);
        }

        $select_value = implode(",", $selected);

        $this->Test_Muti_Select->update($id_muti_select, (object) [
            'value_select' => $select_value
        ]);


        return $this->response->setJSON([
            'success' => true,
            'message' => 'อัพเดทข้อมูลสําเร็จ',
            'reload' => false,
            'selected' => $selected,
            'select_value' => $select_value
        ]);
    }
}
