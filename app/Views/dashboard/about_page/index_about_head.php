<title>แก้ไขหน้าเกี่ยวกับเรา ข้อมูลเกี่ยวกับเรา</title>
<style>
    :root {
        --teal-primary: #4ecdc4;
        --teal-dark: #44a08d;
        --accent-orange: #f39c12;
        --orange-dark: #e67e22;
        --navy-blue: #1a2a6c;
        --service-blue: #0198B4;
        --text-dark: #1a2a6c;
        --text-light: #5f7c8a;
        --white: #ffffff;
        --shadow-soft: 0 4px 20px rgba(78, 205, 196, 0.15);
        --shadow-medium: 0 8px 30px rgba(78, 205, 196, 0.2);
    }

    /* Modern Card Styling */
    .card {
        border-radius: 20px !important;
        border: none;
        box-shadow: var(--shadow-soft);
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        overflow: hidden;
        will-change: transform, box-shadow;
        contain: layout style paint;
        backface-visibility: hidden;
    }

    .card:hover {
        box-shadow: var(--shadow-medium);
        transform: translate3d(0, -3px, 0);
    }

    .card-header {
        background: linear-gradient(135deg, var(--service-blue) 0%, var(--teal-primary) 100%) !important;
        border: none;
        padding: 1.5rem;
        border-radius: 20px 20px 0 0 !important;
        border-bottom: none !important;
    }

    .card-header h1,
    .card-header h3 {
        color: var(--white) !important;
        font-weight: 700;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        margin: 0;
    }

    .card-body {
        padding: 2rem;
        background: var(--white);
    }

    /* Breadcrumb Modern */
    .breadcrumb {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 12px;
        padding: 0.75rem 1.5rem;
        box-shadow: var(--shadow-soft);
    }

    .breadcrumb-item a {
        color: var(--white) !important;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: var(--navy-blue) !important;
    }

    .breadcrumb-item.active {
        color: rgba(255, 255, 255, 0.8) !important;
        font-weight: 600;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.6) !important;
    }

    /* Table Styling */
    .table {
        border-radius: 12px;
        overflow: hidden;
    }

    .table thead {
        background: linear-gradient(135deg, var(--service-blue) 0%, var(--teal-primary) 100%) !important;
    }

    .table thead th {
        color: var(--white) !important;
        font-weight: 600;
        border: none;
        padding: 1rem;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }

    .table tbody tr {
        transition: background-color 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: transform, background-color, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .table tbody tr:hover {
        background: rgba(1, 152, 180, 0.05);
        transform: translate3d(0, -1px, 0);
        box-shadow: 0 2px 8px rgba(1, 152, 180, 0.1);
    }

    .table tbody td {
        vertical-align: middle;
        padding: 1rem;
        border-color: rgba(1, 152, 180, 0.1);
    }

    .table img {
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1), box-shadow 0.3s ease;
        will-change: transform, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .table img:hover {
        transform: translate3d(0, -2px, 0) scale(1.02);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    /* Buttons */
    .btn {
        border-radius: 10px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        border: none;
        box-shadow: var(--shadow-soft);
        will-change: transform, background, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        color: var(--white);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--teal-primary) 100%);
        transform: translate3d(0, -2px, 0);
        box-shadow: var(--shadow-medium);
    }

    .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: var(--white);
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #059669 0%, #047857 100%);
        transform: translate3d(0, -2px, 0);
    }

    .btn-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: var(--white);
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        transform: translate3d(0, -2px, 0);
    }

    .btn-warning {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--orange-dark) 100%);
        color: var(--white);
    }

    .btn-warning:hover {
        background: linear-gradient(135deg, var(--orange-dark) 0%, var(--accent-orange) 100%);
        transform: translate3d(0, -2px, 0);
    }

    .btn-tool {
        color: var(--white) !important;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: transform;
        contain: layout style;
        backface-visibility: hidden;
    }

    .btn-tool:hover {
        transform: translate3d(0, 0, 0) scale(1.1);
    }

    /* Modern Offcanvas */
    .offcanvas {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0) scale(0.85);
        width: 90%;
        max-width: 1200px;
        max-height: 90vh;
        background: white;
        z-index: 1051;
        border-radius: 25px;
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.25);
        opacity: 0;
        visibility: hidden;
        transition: transform 0.28s cubic-bezier(0.4, 0.0, 0.2, 1), 
                   opacity 0.28s cubic-bezier(0.4, 0.0, 0.2, 1),
                   visibility 0s linear 0.28s;
        overflow: hidden;
        will-change: transform, opacity;
        contain: layout style paint;
        backface-visibility: hidden;
    }

    .offcanvas.show {
        opacity: 1;
        visibility: visible;
        transform: translate3d(-50%, -50%, 0) scale(1);
        transition: transform 0.28s cubic-bezier(0.4, 0.0, 0.2, 1), 
                   opacity 0.28s cubic-bezier(0.4, 0.0, 0.2, 1),
                   visibility 0s linear 0s;
    }

    .offcanvas.half {
        opacity: 1;
        visibility: visible;
        transform: translate3d(-50%, -50%, 0) scale(0.95);
    }

    .offcanvas.closehalf {
        opacity: 1;
        visibility: visible;
        transform: translate3d(-50%, 45%, 0) scale(0.9);
    }

    .offcanvas-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(26, 42, 108, 0.8) 0%, rgba(68, 160, 141, 0.8) 100%);
        z-index: 1050;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.25s cubic-bezier(0.4, 0.0, 0.2, 1),
                   visibility 0s linear 0.25s;
        will-change: opacity;
        contain: layout style paint;
    }

    .offcanvas-backdrop.show {
        opacity: 1;
        visibility: visible;
        transition: opacity 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   visibility 0s linear 0s;
    }

    .offcanvas .card {
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: none;
        border-radius: 25px;
    }

    .offcanvas .card-header {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%) !important;
        padding: 1.5rem 2rem;
        flex-shrink: 0;
        border-radius: 25px 25px 0 0;
    }

    .offcanvas .card-title {
        color: var(--white) !important;
        font-size: 1.5rem;
    }

    .offcanvas .btn-tool {
        background-color: rgba(255, 255, 255, 0.2) !important;
        color: white !important;
        border-radius: 10px;
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }

    .offcanvas .btn-tool:hover {
        background: rgba(255, 255, 255, 0.3) !important;
        border-color: white;
        transform: scale(1.1);
    }

    .offcanvas .card-body {
        flex: 1;
        overflow-y: auto;
        padding: 2rem;
        max-height: calc(90vh - 120px);
        background: white;
    }

    /* File Upload Styling */
    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: var(--white);
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        border: none;
        padding: 1rem;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 600;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        box-shadow: var(--shadow-soft);
    }

    .file-upload-btn:hover {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--teal-primary) 100%);
        transform: translate3d(0, -2px, 0);
        box-shadow: var(--shadow-medium);
    }

    .image-upload-wrap {
        margin-top: 1.5rem;
        border: 3px dashed rgba(78, 205, 196, 0.4);
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.08) 0%, rgba(243, 156, 18, 0.08) 100%);
        position: relative;
        border-radius: 15px;
        padding: 3rem 2rem;
        transition: border-color 0.3s ease,
                    background 0.3s ease,
                    transform 0.3s ease;
    }

    .image-upload-wrap:hover {
        border-color: var(--teal-primary);
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.15) 0%, rgba(243, 156, 18, 0.15) 100%);
        transform: translate3d(0, 0, 0) scale(1.01);
    }

    .image-dropping {
        border-color: var(--accent-orange) !important;
        background: linear-gradient(135deg, rgba(243, 156, 18, 0.2) 0%, rgba(78, 205, 196, 0.2) 100%) !important;
        transform: translate3d(0, 0, 0) scale(1.02);
    }

    .drag-text h3 {
        font-weight: 600;
        color: var(--text-dark);
        font-size: 1.1rem;
        margin: 0;
    }

    .file-upload-content {
        text-align: center;
    }

    .file-upload-image {
        max-height: 300px;
        max-width: 100%;
        margin: auto;
        border-radius: 12px;
        box-shadow: var(--shadow-medium);
    }

    .remove-image {
        width: 200px;
        margin: 1rem auto 0;
        color: var(--white);
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        font-size: 0.9rem;
        font-weight: 600;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        cursor: pointer;
        box-shadow: var(--shadow-soft);
    }

    .remove-image:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        transform: translate3d(0, -2px, 0);
        box-shadow: var(--shadow-medium);
    }

    .remove-image span {
        display: none;
    }

    /* Section Styling for Offcanvas */
    .content-section,
    .upload-section {
        height: 100%;
    }

    .section-header {
        padding-bottom: 1rem;
        border-bottom: 2px solid rgba(78, 205, 196, 0.2);
    }

    .section-header h4 {
        margin: 0 0 0.5rem 0;
        display: flex;
        align-items: center;
    }

    .editor-wrapper {
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%);
        border-radius: 15px;
        padding: 1rem;
    }

    .image-preview-wrapper {
        padding: 1rem;
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%);
        border-radius: 15px;
        margin-bottom: 1rem;
    }

    .action-buttons {
        padding: 1.5rem;
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%);
        border-radius: 15px;
    }

    /* Modal/Lightbox Styling */
    .modal-content {
        border-radius: 20px;
        border: none;
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.25);
    }

    /* Smooth modal animation */
    .modal.fade .modal-dialog {
        transform: translate3d(0, 20px, 0) scale(0.96);
        transition: transform 0.25s cubic-bezier(0.4, 0.0, 0.2, 1),
                    opacity 0.25s ease-out;
    }

    .modal.show .modal-dialog {
        transform: translate3d(0, 0, 0) scale(1);
    }

    .modal-header {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        border-radius: 20px 20px 0 0;
        border: none;
        padding: 1.5rem 2rem;
    }

    .modal-header .modal-title {
        color: var(--white);
        font-weight: 700;
        font-size: 1.5rem;
    }

    .modal-header .close {
        color: var(--white);
        opacity: 1;
        text-shadow: none;
        transition: all 0.3s ease;
    }

    .modal-header .close:hover {
        transform: rotate(90deg) scale(1.2);
    }

    .modal-body {
        padding: 2rem;
    }

    .modal-footer {
        border-top: 1px solid rgba(78, 205, 196, 0.1);
        padding: 1.5rem 2rem;
    }

    /* Language Switch Animation */
    @keyframes fadeOutSlide {
        0% {
            opacity: 1;
            transform: translateX(0);
        }
        100% {
            opacity: 0;
            transform: translateX(-30px);
        }
    }

    @keyframes fadeInSlide {
        0% {
            opacity: 0;
            transform: translateX(30px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .lang-switching {
        animation: fadeOutSlide 0.3s ease-out forwards;
    }

    .lang-switched {
        animation: fadeInSlide 0.4s ease-out forwards;
    }

    /* Smooth transitions for language content */
    #header_about, #content_about, #image_about_img {
        transition: opacity 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: opacity, transform;
        contain: layout style;
        backface-visibility: hidden;
    }

    /* Responsive - Tablet */
    @media (max-width: 992px) {
        .card-body {
            padding: 1.5rem;
        }

        .offcanvas {
            width: 95%;
            max-width: 100%;
        }

        .action-buttons {
            flex-direction: column;
            gap: 1rem;
        }

        .action-buttons .btn {
            width: 100%;
        }
    }

    /* Responsive - Mobile */
    @media (max-width: 768px) {
        .card-body {
            padding: 1rem;
        }
        
        .btn {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }

        .offcanvas {
            width: 100%;
            max-width: 100%;
            border-radius: 15px;
            max-height: 95vh;
        }

        .offcanvas .card-body {
            padding: 1rem;
            max-height: calc(95vh - 100px);
        }

        .section-header h4 {
            font-size: 1.1rem;
        }

        .section-header p {
            font-size: 0.8rem !important;
        }

        .table {
            font-size: 0.85rem;
        }

        .table thead th {
            padding: 0.75rem 0.5rem;
            font-size: 0.75rem;
        }

        .table tbody td {
            padding: 0.75rem 0.5rem;
        }

        .table img {
            max-height: 150px;
        }
    }

    /* Responsive - Small Mobile */
    @media (max-width: 576px) {
        .card-header h1,
        .card-header h3 {
            font-size: 1.25rem;
        }

        .breadcrumb {
            font-size: 0.8rem;
            padding: 0.5rem 1rem;
        }

        .btn-sm {
            font-size: 0.8rem;
            padding: 0.4rem 0.8rem;
        }

        .btn-lg {
            font-size: 0.95rem;
            padding: 0.65rem 1.25rem;
        }

        .action-buttons {
            padding: 1rem;
        }

        .image-upload-wrap {
            padding: 2rem 1rem;
        }

        .drag-text h3 {
            font-size: 0.95rem;
        }

        .drag-text p {
            font-size: 0.8rem !important;
        }
    }
</style>

<!-- summernote -->
<link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css') ?>">

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-12">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-header" style="border-bottom: none">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0"><strong>จัดการหน้าเพจ</strong></h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active">หน้าเกียวกับเรา</li>
                                        <li class="breadcrumb-item active">ข้อมูลเกี่ยวกับเรา</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row" style="border: solid; border-radius: 15px">
                                <div class="col-6">
                                    <p class="text-left pl-5 pt-5" style="color: #4A4A4A; font-size: 60px;" id="header_about">
                                    </p>
                                    <p class="text-left pl-5 mr-5" style="color: #000000;font-size: 20px" id="content_about">
                                    </p>
                                </div>
                                <div class="col-6 d-flex justify-content-center align-items-center" style="margin-top: 150px; margin-bottom: 150px">
                                    <a href="" data-toggle="lightbox" data-gallery="gallery" id="image_about">
                                        <img src="" class="img-fluid mb-2" alt="white sample" style="width: 100%; max-width: 40rem;" id="image_about_img" />
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <div class="row">
                <section class="col-lg-12">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-header" style="background-color: #043062;color: white">
                            <h3 class="card-title mt-2">
                                <i class="fas fa-chart-pie mr-1"></i>
                                <strong>ข้อมูลเกี่ยวกับเรา</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary" onclick="switchLanguage()">เปลี่ยนภาษาตัวอย่าง</button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-hover table-bordered text-center">
                                <thead style="background-color: #ECF0F3;">
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th width="50%">คำอธิบาย (ย่อ)</th>
                                        <th width="30%">รูปภาพ</th>
                                        <th>ประเภทภาษา</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td id="detail_about_th" class="text-left">
                                            <?= $about_page['0']['detail_page'] ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('dist/img/about-team/' . $about_page['0']['image_page_path']) ?>" data-toggle="lightbox" data-gallery="gallery">
                                                <img src="<?= base_url('dist/img/about-team/' . $about_page['0']['image_page_path']) ?>" class="img-fluid mb-2" alt="white sample" style="width: 100%; max-width: 20rem;" />
                                            </a>
                                        </td>
                                        <td>
                                            <?= $about_page['0']['language'] ?>
                                        </td>
                                        <td>
                                            <a href="javascript:toggleOffcanvas('new_open_th')" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                                แก้ไข
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td id="detail_about_en" class="text-left">
                                            <?= $about_page['1']['detail_page'] ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('dist/img/about-team/' . $about_page['1']['image_page_path']) ?>" data-toggle="lightbox" data-gallery="gallery">
                                                <img src="<?= base_url('dist/img/about-team/' . $about_page['1']['image_page_path']) ?>" class="img-fluid mb-2" alt="white sample" style="width: 100%; max-width: 20rem;" />
                                            </a>
                                        </td>
                                        <td>
                                            <?= $about_page['1']['language'] ?>
                                        </td>
                                        <td>
                                            <a href="javascript:toggleOffcanvas('new_open_en')" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                                แก้ไข
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>

<div id="offcanvas" class="offcanvas">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-edit mr-2"></i>แก้ไขข้อมูลเกี่ยวกับเรา</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" onclick="halfOffcanvas()" title="ย่อ/ขยาย" id="halftoggleoffcanvas">
                    <i class="fas fa-window-minimize"></i>
                </button>
                <button type="button" class="btn btn-tool" onclick="closeOffcanvas()" title="ปิด">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <form class="mb-3" id="form_about" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="row">
                    <!-- Content Section -->
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="content-section">
                            <div class="section-header mb-3">
                                <h4 style="color: var(--text-dark); font-weight: 600;">
                                    <i class="fas fa-align-left mr-2" style="color: var(--teal-primary);"></i>
                                    เนื้อหาเกี่ยวกับเรา
                                </h4>
                                <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">
                                    เขียนข้อความแนะนำบริษัทและบริการของคุณ
                                </p>
                            </div>
                            <div class="editor-wrapper">
                                <textarea id="summernote" name="text_area_content_about"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Upload Section -->
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="upload-section">
                            <div class="section-header mb-3">
                                <h4 style="color: var(--text-dark); font-weight: 600;">
                                    <i class="fas fa-cloud-upload-alt mr-2" style="color: var(--teal-primary);"></i>
                                    อัพโหลดรูปภาพ
                                </h4>
                                <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">
                                    รองรับไฟล์ภาพ JPG, PNG ขนาดแนะนำ 1400 x 800 px
                                </p>
                            </div>
                            
                            <div >
                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger('click')">
                                    <i class="fas fa-folder-open mr-2"></i>เลือกรูปภาพ
                                </button>
                                
                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" id="upload_image" name="upload_image" />
                                    <div class="drag-text">
                                        <div class="mb-3">
                                            <i class="fas fa-cloud-upload-alt" style="font-size: 3rem; color: var(--teal-primary);"></i>
                                        </div>
                                        <h3 style="margin-bottom: 0.5rem;">ลากและวางไฟล์ที่นี่</h3>
                                        <p style="color: var(--text-light); font-size: 0.9rem;">หรือคลิกปุ่มด้านบนเพื่อเลือกไฟล์</p>
                                    </div>
                                </div>
                                
                                <div class="file-upload-content">
                                    <div class="image-preview-wrapper">
                                        <img class="file-upload-image" src="#" alt="your image" />
                                    </div>
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="remove-image">
                                            <i class="fas fa-trash mr-2"></i>ลบรูปภาพ
                                            <span class="image-title">Uploaded Image</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-3 text-center">
                                <small style="color: var(--text-light);">
                                    <i class="fas fa-info-circle mr-1" style="color: var(--accent-orange);"></i>
                                    ขนาดไฟล์ไม่เกิน 5MB
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center action-buttons">
                            <button type="button" class="btn btn-secondary btn-lg" onclick="closeOffcanvas()">
                                <i class="fas fa-times mr-2"></i>ยกเลิก
                            </button>
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="fas fa-save mr-2"></i>บันทึกข้อมูล
                            </button>
                        </div>
                    </div>
                </div>

                <input type="text" name="image_page_path_old" id="image_page_path_old" hidden>
            </form>
        </div>
    </div>
</div>
<div id="offcanvasBackdrop" class="offcanvas-backdrop"></div>

<script src="<?= base_url('plugins/summernote/summernote-bs4.min.js') ?>"></script>

<!-- summernote -->
<script>
    $(document).ready(function() {

        $('#summernote').summernote({
            height: 400, // set the height of the editor
            callbacks: {
                onChange: function(contents, $editable) {
                    // Display the content in the output div
                    $('#content_about').html(contents);
                }
            },
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });

    });
</script>
<!-- script open image -->
<script>
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    })
</script>
<!-- script upload image -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.image-upload-wrap').hide();
                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();
                $('.image-title').html(input.files[0].name);

                document.getElementById("image_about_img").src = e.target.result;
                document.getElementById("image_about").href = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('#upload_image').val('');
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>
<!-- switch language -->
<script>
    var lang = 'en';
    switchLanguage();

    function switchLanguage() {
        const headerEl = document.getElementById("header_about");
        const contentEl = document.getElementById("content_about");
        const imageEl = document.getElementById("image_about_img");
        
        // Add switching animation
        headerEl.classList.add('lang-switching');
        contentEl.classList.add('lang-switching');
        imageEl.classList.add('lang-switching');
        
        // Wait for fade out animation
        setTimeout(() => {
            if (lang == 'th') {
                lang = 'en';
                headerEl.innerHTML = '<strong>เกี่ยวกับ <span style="color: #FAD046;">เรา</span></strong>';
                contentEl.innerHTML = <?= json_encode($about_page['1']['detail_page']); ?>;
                imageEl.src = '<?= base_url('dist/img/about-team/' . $about_page['1']['image_page_path']) ?>';
                document.getElementById("image_about").href = '<?= base_url('dist/img/about-team/' . $about_page['1']['image_page_path']) ?>';
            } else {
                lang = 'th';
                headerEl.innerHTML = '<strong>เกี่ยวกับ <span style="color: #FAD046;">เรา</span></strong>';
                contentEl.innerHTML = <?= json_encode($about_page['0']['detail_page']); ?>;
                imageEl.src = '<?= base_url('dist/img/about-team/' . $about_page['0']['image_page_path']) ?>';
                document.getElementById("image_about").href = '<?= base_url('dist/img/about-team/' . $about_page['0']['image_page_path']) ?>';
            }
            
            // Remove switching animation and add switched animation
            headerEl.classList.remove('lang-switching');
            contentEl.classList.remove('lang-switching');
            imageEl.classList.remove('lang-switching');
            
            headerEl.classList.add('lang-switched');
            contentEl.classList.add('lang-switched');
            imageEl.classList.add('lang-switched');
            
            // Clean up animation classes
            setTimeout(() => {
                headerEl.classList.remove('lang-switched');
                contentEl.classList.remove('lang-switched');
                imageEl.classList.remove('lang-switched');
            }, 400);
        }, 300);
    }
