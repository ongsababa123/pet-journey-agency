<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Controllers\Dashboard\EmailController;
use App\Models\Message_ContactModel;

class MessageContactController extends BaseController
{
    protected $uri_menu;
    protected $Message_ContactModel;
    protected $EmailController;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->Message_ContactModel = new Message_ContactModel();
        $this->EmailController = new EmailController();
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
        echo view('dashboard/index_message_contact');
        echo view('dashboard/layout/footer');
    }

    //-- create quotation --//
    public function create_message_contact()
    {
        $data_message_contact = [
            'name' => $this->request->getVar('name'),
            'lastname' => $this->request->getVar('lastname'),
            'email' => $this->request->getVar('email'),
            'phone_number' => $this->request->getVar('phone_number'),
            'message' => $this->request->getVar('message'),
            'status' => 0,
            'date_time' => date('Y-m-d H:i:s'),
        ];

        $this->Message_ContactModel->insert((object) $data_message_contact);

        if ($this->EmailController->sendEmail_message_contact($data_message_contact)) {
            $response = [
                'success' => true,
                'message' => 'ส่งข้อมูลเรียบร้อยแล้ว',
                'reload' => false,
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'ส่งข้อมูลไม่สําเร็จ',
                'reload' => false,
            ];
        }

        return $this->response->setJSON($response);
    }

    //-- get data message --//
    public function getData_message()
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];
        $select_status = $this->request->getVar('select_status');

        if (!empty($searchValue)) {
            $this->Message_ContactModel->groupStart()
                ->like('name', $searchValue)
                ->orLike('email', $searchValue)
                ->orLike('lastname', $searchValue)
                ->groupEnd();
        }
        $totalRecords = $this->Message_ContactModel->countAllResults();
        $totalRecords = ($select_status == 'all') ? $this->Message_ContactModel->countAllResults() : $this->Message_ContactModel->where('status', $select_status)->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->Message_ContactModel->groupStart()
                ->like('name', $searchValue)
                ->orLike('email', $searchValue)
                ->orLike('lastname', $searchValue)
                ->groupEnd();
        }
		$this->Message_ContactModel->orderBy('date_time', 'DESC');
        $data = ($select_status == 'all') ? $this->Message_ContactModel->findAll($limit, $start) : $this->Message_ContactModel->where('status', $select_status)->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

    //-- update_message_contact --//
    public function update_message_contact($id_message_contact)
    {
        $data_message_contact = [
            'name' => $this->request->getVar('name'),
            'lastname' => $this->request->getVar('lastname'),
            'email' => $this->request->getVar('email'),
            'phone_number' => $this->request->getVar('phone_number'),
            'message' => $this->request->getVar('message'),
        ];

        $this->Message_ContactModel->update($id_message_contact, (object) $data_message_contact);
        $response = [
            'success' => true,
            'message' => 'อัพเดทข้อมูลสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- delete message --//
    public function delete_message($id_message_contact)
    {
        $this->Message_ContactModel->delete($id_message_contact);
        $response = [
            'success' => true,
            'message' => 'ลบใบเสนอราคาสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- change status message --//
    public function change_status_message($id_message_contact, $status)
    {
        $data_quotation = [
            'status' => $status,
        ];
        $this->Message_ContactModel->update($id_message_contact, (object) $data_quotation);
        $response = [
            'success' => true,
            'message' => 'อัพเดทสถานะสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
}
