<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class SeoDemo extends BaseController
{
    public function index()
    {
        // load seo helper
        helper('seo');

        // set page-specific meta
        set_meta([
            'description' => 'ตัวอย่างหน้า SEO Demo สำหรับระบบ PetEx - คำอธิบายที่ปรับได้ต่อหน้า',
            'keywords' => 'petex, seo, demo, สัตว์เลี้ยง',
            'image' => base_url('dist/img/og-image-demo.png'),
            'image_alt' => 'PetEx demo image',
            'canonical' => current_url(),
        ]);

        $data = [];
        $data['title'] = 'SEO Demo - PetEx';

        // Render header, content, footer so header.php reads $title and seo() values
        echo view('layout/header', $data);
        echo view('seo_demo', $data);
        echo view('layout/footer', $data);
    }
}