</script>
<!-- offcanvas -->
<script>
    function toggleOffcanvas(action) {

        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.remove('half');
        offcanvas.classList.remove('closehalf');

        if (action === 'new_open_en') {
            $('#summernote').summernote('code', <?= json_encode($about_page['1']['detail_page']); ?>);
            lang = 'th';
            switchLanguage();
            removeUpload();
        } else if (action === 'new_open_th') {
            $('#summernote').summernote('code', <?= json_encode($about_page['0']['detail_page']); ?>);
            lang = 'en';
            switchLanguage();
            removeUpload();
        }

        offcanvas.classList.toggle('show');
        offcanvasBackdrop.classList.toggle('show');

        document.getElementById('halftoggleoffcanvas').onclick = function() {
            halfOffcanvas();
        };
    }

    function closeOffcanvas() {
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvasBackdrop.classList.remove('show');
        offcanvas.classList.remove('show');
        offcanvas.classList.remove('half');
        offcanvas.classList.remove('closehalf');

        lang = (lang === 'en') ? 'th' : 'en';

        switchLanguage();
    }

    function halfOffcanvas() {
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.remove('show');
        offcanvasBackdrop.classList.remove('show');

        offcanvas.classList.toggle('half');
        document.getElementById('halftoggleoffcanvas').onclick = function() {
            closehalfOffcanvas();
        };
    }

    function closehalfOffcanvas() {
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.remove('show');
        offcanvasBackdrop.classList.remove('show');

        offcanvas.classList.remove('half');

        offcanvas.classList.toggle('closehalf');
        document.getElementById('halftoggleoffcanvas').onclick = function() {
            toggleOffcanvas('edit');
        };
    }
