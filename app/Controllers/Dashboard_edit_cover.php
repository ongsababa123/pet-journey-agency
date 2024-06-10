<?php

namespace App\Controllers;

class Dashboard_edit_cover extends BaseController
{

    public function index()
    {
        $data['uri_header'] = 'menu_page_header';
        $data['uri_header_treeview'] = 'menu_page_header_cover';
        echo view('dashboard/header' , $data);
    }
}
