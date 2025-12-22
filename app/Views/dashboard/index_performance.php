<title>แก้ไขข้อมูล ผลการทำงานของทีม</title>
<style>
    .layout-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(7, 200px);
        gap: 10px;
        margin-top: 50px;
    }

    .layout-box {
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        background-color: #ccc;
        position: relative;
    }

    .layout-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .layout-box .text-content {
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .layout-box .text-content-img {
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        display: flex;
        justify-content: space-around;
        align-items: end;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(27, 59, 93, 0.75) 100%);
        color: #ffffff;
    }

    .layout-box:hover {
        transform: scale(1.02);
        /* Optional: Scale up the box on hover */
    }

    .box1 {
        grid-column: span 2;
        grid-row: span 1;
    }

    .box2 {
        grid-column: span 1;
        grid-row: span 1;
    }

    .box3 {
        grid-column: span 1;
        grid-row: span 1;
    }

    .box4 {
        grid-column: span 1;
        grid-row: span 2;
    }

    .box5 {
        grid-column: span 1;
        grid-row: span 2;
    }

    .box6 {
        grid-column: span 2;
        grid-row: span 2;
    }

    .box7 {
        grid-column: span 1;
        grid-row: span 1;
    }

    .box8 {
        grid-column: span 1;
        grid-row: span 1;
    }

    .box9 {
        grid-column: span 1;
        grid-row: span 1;
    }

    .box10 {
        grid-column: span 1;
        grid-row: span 1;
    }

    .box11 {
        grid-column: span 2;
        grid-row: span 3;
    }

    .box12 {
        grid-column: span 2;
        grid-row: span 1;
    }

    .box13 {
        grid-column: span 1;
        grid-row: span 1;
    }

    .box14 {
        grid-column: span 1;
        grid-row: span 2;
    }

    .box15 {
        grid-column: span 1;
        grid-row: span 1;
    }
</style>

<!-- offcanvas -->

<style>
    .offcanvas {
        width: 100%;
        height: 80vh;
        max-height: 600px;
        position: fixed;
        bottom: -80vh;
        left: 0;
        background-color: white;
        z-index: 1051;
        transition: bottom 0.3s ease-in-out;
        background-color: #23456B;
        border-radius: 15px 15px 0 0;
    }

    .offcanvas.show {
        bottom: 0;
    }

    .offcanvas.half {
        /* Show the offcanvas at half height instead of moving it off-screen */
        height: 50vh;
        max-height: 100px;
        bottom: 0;
    }

    .offcanvas-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2);
        z-index: 1050;
        display: none;
    }

    .offcanvas-backdrop.show {
        display: block;
    }
