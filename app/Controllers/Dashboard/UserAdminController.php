<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\UserAdminModel;

class UserAdminController extends BaseController
{
    protected $uri_menu;
    protected $UserAdminModel;
    public function __construct()
    {
        helper(['form', 'file', 'session']);
        $this->UserAdminModel = new UserAdminModel();
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
        echo view('dashboard/index_useradmin');
        echo view('dashboard/layout/footer');
    }

    //-- get data useradmin --//
    public function getData_useradmin()
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];
        $select_status = $this->request->getVar('select_status');

        if (!empty($searchValue)) {
            $this->UserAdminModel->groupStart()
                ->like('email_admin', $searchValue)
                ->orLike('name_last_admin', $searchValue)
                ->groupEnd();
        }
        $totalRecords = ($select_status == 2) ? $this->UserAdminModel->countAllResults() : $this->UserAdminModel->where('status', $select_status)->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->UserAdminModel->groupStart()
                ->like('email_admin', $searchValue)
                ->orLike('name_last_admin', $searchValue)
                ->groupEnd();
        }

        $data = ($select_status == 2) ? $this->UserAdminModel->findAll($limit, $start) : $this->UserAdminModel->where('status', $select_status)->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

    //-- create_useradmin --//
    public function create_useradmin()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email_admin' => 'required|valid_email',
            'name_last_admin' => 'required',
            'password_admin' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validation->getErrors(),
            ]);
        }

        $emailAdmin = $this->request->getVar('email_admin', FILTER_SANITIZE_EMAIL);

        // ตรวจสอบว่าอีเมล์นี้มีอยู่ในฐานข้อมูลแล้วหรือไม่
        if ($this->UserAdminModel->where('email_admin', $emailAdmin)->first()) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'อีเมล์นี้ถูกใช้งานแล้ว',
                'reload' => false,
            ]);
        }

        $data_useradmin = [
            'email_admin' => $emailAdmin,
            'name_last_admin' => $this->request->getVar('name_last_admin', FILTER_SANITIZE_STRING),
            'password_admin' => password_hash($this->request->getVar('password_admin'), PASSWORD_BCRYPT),
            'status' => 0,
            'time_stamp_login' => date('Y-m-d H:i:s'),
        ];

        $this->UserAdminModel->insert((object) $data_useradmin);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'สร้างผู้ใช้งานแอดมินสำเร็จ',
            'reload' => true,
        ]);
    }

    //-- update_useradmin --//
    public function update_useradmin($id_user_admin)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email_admin' => 'required|valid_email',
            'name_last_admin' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validation->getErrors(),
            ]);
        }

        $emailAdmin = $this->request->getVar('email_admin', FILTER_SANITIZE_EMAIL);

        // ตรวจสอบว่าอีเมล์นี้มีอยู่ในฐานข้อมูลแล้วหรือไม่ ยกเว้นไอดีผู้ใช้งานปัจจุบัน
        $existingUser = $this->UserAdminModel->where('email_admin', $emailAdmin)->where('id_user_admin !=', $id_user_admin)->first();
        if ($existingUser) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'อีเมล์นี้ถูกใช้งานแล้ว',
                'reload' => false,
            ]);
        }
        $data_useradmin = [
            'email_admin' => $emailAdmin,
            'name_last_admin' => $this->request->getVar('name_last_admin', FILTER_SANITIZE_STRING),
            'status' => 0,
            'time_stamp_login' => date('Y-m-d H:i:s'),
        ];

        if ($this->request->getVar('password_admin')) {
            $data_useradmin['password_admin'] = password_hash($this->request->getVar('password_admin'), PASSWORD_BCRYPT);
        }
        $this->UserAdminModel->update($id_user_admin, (object) $data_useradmin);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'อัพเดทผู้ใช้งานแอดมินสำเร็จ',
            'reload' => true,
        ]);
    }

    //-- change_status_useradmin --//
    public function change_status_useradmin($id_user_admin, $status)
    {
        $this->UserAdminModel->update($id_user_admin, (object)[
            'status' => $status == 1 ? 0 : 1
        ]);
        $response = [
            'success' => true,
            'message' => 'เปลี่ยนสถานะผู้ใช้งานแอดมินสำเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- delete_useradmin --//
    public function delete_useradmin($id_user_admin)
    {
        $this->UserAdminModel->delete($id_user_admin);

        $response = [
            'success' => true,
            'message' => 'ลบผู้ใช้งานแอดมินสำเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- index login --//
    public function index_login()
    {
        echo view('dashboard/login');
    }

    //-- auth --//
    public function auth()
    {
        $session = session();

        $emailAdmin = $this->request->getVar('email_admin');
        $passwordAdmin = $this->request->getVar('password_admin');

        $userAdmin = $this->UserAdminModel->where('email_admin', $emailAdmin)->first();
        if ($userAdmin && $userAdmin['status'] == 0) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'อีเมล์ผู้ใช้งานถูกยกเลิก',
                'reload' => false,
            ]);
        }
        if (!$userAdmin) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'อีเมล์ผู้ใช้งานไม่ถูกต้อง',
                'reload' => false,
            ]);
        }

        if (!password_verify($passwordAdmin, $userAdmin['password_admin'])) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'รหัสผ่านผู้ใช้งานไม่ถูกต้อง',
                'reload' => false,
            ]);
        }
        $this->UserAdminModel->update($userAdmin['id_user_admin'], (object)[
            'time_stamp_login' => date('Y-m-d H:i:s'),
        ]);

        $session->set([
            'id_user_admin' => $userAdmin['id_user_admin'],
            'email_admin' => $userAdmin['email_admin'],
            'name_last_admin' => $userAdmin['name_last_admin'],
            'isLoggedIn' => TRUE
        ]);
        return $this->response->setJSON([
            'success' => true,
            'message' => 'เข้าสู่ระบบสำเร็จ',
            'reload' => true,
        ]);
    }

    //-- logout --//
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('dashboard/login'));
    }
}
