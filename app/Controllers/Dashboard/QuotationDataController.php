<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Controllers\Dashboard\EmailController;
use App\Models\QuotationModel;
use App\Models\ServiceHeaderModel;

class QuotationDataController extends BaseController
{
    protected $uri_menu;
    protected $QuotationModel;
    protected $ServiceHeaderModel;
    protected $EmailController;

    public function __construct()
    {
        helper(['form', 'file']);
        $this->QuotationModel = new QuotationModel();
        $this->ServiceHeaderModel = new ServiceHeaderModel();
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
        $data['service_header'] = $this->ServiceHeaderModel->findAll();
        echo view('dashboard/layout/header', $data);
        echo view('dashboard/index_quotation', $data);
        echo view('dashboard/layout/footer');
    }

    //-- create quotation --//
    public function create_quotation($length_service_header)
    {
        $data_service = [];
        $data_service_full = [];
        for ($i = 0; $i < $length_service_header; $i++) {
            $value = $this->request->getVar('service_' . $i);
            // If the checkbox is checked (value is not null), add it to the array
            if ($value !== null) {
                $data_service[] = $value;
                $data_service_full[] = $this->ServiceHeaderModel->select('header_service_name_th')->find($value);
            }
            $data_service_string = implode(',', $data_service);
        }
        $data_quotation = [
            'name_last' => $this->request->getVar('name_last'),
            'email' => $this->request->getVar('email'),
            'phone_number' => $this->request->getVar('phone_number'),
            'travel_date' => $this->request->getVar('travel_date'),
            'country_of_origin' => $this->request->getVar('country_of_origin'),
            'airport_of_origin' => $this->request->getVar('airport_of_origin'),
            'destination_country' => $this->request->getVar('destination_country'),
            'destination_airport' => $this->request->getVar('destination_airport'),
            'travel_type' => $this->request->getVar('travel_type'),
            'transport_format' => $this->request->getVar('transport_format'),
            'service' => $data_service_string,
            'animal_type' => $this->request->getVar('animal_type'),
            'breed' => $this->request->getVar('breed'),
            'age' => $this->request->getVar('age'),
            'weight' => $this->request->getVar('weight'),
            'note' => $this->request->getVar('note'),
            'status' => 0,
            'craete_date' => date('Y-m-d'),
        ];

        $this->QuotationModel->insert((object) $data_quotation);
        $data_quotation['data_service_full'] = $data_service_full;

        $filePath = base_url('public/data/countries.json');
        // Read the file contents
        $jsonContent = file_get_contents($filePath);

        // Decode the JSON data
        $data = json_decode($jsonContent, true);
        
        foreach ($data as $key => $element) {
            if ($element['code'] == $data_quotation['destination_country']) {
                $data_quotation['destination_country_name'] = $element['name_en'] .' (' . $element['code'] . ')';
            }
            if ($element['code'] == $data_quotation['country_of_origin']) {
                $data_quotation['country_of_origin_name'] = $element['name_en'] .' (' . $element['code'] . ')';
            }
        }

        if ($this->EmailController->sendEmail_quotation($data_quotation)) {
            $response = [
                'success' => true,
                'message' => 'สร้างใบเสนอราคาสําเร็จ',
                'reload' => false,
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'สร้างใบเสนอราคาไม่สําเร็จ',
                'reload' => false,
            ];
        }


        return $this->response->setJSON($response);
    }

    //-- get quotation --//
    public function getData_quotation()
    {
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $draw = $this->request->getVar('draw');
        $searchValue = $this->request->getVar('search')['value'];
        $select_status = $this->request->getVar('select_status');

        if (!empty($searchValue)) {
            $this->QuotationModel->groupStart()
                ->like('name_last', $searchValue)
                ->orLike('email', $searchValue)
                ->groupEnd();
        }
        $totalRecords = $this->QuotationModel->countAllResults();
        $totalRecords = ($select_status == 'all') ? $this->QuotationModel->countAllResults() : $this->QuotationModel->where('status', $select_status)->countAllResults();

        $recordsFiltered = $totalRecords;
        if (!empty($searchValue)) {
            $this->QuotationModel->groupStart()
                ->like('name_last', $searchValue)
                ->orLike('email', $searchValue)
                ->groupEnd();
        }
		$this->QuotationModel->orderBy('craete_date', 'DESC');
        $data = ($select_status == 'all') ? $this->QuotationModel->findAll($limit, $start) : $this->QuotationModel->where('status', $select_status)->findAll($limit, $start);

        $response = [
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
            'searchValue' => $searchValue,
        ];

        return $this->response->setJSON($response);
    }

    //-- update quotation --//
    public function update_quotation($id_quotation, $length_service_header)
    {
        $data_service = [];
        for ($i = 0; $i < $length_service_header; $i++) {
            $value = $this->request->getVar('service_' . $i);
            // If the checkbox is checked (value is not null), add it to the array
            if ($value !== null) {
                $data_service[] = $value;
            }
            $data_service_string = implode(',', $data_service);
        }
        $data_quotation = [
            'name_last' => $this->request->getVar('name_last'),
            'email' => $this->request->getVar('email'),
            'phone_number' => $this->request->getVar('phone_number'),
            'travel_date' => $this->request->getVar('travel_date'),
            'country_of_origin' => $this->request->getVar('country_of_origin'),
            'airport_of_origin' => $this->request->getVar('airport_of_origin'),
            'destination_country' => $this->request->getVar('destination_country'),
            'destination_airport' => $this->request->getVar('destination_airport'),
            'travel_type' => $this->request->getVar('travel_type'),
            'transport_format' => $this->request->getVar('transport_format'),
            'service' => $data_service_string,
            'animal_type' => $this->request->getVar('animal_type'),
            'breed' => $this->request->getVar('breed'),
            'age' => $this->request->getVar('age'),
            'weight' => $this->request->getVar('weight'),
            'note' => $this->request->getVar('note'),
        ];

        $this->QuotationModel->update($id_quotation, (object) $data_quotation);
        $response = [
            'success' => true,
            'message' => 'อัพเดทใบเสนอราคาสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- delete quotation --//
    public function delete_quotation($id_quotation)
    {
        $this->QuotationModel->delete($id_quotation);
        $response = [
            'success' => true,
            'message' => 'ลบใบเสนอราคาสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }

    //-- change status quotation --//
    public function changestatus_quotation($id_quotation, $status)
    {
        $data_quotation = [
            'status' => $status,
        ];
        $this->QuotationModel->update($id_quotation, (object) $data_quotation);
        $response = [
            'success' => true,
            'message' => 'อัพเดทสถานะใบเสนอราคาสําเร็จ',
            'reload' => true,
        ];
        return $this->response->setJSON($response);
    }
}