</script>
    <style>
        /* Offcanvas/modal animation helpers */
        .modal-enter .modal-content, .modal-enter .card { transform: translateY(20px) scale(0.98); opacity: 0; }
        .modal-opened .modal-content, .modal-opened .card { transform: translateY(0) scale(1); opacity: 1; transition: transform 260ms cubic-bezier(0.4,0,0.2,1), opacity 260ms ease-out; }
        .modal-exit .modal-content, .modal-exit .card { transform: translateY(12px) scale(0.99); opacity: 0; transition: transform 200ms ease-in, opacity 200ms ease-in; }
    </style>

    <script>
        // global modal/offcanvas handlers
        $(document).on('show.bs.modal', '.modal', function () { $(this).find('.modal-dialog').addClass('modal-enter'); });
        $(document).on('shown.bs.modal', '.modal', function () { const d = $(this).find('.modal-dialog'); d.removeClass('modal-enter').addClass('modal-opened'); });
        $(document).on('hide.bs.modal', '.modal', function () { $(this).find('.modal-dialog').addClass('modal-exit'); });
        $(document).on('hidden.bs.modal', '.modal', function () { $(this).find('.modal-dialog').removeClass('modal-exit modal-opened'); });

        // ekkoLightbox hook for offcanvas / image preview
        $(document).on('click', '[data-toggle="lightbox"]', function() {
            setTimeout(function(){ const $ekko = $('.ekko-lightbox'); if ($ekko.length) { $ekko.find('.modal-dialog').addClass('modal-enter'); } }, 10);
        });
    </script>
<!-- form submit -->
<script>
    $("#form_about").on('submit', function(event) {
        event.preventDefault();
        var id_about_page = '';
        var image_page_path = '';
        if (lang == 'en') {
            id_about_page = <?= $about_page['1']['id_about_page'] ?>;
            $('#image_page_path_old').val('<?= $about_page['1']['image_page_path'] ?>');
        } else if (lang == 'th') {
            id_about_page = <?= $about_page['0']['id_about_page'] ?>;
            $('#image_page_path_old').val('<?= $about_page['0']['image_page_path'] ?>');
        }
        action_('dashboard/aboutpage/abouthead/update/' + id_about_page, 'form_about');
    });
</script>