</style>

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
        background: linear-gradient(135deg, var(--service-blue) 0%, var(--teal-primary) 100%);
        color: var(--white);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--service-blue) 100%);
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

    .btn-info {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: var(--white);
    }

    .btn-info:hover {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
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

    /* Action Icons */
    .icon-spacing {
        margin-right: 10px;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: transform, color;
    }

    .fa-edit {
        color: var(--teal-primary);
    }

    .fa-edit:hover {
        color: var(--accent-orange);
        transform: scale(1.15);
    }

    .fa-exchange-alt {
        color: var(--service-blue);
    }

    .fa-exchange-alt:hover {
        color: var(--teal-primary);
        transform: rotate(90deg) scale(1.15);
    }

    .fa-trash {
        color: #ef4444;
    }

    .fa-trash:hover {
        color: #dc2626;
        transform: scale(1.15);
    }

    /* Status Badges */
    .badge {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.875rem;
        letter-spacing: 0.3px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    .badge:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .badge-status-active {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .badge-status-inactive {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
    }

    .badge-status-pending {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: white;
    }

    .badge-status-processing {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--orange-dark) 100%);
        color: white;
    }

    .badge-status-completed {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--service-blue) 100%);
        color: white;
    }

    .badge-status-cancelled {
        background: linear-gradient(135deg, #9ca3af 0%, #6b7280 100%);
        color: white;
    }

    /* Form Controls */
    .form-control {
        border-radius: 10px;
        border: 2px solid rgba(1, 152, 180, 0.2);
        padding: 0rem 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--service-blue);
        box-shadow: 0 0 0 0.2rem rgba(1, 152, 180, 0.25);
    }

    /* Modal Styling */
    .modal-content {
        border-radius: 25px;
        border: none;
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.25);
    }

    .modal.fade .modal-dialog {
        transform: translate3d(0, 20px, 0) scale(0.96);
        transition: transform 0.25s cubic-bezier(0.4, 0.0, 0.2, 1),
                    opacity 0.25s ease-out;
    }

    .modal.show .modal-dialog {
        transform: translate3d(0, 0, 0) scale(1);
    }

    .modal-header {
        background: linear-gradient(135deg, var(--service-blue) 0%, var(--teal-primary) 100%);
        border-radius: 25px 25px 0 0;
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
        background: white;
    }

    .modal-footer {
        border-top: 1px solid rgba(1, 152, 180, 0.1);
        padding: 1.5rem 2rem;
        background: linear-gradient(135deg, rgba(1, 152, 180, 0.05) 0%, rgba(78, 205, 196, 0.05) 100%);
        border-radius: 0 0 25px 25px;
    }

    /* File Upload Styling */
    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: var(--white);
        background: linear-gradient(135deg, var(--service-blue) 0%, var(--teal-primary) 100%);
        border: none;
        padding: 0.65rem;
        border-radius: 10px;
        font-size: 0.9rem;
        font-weight: 600;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        box-shadow: var(--shadow-soft);
    }

    .file-upload-btn:hover {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--service-blue) 100%);
        transform: translate3d(0, -2px, 0);
        box-shadow: var(--shadow-medium);
    }

    .image-upload-wrap {
        margin-top: 0.75rem;
        border: 2px dashed rgba(1, 152, 180, 0.4);
        background: linear-gradient(135deg, rgba(1, 152, 180, 0.08) 0%, rgba(78, 205, 196, 0.08) 100%);
        position: relative;
        border-radius: 15px;
        padding: 1rem 0.75rem;
        transition: border-color 0.3s ease,
                    background 0.3s ease,
                    transform 0.3s ease;
    }

    .image-upload-wrap:hover {
        border-color: var(--service-blue);
        background: linear-gradient(135deg, rgba(1, 152, 180, 0.15) 0%, rgba(78, 205, 196, 0.15) 100%);
        transform: translate3d(0, 0, 0) scale(1.01);
    }

    .image-dropping {
        border-color: var(--teal-primary) !important;
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.2) 0%, rgba(1, 152, 180, 0.2) 100%) !important;
        transform: translate3d(0, 0, 0) scale(1.02);
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 600;
        color: var(--text-dark);
        font-size: 0.95rem;
        margin: 0;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-image {
        max-height: 200px;
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

    .image-preview-wrapper {
        padding: 1rem;
        background: linear-gradient(135deg, rgba(1, 152, 180, 0.05) 0%, rgba(78, 205, 196, 0.05) 100%);
        border-radius: 15px;
        margin-bottom: 1rem;
    }

    /* Section Headers */
    .section-header {
        padding-bottom: 1rem;
        margin-bottom: 1.5rem;
        border-bottom: 2px solid rgba(1, 152, 180, 0.2);
    }

    .section-header h5 {
        margin: 0 0 0.5rem 0;
        display: flex;
        align-items: center;
        color: var(--text-dark);
        font-weight: 600;
    }

    .section-header p {
        margin: 0;
        color: var(--text-light);
        font-size: 0.9rem;
    }

    /* Labels */
    label {
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        /* display: flex; */
        align-items: center;
    }

    label i {
        color: var(--service-blue);
        margin-right: 0.5rem;
    }

    /* Modal animation helpers */
    .modal-enter .modal-content { transform: translateY(20px) scale(0.98); opacity: 0; }
    .modal-opened .modal-content { transform: translateY(0) scale(1); opacity: 1; transition: transform 250ms cubic-bezier(0.4,0,0.2,1), opacity 250ms ease-out; }
    .modal-exit .modal-content { transform: translateY(12px) scale(0.99); opacity: 0; transition: transform 200ms ease-in, opacity 200ms ease-in; }

    /* Responsive - Tablet */
    @media (max-width: 992px) {
        .card-body {
            padding: 1.5rem;
        }

        .modal-body {
            padding: 1.5rem;
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

        .modal-body {
            padding: 1rem;
        }

        .section-header h5 {
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

        .image-upload-wrap {
            padding: 2rem 1rem;
        }

        .drag-text h3 {
            font-size: 0.95rem;
        }

        .modal-footer {
            flex-direction: column;
            gap: 0.5rem;
        }

        .modal-footer .btn {
            width: 100%;
        }
    }
</style>
<!-- icheck bootstrap -->
<link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-header" style="border-bottom: none;background-color: #0198B4;color: white">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0"><strong>จัดการหน้าเพจ</strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active">ข้อมูล</li>
                                        <li class="breadcrumb-item active">ข้อมูลพาร์ทเนอร์</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div>
                        </div>
                        <!-- /.card-header -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <div class="row">
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-header" style="background-color: #0198B4;color: white">
                            <h3 class="card-title mt-2">
                                <i class="fas fa-chart-pie mr-1"></i>
                                <strong>ข้อมูลเมนูผลการทำงานของทีม</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary" onclick="switchLanguage()" id="btn_switch_lang">เปลี่ยนภาษาตัวอย่าง แสดงผลข้อมูล (ภาษาไทย)</button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: white">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="layout-grid" id="layout-grid">
                                <div class="layout-box box1" id="box-1" onclick="toggleOffcanvas('new_open', 'box-1')"></div>
                                <div class="layout-box box2" id="box-2" onclick="toggleOffcanvas('new_open', 'box-2')"></div>
                                <div class="layout-box box3" id="box-3" onclick="toggleOffcanvas('new_open', 'box-3')"></div>
                                <div class="layout-box box4" id="box-4" onclick="toggleOffcanvas('new_open', 'box-4')"></div>
                                <div class="layout-box box5" id="box-5" onclick="toggleOffcanvas('new_open', 'box-5')"></div>
                                <div class="layout-box box6" id="box-6" onclick="toggleOffcanvas('new_open', 'box-6')"></div>
                                <div class="layout-box box7" id="box-7" onclick="toggleOffcanvas('new_open', 'box-7')"></div>
                                <div class="layout-box box8" id="box-8" onclick="toggleOffcanvas('new_open', 'box-8')"></div>
                                <div class="layout-box box9" id="box-9" onclick="toggleOffcanvas('new_open', 'box-9')"></div>
                                <div class="layout-box box10" id="box-10" onclick="toggleOffcanvas('new_open', 'box-10')"></div>
                                <div class="layout-box box11" id="box-11" onclick="toggleOffcanvas('new_open', 'box-11')"></div>
                                <div class="layout-box box12" id="box-12" onclick="toggleOffcanvas('new_open', 'box-12')"></div>
                                <div class="layout-box box13" id="box-13" onclick="toggleOffcanvas('new_open', 'box-13')"></div>
                                <div class="layout-box box14" id="box-14" onclick="toggleOffcanvas('new_open', 'box-14')"></div>
                                <div class="layout-box box15" id="box-15" onclick="toggleOffcanvas('new_open', 'box-15')"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>

<div id="offcanvas" class="offcanvas">
    <div class="card" style="background-color: transparent;box-shadow: none">
        <div class="card-header offcanvas-header" style="background: linear-gradient(135deg, var(--service-blue) 0%, var(--teal-primary) 100%); border-bottom: none;">
            <h3 class="card-title" style="color: white; text-shadow: 0 2px 4px rgba(0,0,0,0.2);"><i class="fas fa-edit mr-2" style="color: #FFD700;"></i><strong>แก้ไขข้อมูลผลการทำงาน</strong></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-primary btn-sm" onclick="switchLanguage_canvas()" id="btn_canvas_switch_lang">
                    <i class="fas fa-language mr-2"></i>ภาษาตัวอย่าง (ไทย)
                </button>
                <button type="button" class="btn " onclick="halfOffcanvas()" style="background-color: white;color: #0198B4; border-radius: 8px;" id="halftoggleoffcanvas">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn " onclick="closeOffcanvas()" style="background-color: white;color: #0198B4; border-radius: 8px;">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="padding: 0.75rem 1.25rem 0.75rem 1.25rem; background: linear-gradient(180deg, #23456B 0%, #1a3450 100%);">
            <form class="mb-3" id="form_performance" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                
                <!-- Tab Navigation -->
                <div class="row mb-2">
                    <div class="col-12">
                        <ul class="nav nav-pills nav-justified modern-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1-tab" data-toggle="pill" href="#tab1" role="tab" onclick="switchTab(1)">
                                    <i class="fas fa-file-image mr-2"></i>
                                    <span class="d-none d-md-inline">ข้อความและรูปภาพ</span>
                                    <span class="d-inline d-md-none">ข้อความ+รูป</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab2-tab" data-toggle="pill" href="#tab2" role="tab" onclick="switchTab(2)">
                                    <i class="fas fa-image mr-2"></i>
                                    <span class="d-none d-md-inline">รูปภาพอย่างเดียว</span>
                                    <span class="d-inline d-md-none">รูปภาพ</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab3-tab" data-toggle="pill" href="#tab3" role="tab" onclick="switchTab(3)">
                                    <i class="fas fa-font mr-2"></i>
                                    <span class="d-none d-md-inline">ข้อความอย่างเดียว</span>
                                    <span class="d-inline d-md-none">ข้อความ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Hidden Radio Inputs -->
                <input type="radio" name="r2" id="radioDanger1" value="1" checked hidden>
                <input type="radio" name="r2" id="radioDanger2" value="2" hidden>
                <input type="radio" name="r2" id="radioDanger3" value="3" hidden>

                <!-- Tab Content -->
                <div class="tab-content">
                    
                    <!-- Tab 1: Text + Image -->
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="row">
                            <!-- Image Section -->
                            <div class="col-md-6 mb-3">
                                <div class="form-section">
                                    <h5 class="section-title"><i class="fas fa-image mr-2"></i>รูปภาพ</h5>
                                    <div id="form_image_1" style="border-radius: 15px;">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger('click')">
                                            <i class="fas fa-cloud-upload-alt mr-2"></i>เพิ่มรูปภาพ
                                        </button>
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" id="input_image" name="input_image" />
                                            <div class="drag-text">
                                                <i class="fas fa-images mb-2" style="font-size: 2rem; color: var(--teal-primary);"></i>
                                                <h3>ลากและวางไฟล์ที่นี่</h3>
                                                <p style="color: rgba(255,255,255,0.7); font-size: 0.85rem;">หรือคลิกเพื่อเลือกรูปภาพ</p>
                                            </div>
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="preview image" id="input_image_img" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">
                                                    <i class="fas fa-trash-alt mr-2"></i>ลบรูปภาพ
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Text Section -->
                            <div class="col-md-6 mb-3">
                                <div class="form-section">
                                    <h5 class="section-title"><i class="fas fa-font mr-2"></i>ข้อความ</h5>
                                    <div class="form-group">
                                        <label for="detail_th_1" class="modern-label">
                                            <i class="fas fa-flag mr-2" style="color: var(--teal-primary);"></i>ภาษาไทย
                                        </label>
                                        <textarea class="form-control modern-input" id="detail_th_1" name="detail_th" rows="1" placeholder="กรอกข้อความภาษาไทย..." oninput="onchange_text(this)"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail_en_1" class="modern-label">
                                            <i class="fas fa-flag-usa mr-2" style="color: var(--teal-primary);"></i>English
                                        </label>
                                        <textarea class="form-control modern-input" id="detail_en_1" name="detail_en" rows="1" placeholder="Enter English text..." oninput="onchange_text(this)"></textarea>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="color_text_1" class="modern-label">
                                                    <i class="fas fa-palette mr-2" style="color: var(--teal-primary);"></i>สีตัวหนังสือ
                                                </label>
                                                <div class="color-picker-wrapper">
                                                    <input type="color" id="color_text_1" name="color_text" class="color-picker" oninput="onchange_color(this)">
                                                    <span class="color-preview" id="color_text_preview"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="color_bg_1" class="modern-label">
                                                    <i class="fas fa-fill-drip mr-2" style="color: var(--teal-primary);"></i>สีพื้นหลัง
                                                </label>
                                                <div class="color-picker-wrapper">
                                                    <input type="color" id="color_bg_1" name="color_bg" class="color-picker" oninput="onchange_color(this)">
                                                    <span class="color-preview" id="color_bg_preview"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Image Only -->
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="form-section">
                                    <h5 class="section-title"><i class="fas fa-image mr-2"></i>รูปภาพ</h5>
                                    <div id="form_image_2" style="border-radius: 15px;">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger('click')">
                                            <i class="fas fa-cloud-upload-alt mr-2"></i>เพิ่มรูปภาพ
                                        </button>
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <i class="fas fa-images mb-2" style="font-size: 2rem; color: var(--teal-primary);"></i>
                                                <h3>ลากและวางไฟล์ที่นี่</h3>
                                                <p style="color: rgba(255,255,255,0.7); font-size: 0.85rem;">หรือคลิกเพื่อเลือกรูปภาพ</p>
                                                <div class="mt-2">
                                                    <span class="badge badge-status-pending"><i class="fas fa-info-circle mr-1"></i>โหมดรูปภาพเท่านั้น</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="preview image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">
                                                    <i class="fas fa-trash-alt mr-2"></i>ลบรูปภาพ
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Text Only -->
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="form-section">
                                    <h5 class="section-title"><i class="fas fa-font mr-2"></i>ข้อความ</h5>
                                    <div class="alert alert-info" style="background: linear-gradient(135deg, rgba(59, 130, 246, 0.2) 0%, rgba(37, 99, 235, 0.2) 100%); border: 1px solid rgba(59, 130, 246, 0.3); border-radius: 12px; padding: 0.5rem 0.75rem; margin-bottom: 0.5rem; font-size: 0.85rem;">
                                        <i class="fas fa-info-circle mr-2"></i>โหมดข้อความเท่านั้น - ไม่มีรูปภาพ
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="detail_th_3" class="modern-label">
                                            <i class="fas fa-flag mr-2" style="color: var(--teal-primary);"></i>ข้อความภาษาไทย
                                        </label>
                                        <textarea class="form-control modern-input" id="detail_th_3" rows="2" placeholder="กรอกข้อความภาษาไทย..." oninput="onchange_text(this)"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="detail_en_3" class="modern-label">
                                            <i class="fas fa-flag-usa mr-2" style="color: var(--teal-primary);"></i>ข้อความภาษาอังกฤษ (English)
                                        </label>
                                        <textarea class="form-control modern-input" id="detail_en_3" rows="2" placeholder="Enter English text..." oninput="onchange_text(this)"></textarea>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="color_text_3" class="modern-label">
                                                    <i class="fas fa-palette mr-2" style="color: var(--teal-primary);"></i>สีตัวหนังสือ
                                                </label>
                                                <div class="color-picker-wrapper">
                                                    <input type="color" id="color_text_3" class="color-picker" oninput="onchange_color(this)">
                                                    <span class="color-preview"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="color_bg_3" class="modern-label">
                                                    <i class="fas fa-fill-drip mr-2" style="color: var(--teal-primary);"></i>สีพื้นหลัง
                                                </label>
                                                <div class="color-picker-wrapper">
                                                    <input type="color" id="color_bg_3" class="color-picker" oninput="onchange_color(this)">
                                                    <span class="color-preview"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="row mt-2 mb-2">
                    <div class="col-12">
                        <div class="text-center action-buttons">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="fas fa-save mr-2"></i>บันทึก
                            </button>
                            <button type="button" class="btn btn-danger btn-lg" onclick="closeOffcanvas()">
                                <i class="fas fa-times mr-2"></i>ยกเลิก
                            </button>
                        </div>
                    </div>
                </div>

                <input type="text" name="image_path_old" id="image_path_old" hidden>
            </form>
        </div>
    </div>
</div>
<div id="offcanvasBackdrop" class="offcanvas-backdrop"></div>

<style>
    /* Offcanvas Header - Compact Style */
    .offcanvas-header {
        padding: 0.75rem 1.25rem !important;
    }

    .offcanvas-header .card-title {
        font-size: 1rem !important;
        margin: 0;
        line-height: 1.4;
    }

    .offcanvas-header .card-title i {
        font-size: 0.95rem;
    }

    .offcanvas-header .btn {
        padding: 0.35rem 0.65rem;
        font-size: 0.85rem;
    }

    .offcanvas-header .btn i {
        font-size: 0.85rem;
    }

    .offcanvas-header .card-tools .btn {
        margin-left: 0.35rem;
    }

    /* Modern Tab Styling */
    .modern-tabs {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 0.5rem;
        backdrop-filter: blur(10px);
    }

    .modern-tabs .nav-link {
        color: rgba(255, 255, 255, 0.7);
        border-radius: 12px;
        padding: 0.5rem 1rem;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        border: 2px solid transparent;
    }

    .modern-tabs .nav-link:hover {
        color: white;
        background: rgba(255, 255, 255, 0.1);
    }

    .modern-tabs .nav-link.active {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--service-blue) 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(78, 205, 196, 0.4);
        border-color: rgba(255, 255, 255, 0.2);
    }

    /* Form Section */
    .form-section {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 0.75rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        height: 100%;
    }

    .form-group {
        margin-bottom: 0.5rem;
    }

    .section-title {
        color: white;
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
        padding-bottom: 0.35rem;
        border-bottom: 2px solid rgba(78, 205, 196, 0.3);
    }

    /* Modern Label */
    .modern-label {
        color: white;
        font-weight: 600;
        font-size: 0.85rem;
        margin-bottom: 0.35rem;
        display: flex;
        align-items: center;
    }

    /* Modern Input */
    .modern-input {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(78, 205, 196, 0.3);
        color: white;
        border-radius: 10px;
        padding: 0.5rem 0.75rem;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .modern-input:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: var(--teal-primary);
        box-shadow: 0 0 0 0.2rem rgba(78, 205, 196, 0.25);
        color: white;
    }

    .modern-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    /* Color Picker Wrapper */
    .color-picker-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(78, 205, 196, 0.3);
        border-radius: 10px;
        padding: 0.35rem;
        transition: all 0.3s ease;
    }

    .color-picker-wrapper:hover {
        border-color: var(--teal-primary);
        background: rgba(255, 255, 255, 0.15);
    }

    .color-picker {
        width: 45px;
        height: 35px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .color-picker:hover {
        transform: scale(1.05);
    }

    .color-preview {
        flex: 1;
        margin-left: 0.5rem;
        padding: 0.35rem 0.75rem;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 6px;
        color: white;
        font-size: 0.8rem;
        text-align: center;
    }

    /* Action Buttons */
    .action-buttons .btn {
        min-width: 130px;
        margin: 0 0.5rem;
        font-weight: 600;
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .action-buttons .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }

    .action-buttons .btn-success:hover {
        background: linear-gradient(135deg, #059669 0%, #047857 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
    }

    .action-buttons .btn-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    }

    .action-buttons .btn-danger:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(239, 68, 68, 0.4);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .modern-tabs .nav-link {
            padding: 0.6rem 0.75rem;
            font-size: 0.85rem;
        }

        .form-section {
            padding: 1rem;
        }

        .action-buttons .btn {
            min-width: 120px;
            margin: 0.25rem;
        }
    }
</style>

<script>
    function switchTab(tabNum) {
        // Update radio button
        $('#radioDanger' + tabNum).prop('checked', true);
        
        // Sync inputs across tabs
        if (tabNum === 1) {
            $('#detail_th_1').val($('#detail_th').val() || $('#detail_th_3').val() || '');
            $('#detail_en_1').val($('#detail_en').val() || $('#detail_en_3').val() || '');
            $('#color_text_1').val($('#color_text').val() || $('#color_text_3').val() || '#000000');
            $('#color_bg_1').val($('#color_bg').val() || $('#color_bg_3').val() || '#ffffff');
        } else if (tabNum === 3) {
            $('#detail_th_3').val($('#detail_th').val() || $('#detail_th_1').val() || '');
            $('#detail_en_3').val($('#detail_en').val() || $('#detail_en_1').val() || '');
            $('#color_text_3').val($('#color_text').val() || $('#color_text_1').val() || '#000000');
            $('#color_bg_3').val($('#color_bg').val() || $('#color_bg_1').val() || '#ffffff');
        }
        
        check_radio(true);
    }

    // Update color preview on change
    $('input[type="color"]').on('input', function() {
        const preview = $(this).siblings('.color-preview');
        preview.text($(this).val().toUpperCase());
        preview.css('background-color', $(this).val());
    });
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
                $('#' + this_box + '-img').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
        $('#input_image').val('');
        $('#' + this_box + '-img').attr('src', '<?= base_url('dist/img/gray-color.png') ?>');
        $('#input_image_img').attr('src', null);
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>

<!-- script radio check -->
<script>
    function check_radio(focus_radio, type_show) {
        var text_box = document.getElementById(this_box + '-text');
        var image_box = document.getElementById(this_box + '-img');
        text_box.classList.remove('text-content');
        text_box.classList.remove('text-content-img');
        text_box.style.cssText = '';
        var id = this_box.split('-');
        var foundItem = data_performance_team.find(function(item) {
            return item.id_team === id[1];
        });
        
        // Get active tab number
        let activeTab = 1;
        if ($('#radioDanger2').prop('checked')) activeTab = 2;
        else if ($('#radioDanger3').prop('checked')) activeTab = 3;
        
        if (($('#radioDanger1').prop('checked') && focus_radio) || type_show == '1') {
            // Option 1: Text and Image
            activeTab = 1;
            $('input[type="text"], textarea').prop('disabled', false);
            text_box.classList.toggle('text-content-img');
            image_box.style.display = 'block';
            $('#' + this_box + '-img').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
            $('.image-upload-wrap').hide();
            $('.file-upload-image').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
            $('.file-upload-content').show();
            
            // Sync values to tab 1
            $('#detail_th_1').val(foundItem.detail_th);
            $('#detail_en_1').val(foundItem.detail_en);
            $('#color_text_1').val(foundItem.color_text);
            $('#color_bg_1').val(foundItem.color_bg);
            
        } else if (($('#radioDanger2').prop('checked') && focus_radio) || type_show == '2') {
            // Option 2: Image Only
            activeTab = 2;
            $('input[type="text"], textarea').prop('disabled', true);
            text_box.style.display = 'none';
            image_box.style.display = 'block';
            $('#' + this_box + '-img').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
            $('.image-upload-wrap').hide();
            $('.file-upload-image').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
            $('.file-upload-content').show();
            
        } else if (($('#radioDanger3').prop('checked') && focus_radio) || type_show == '3') {
            // Option 3: Text Only
            activeTab = 3;
            $('input[type="text"], textarea').prop('disabled', false);
            text_box.classList.toggle('text-content');
            text_box.style.color = foundItem.color_text;
            text_box.style.backgroundColor = foundItem.color_bg;
            image_box.style.display = 'none';
            
            // Sync values to tab 3
            $('#detail_th_3').val(foundItem.detail_th);
            $('#detail_en_3').val(foundItem.detail_en);
            $('#color_text_3').val(foundItem.color_text);
            $('#color_bg_3').val(foundItem.color_bg);
        }
        
        // Activate the correct tab if focus_radio is true
        if (focus_radio) {
            $('#tab' + activeTab + '-tab').tab('show');
        }
    }
</script>

<!-- offcanvas -->
<script>
    function toggleOffcanvas(action, id_box) {

        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.remove('half');

        offcanvas.classList.toggle('show');
        offcanvasBackdrop.classList.toggle('show');
        if (action == 'new_open') {

            this_box = id_box;
            var id = id_box.split('-');
            var foundItem = data_performance_team.find(function(item) {
                return item.id_team === id[1];
            });

            $('#detail_th').val(foundItem.detail_th);
            $('#detail_en').val(foundItem.detail_en);
            $('#color_text').val(foundItem.color_text);
            $('#color_bg').val(foundItem.color_bg);
            $('input[name="r2"]').filter('[value="' + foundItem.type_show + '"]').prop('checked', true);
            $('#image_path_old').val(foundItem.image_path);
            if (foundItem.type_show == 1 || foundItem.type_show == 2) {
                $('#' + id_box + '-img').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
                $('.image-upload-wrap').hide();
                $('.file-upload-image').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
                $('.file-upload-content').show();
            } else {
                $('.image-upload-wrap').show();
            }
        }
        check_radio(true);
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

        var id = this_box.split('-');
        var foundItem = data_performance_team.find(function(item) {
            return item.id_team === id[1];
        });
        check_radio(false, foundItem.type_show);
    }

    function halfOffcanvas() {
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');

        // Ensure the offcanvas is visible
        if (!offcanvas.classList.contains('show')) {
            offcanvas.classList.add('show');
            offcanvasBackdrop.classList.add('show');
        }

        // Toggle between full and half height while staying on screen
        if (offcanvas.classList.contains('half')) {
            offcanvas.classList.remove('half'); // back to full height
        } else {
            offcanvas.classList.add('half'); // shrink to half height
        }
    }
</script>

<!-- change -->
<script>
    function onchange_text(input) {
        // Get the actual input id (remove the tab suffix)
        const inputId = input.id.replace(/_[123]$/, '');
        const currentTab = input.id.match(/_([123])$/)?.[1] || '';
        
        // Sync across all tabs
        if (inputId === 'detail_th') {
            $('#detail_th, #detail_th_1, #detail_th_3').val(input.value);
        } else if (inputId === 'detail_en') {
            $('#detail_en, #detail_en_1, #detail_en_3').val(input.value);
        }
        
        // Update display box
        if ((language_canvas == 'th' && inputId == 'detail_th') || 
            (language_canvas == 'en' && inputId == 'detail_en')) {
            $('#' + this_box + '-text').text(input.value);
        }
    }

    function onchange_color(input) {
        // Get the actual input id (remove the tab suffix)
        const inputId = input.id.replace(/_[123]$/, '');
        
        // Sync across all tabs
        if (inputId === 'color_text') {
            $('#color_text, #color_text_1, #color_text_3').val(input.value);
            $('#' + this_box + '-text').css('color', input.value);
            
            // Update color preview
            $('input[id^="color_text"]').siblings('.color-preview').text(input.value.toUpperCase());
            $('input[id^="color_text"]').siblings('.color-preview').css('background-color', input.value);
        } else if (inputId === 'color_bg') {
            $('#color_bg, #color_bg_1, #color_bg_3').val(input.value);
            $('#' + this_box + '-text').css('background-color', input.value);
            
            // Update color preview
            $('input[id^="color_bg"]').siblings('.color-preview').text(input.value.toUpperCase());
            $('input[id^="color_bg"]').siblings('.color-preview').css('background-color', input.value);
        }
    }

    function switchLanguage() {
        if (language == 'th') {
            language = 'en';
            language_canvas = 'en';
            $('#btn_switch_lang').html('<i class="fas fa-language mr-2"></i>แสดงผลข้อมูล (อังกฤษ)');
        } else if (language == 'en') {
            language = 'th';
            language_canvas = 'th';
            $('#btn_switch_lang').html('<i class="fas fa-language mr-2"></i>แสดงผลข้อมูล (ไทย)');
        }
        view_the_performance(language);
    }

    function switchLanguage_canvas() {
        const detail_th_inputs = ['#detail_th', '#detail_th_1', '#detail_th_3'];
        const detail_en_inputs = ['#detail_en', '#detail_en_1', '#detail_en_3'];
        
        if (language_canvas == 'th') {
            language_canvas = 'en';
            const detail_en = $(detail_en_inputs.join(', ')).first().val();
            $('#' + this_box + '-text').text(detail_en);
            $('#btn_canvas_switch_lang').html('<i class="fas fa-language mr-2"></i>ตัวอย่าง (อังกฤษ)');
        } else if (language_canvas == 'en') {
            language_canvas = 'th';
            const detail_th = $(detail_th_inputs.join(', ')).first().val();
            $('#' + this_box + '-text').text(detail_th);
            $('#btn_canvas_switch_lang').html('<i class="fas fa-language mr-2"></i>ตัวอย่าง (ไทย)');
        }
    }
    var language = 'th';
    var language_canvas = 'th';
    var this_box = '';
    $(document).ready(function() {
        view_the_performance(language);
    })
</script>

<!-- box -->
<script>
    var data_performance_team = <?php echo json_encode($data_performance_team); ?>;

    function view_the_performance(language) {

        data_performance_team.forEach(item => {
            const box = document.getElementById(`box-${item.id_team}`);
            $('#box-' + item.id_team).empty();

            const img = document.createElement('img');
            if (item.image_path) {
                img.src = '<?= base_url('dist/img/performance/') ?>' + item.image_path;
                img.id = 'box-' + item.id_team + '-img';
            } else {
                img.src = '<?= base_url('dist/img/gray-color.png') ?>';
                img.id = 'box-' + item.id_team + '-img';
                img.style.display = 'none';
            }

            const text = document.createElement('div');
            text.id = 'box-' + item.id_team + '-text';
            if (['th', 'en'].includes(language)) {
                const detailKey = `detail_${language}`;
                if (item[detailKey]) {
                    text.textContent = `“${item[detailKey]}”`;
                } else {
                    text.textContent = '“”';
                }
            }


            if (item.type_show == '1') {
                img.style.display = 'block';
                box.classList.add('has-image');
                text.classList.add('text-content-img');
            } else if (item.type_show == '2') {
                img.style.display = 'block';
                text.style.display = 'none';
                text.classList.add('text-content');
            } else if (item.type_show == '3') {
                img.style.display = 'none';
                text.classList.add('text-content');
                text.style.color = item.color_text;
                text.style.backgroundColor = item.color_bg;
            }

            box.appendChild(img);
            box.appendChild(text);

        });
    }
</script>

<!-- form submit -->
<script>
    $("#form_performance").on('submit', function(event) {
        event.preventDefault();
        const value_image = document.getElementById('input_image').value;
        const detail_th = document.getElementById('detail_th').value;
        const detail_en = document.getElementById('detail_en').value;
        const selectedRadio = document.querySelector('input[name="r2"]:checked');
        const input_image_img = document.getElementById('input_image_img');
        var id = this_box.split('-');
        var foundItem = data_performance_team.find(function(item) {
            return item.id_team === id[1];
        });

        const urlRouteInput = 'dashboard/performanceteam/update/' + foundItem.id_team;

        if (selectedRadio.value == '1' || selectedRadio.value == '2') {
            // console.log('value_image', value_image, 'input_image_img.src', input_image_img.src);
            if ((!value_image && !input_image_img.src) || (!input_image_img.src)) {
                Swal.fire({
                    title: 'กรุณาเลือกรูปภาพ...',
                    icon: 'warning',
                    showConfirmButton: true,
                });
            } else {
                action_(urlRouteInput, 'form_performance');
            }
        } else if (selectedRadio.value == '3') {
            if (!detail_th || !detail_en) {
                Swal.fire({
                    title: 'กรุณากรอกข้อมูล...',
                    icon: 'warning',
                    showConfirmButton: true,
                });
            } else {
                action_(urlRouteInput, 'form_performance');
            }
        }
    });
</script>