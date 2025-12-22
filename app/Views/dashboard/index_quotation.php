<title>ข้อมูลเสนอราคา</title>
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
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--service-blue) 100%);
        transform: translate3d(0, -2px, 0);
        box-shadow: var(--shadow-medium);
    }

    .image-upload-wrap {
        margin-top: 1.5rem;
        border: 3px dashed rgba(1, 152, 180, 0.4);
        background: linear-gradient(135deg, rgba(1, 152, 180, 0.08) 0%, rgba(78, 205, 196, 0.08) 100%);
        position: relative;
        border-radius: 15px;
        padding: 3rem 2rem;
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
        font-size: 1.1rem;
        margin: 0;
    }

    .file-upload-content {
        display: none;
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
<!-- Select2 -->
<link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">

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
                                    <h1 class="m-0"><strong>จัดการข้อมูลลูกค้า</strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการข้อมูลลูกค้า</a></li>
                                        <li class="breadcrumb-item active">ข้อมูลเสนอราคา</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-2">
                                <i class="fas fa-file-invoice-dollar mr-2" style="color: #FFD700;"></i>
                                <strong>ข้อมูลเสนอราคา</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-xl" title="เพิ่มหน้าปก" onclick="load_modal('Create', 'data')">
                                    <i class="fas fa-plus"></i> เพิ่มใบเสนอราคา
                                </button> <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="select_status">สถานะ</label>
                                        <select id="select_status" name="select_status" class="form-control" style="width: 100%;" onchange="getdata_table()">
                                            <option value="all" selected>ทั้งหมด</option>
                                            <option value="0">ยังไม่ได้อ่าน</option>
                                            <option value="1">กำลังดำเนินการ</option>
                                            <option value="2">ดำเนินการเสร็จสิ้น</option>
                                            <option value="3">ยกเลิก</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-10">
                                </div>
                            </div>
                            <hr>
                            <table id="example2" class="table table-hover table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th width="6%">ลําดับ</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>อีเมล์</th>
                                        <th class="text-center">บริการที่ใช้</th>
                                        <th>สถานะ</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                        <div class="overlay dark" id="overlay_1">
                            <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                        </div>
                    </div>
                    <!-- /.card -->
                </section>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>

<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="mb-3" id="form_quotation" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name_last">ชื่อ-นามสกุล</label>
                                <input type="text" id="name_last" name="name_last" class="form-control" placeholder="ระบุชื่อ-นามสกุล">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="phone_number">หมายเลขโทรศัพท์</label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="ระบุหมายเลขโทรศัพท์">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">อีเมล์</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="ระบุอีเมล">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="travel_date">วันเดินทาง</label>
                                <input type="date" id="travel_date" name="travel_date" class="form-control" placeholder="เลือกวันเดินทาง">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>ประเทศต้นทาง</label>
                                    <select class="form-control select2" style="width: 100%;" id="country_of_origin" name="country_of_origin" oninput="get_airport_of_origin(this.value)">
                                        <option selected="selected" value="0">กรุณาเลือกประเทศต้นทาง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>เลือกสนามบินต้นทาง</label>
                                    <select class="form-control select2" style="width: 100%;" id="airport_of_origin" name="airport_of_origin">
                                        <option selected="selected" value="0">กรุณาเลือกเลือกสนามบินต้นทาง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>ประเทศปลายทาง</label>
                                    <select class="form-control select2" style="width: 100%;" id="destination_country" name="destination_country" oninput="get_airport_of_destination(this.value)">
                                        <option selected="selected" value="0">กรุณาเลือกประเทศปลายทาง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>เลือกสนามบินปลายทาง</label>
                                    <select class="form-control select2" style="width: 100%;" id="destination_airport" name="destination_airport">
                                        <option selected="selected" value="0">กรุณาเลือกเลือกสนามบินปลายทาง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name_last">รูปแบบการเดินทาง</label>
                                <select name="travel_type" id="travel_type" class="form-control">
                                    <option value="1">เดินทางพร้อมผู้โดยสาร (โหลดใต้ท้องเครื่อง)</option>
                                    <option value="2">เดินทางพร้อมผู้โดยสาร (บนเคบิน)</option>
                                    <option value="3">คาร์โก้ (ไม่มีผู้เดินทางด้วย)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group" hidden>
                                <label for="name_last">รูปแบบขนส่งสัตว์เลี้ยง</label>
                                <select name="transport_format" id="transport_format" class="form-control">
                                    <option value="0">กรุณาเลือกรูปแบบขนส่งสัตว์เลี้ยง</option>
                                    <option value="การขนส่งทางรถยนต์">การขนส่งทางรถยนต์</option>
                                    <option value="การขนส่งทางเครื่องบิน">การขนส่งทางเครื่องบิน</option>
                                    <option value="บริการขนส่งสัตว์เลี้ยงเฉพาะทาง">บริการขนส่งสัตว์เลี้ยงเฉพาะทาง</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label for="customCheckbox1" class="col-sm-12 col-form-label">
                            <strong>เลือกบริการที่ต้องการ</strong>
                        </label>
                        <div class="col-sm-12">
                            <?php foreach ($service_header as $key => $value) : ?>
                                <?php if ($value['status'] == 1) : ?>
                                    <div class="form-group clearfix">
                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="service_<?= $key ?>" name="service_<?= $key ?>" value="<?= $value['id_service_header'] ?>">
                                            <label for="service_<?= $key ?>" style="color: grey">
                                                <?= $value['header_service_name_th'] ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="animal_type">ชนิดสัตว์</label>
                                <input type="text" class="form-control" placeholder="ระบุชนิดสัตว์" id="animal_type" name="animal_type">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="breed">สายพันธุ์</label>
                                <input type="text" class="form-control" placeholder="ระบุสายพันธุ์" id="breed" name="breed">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="age">อายุ</label>
                                <input type="text" class="form-control" placeholder="ระบุอายุ" id="age" name="age">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="weight">น้ำหนัก</label>
                                <input type="text" class="form-control" placeholder="ระบุน้ำหนัก" id="weight" name="weight">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="note">หมายเหตุ</label>
                                <input type="text" class="form-control" placeholder="ระบุหมายเหตุ" id="note" name="note">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" id="url_route" name="url_route" hidden>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Select2 -->
<script src="<?= base_url('plugins/select2/js/select2.full.min.js') ?>"></script>

<!-- modal -->
<script>
    function load_modal(action, data_encode) {
        $('#name_last').val('');
        $('#email').val('');
        $('#phone_number').val('');
        $('#travel_date').val('');
        $('#country_of_origin').val('0').trigger('change');
        $('#destination_country').val('0').trigger('change');
        $('#airport_of_origin').val('0').trigger('change');
        $('#destination_airport').val('0').trigger('change');
        $('#travel_type').val('0');
        $('#transport_format').val('0');
        $('input[type="checkbox"]').prop('checked', false);
        $('#animal_type').val('');
        $('#breed').val('');
        $('#age').val('');
        $('#weight').val('');
        $('#note').val('');
        $('#note').val('');

        switch (action) {
            case 'Create':
                $("#modal-title").text('เพิ่มใบเสนอราคา');
                $('#url_route').val('dashboard/quotation/create/<?= count($service_header) ?>');
                break;
            case 'Update':
                $("#modal-title").text('แก้ไขใบเสนอราคา');
                var data = JSON.parse(decodeURIComponent(data_encode));
                $('#name_last').val(data.name_last);
                $('#email').val(data.email);
                $('#phone_number').val(data.phone_number);
                $('#travel_date').val(data.travel_date);
                $('#country_of_origin').val(data.country_of_origin).trigger('change');
                $('#destination_country').val(data.destination_country).trigger('change');
                $('#travel_type').val(data.travel_type);
                $('#transport_format').val(data.transport_format);
                var dataService = data.service.split(',');
                dataService.forEach(element => {
                    $('input[type="checkbox"][value="' + element + '"]').prop('checked', true);
                });
                $('#animal_type').val(data.animal_type);
                $('#breed').val(data.breed);
                $('#age').val(data.age);
                $('#weight').val(data.weight);
                $('#note').val(data.note);
                $('#url_route').val('dashboard/quotation/update/' + data.id_quotation + '/' + <?= count($service_header) ?>);
                break;
            default:
                break;
        }
    }
</script>

<!-- table data -->
<script>
    $(document).ready(function() {
        getdata_table();
    });

    function getdata_table() {
        var select_status = document.getElementById('select_status');

        if ($.fn.DataTable.isDataTable('#example2')) {
            $('#example2').DataTable().destroy();
        }
        $('#overlay_1').show();
        $('#example2').DataTable({
            'serverSide': true,
            'ajax': {
                'url': "<?php echo site_url('dashboard/quotation/getdata'); ?>",
                'type': 'GET',
                'dataSrc': 'data',
                'data': {
                    'select_status': select_status.value
                }
            },
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "oLanguage": {
                sEmptyTable: "ไม่มีข้อมูลในตาราง",
                sInfo: "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                sInfoEmpty: "แสดง 0 ถึง 0 จาก 0 แถว",
                sInfoPostFix: "",
                sInfoThousands: ",",
                sLoadingRecords: "กำลังโหลดข้อมูล...",
                sProcessing: "กำลังดำเนินการ...",
                sSearch: "ค้นหา ชื่อ-นามสกุล , อีเมล์",
                oPaginate: {
                    sFirst: "หน้าแรก",
                    sPrevious: "ก่อนหน้า",
                    sNext: "ถัดไป",
                    sLast: "หน้าสุดท้าย"
                },
                sLengthMenu: "แสดง _MENU_ แถว",
            },
            "drawCallback": function(settings) {
                var daData = settings.json.data;
                if (daData.length == 0) {
                    $('#example2 tbody').html(`
                        <tr>
                            <td colspan="6" class="text-center">
                            ไม่พบข้อมูล
                            </td>
                        </tr>`);
                }
                $('#overlay_1').hide();
            },
            'columns': [{
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    'data': 'name_last',
                    'class': 'text-center',
                },
                {
                    'data': 'email',
                    'class': 'text-center',
                },
                {
                    'data': null,
                    'class': 'text-left',
                    'render': function(data, type, row, meta) {
                        var dataService = data.service.split(',');
                        var serviceHeader = <?php echo json_encode($service_header); ?>;

                        var html = dataService.map(serviceId => {
                            var header = serviceHeader.find(header => header.id_service_header == serviceId);
                            return header ? `- ${header.header_service_name_th}<br>` : '';
                        }).join('');

                        return html;
                    }
                },

                {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        if (data.status == 0) {
                            return '<span class="badge badge-status-pending">ยังไม่ได้เปิดอ่าน</span>';
                        } else if (data.status == 1) {
                            return '<span class="badge badge-status-processing">กำลังดำเนินการ</span>';
                        } else if (data.status == 2) {
                            return '<span class="badge badge-status-completed">ดำเนินการเสร็จสิ้น</span>';
                        } else if (data.status == 3) {
                            return '<span class="badge badge-status-cancelled">ยกเลิก</span>';
                        }
                    }
                },
                {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        const encodedRowData = encodeURIComponent(JSON.stringify(row));
                        return `<a href="javascript:load_modal('Update', '${encodedRowData}')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-xl"></i></a>
                            <a href="javascript:alert_change_status('dashboard/quotation/changestatus/${data.id_quotation}/')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/quotation/delete/${data.id_quotation}')"><i class="fas fa-trash fa-lg icon-spacing" title="ลบข้อมูล"></i></a>`;
                    }
                },
            ],
        });
    }
</script>

<!-- ดึงข้อมูลแต่ละประเทศ -->
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4'
        })
    });
    fetchCountries();
    // ดึงข้อมูลประเทศ
    async function fetchCountries() {
        const response_countries = await fetch('<?= base_url('public/data/countries.json'); ?>');
        if (!response_countries.ok) {
            throw new Error('Network response_countries was not ok ' + response_countries.statusText);
        }
        const countries = await response_countries.json();

        countries.forEach(element => {
            $("#country_of_origin").append('<option value="' + element.code + '">' + element.name_en + ' (' + element.code + ')</option>');
            $("#destination_country").append('<option value="' + element.code + '">' + element.name_en + ' (' + element.code + ')</option>');
        });
    }
</script>

<!-- get_airport_of_origin // get_airport_of_destination -->
<script>
    async function get_airport_of_origin(country) {
        const response_airport = await fetch('<?= base_url('public/data/airports.json'); ?>');
        if (!response_airport.ok) {
            throw new Error('Network response_airport was not ok ' + response_airport.statusText);
        }
        const airports = await response_airport.json();
        $("#airport_of_origin").empty();
        $("#airport_of_origin").append('<option selected="selected" value="0">กรุณาเลือกเลือกสนามบินต้นทาง</option>');
        for (const key in airports) {
            if (airports.hasOwnProperty(key)) {
                const element = airports[key];
                if (element.country === country) {
                    $("#airport_of_origin").append('<option value="' + element.name + '">' + element.name + ' (' + element.state + ')</option>');
                }
            }
        }
    }

    async function get_airport_of_destination(country) {
        const response_airport = await fetch('<?= base_url('public/data/airports.json'); ?>');
        if (!response_airport.ok) {
            throw new Error('Network response_airport was not ok ' + response_airport.statusText);
        }
        const airports = await response_airport.json();
        $("#destination_airport").empty();
        $("#destination_airport").append('<option selected="selected" value="0">กรุณาเลือกเลือกสนามบินปลายทาง</option>');
        for (const key in airports) {
            if (airports.hasOwnProperty(key)) {
                const element = airports[key];
                if (element.country === country) {
                    $("#destination_airport").append('<option value="' + element.name + '">' + element.name + ' (' + element.state + ')</option>');
                }
            }
        }
    }
</script>

<!-- บันทึกข้อมูล -->
<script>
    $("#form_quotation").on('submit', function(event) {
        event.preventDefault();
        const urlRouteInput = document.getElementById("url_route").value;
        action_(urlRouteInput, 'form_quotation');
    });
</script>

<!-- alert change status -->
<script>
    function alert_change_status(url) {
        Swal.fire({
            title: "เปลี่ยนสถานะ",
            input: "select",
            inputOptions: {
                "0": "ยังไม่ได้เปิดอ่าน",
                "1": "กำลังดำเนินการ",
                "2": "ดำเนินการเสร็จสิ้น",
                "3": "ยกเลิก",
            },
            inputPlaceholder: "",
            showCancelButton: true,
            confirmButtonColor: "#28a745",
            confirmButtonText: "ตกลง",
            cancelButtonText: "ยกเลิก",
            cancelButtonColor: "#dc3545",
            inputValidator: (value) => {
                console.log(value);
                return $.ajax({
                    url: '<?= base_url() ?>' + url + value,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Loading...',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            showConfirmButton: false,
                        });
                    },
                }).then(function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            showConfirmButton: false
                        });
                        setTimeout(() => {
                            if (response.reload) {
                                window.location.reload();
                            }
                        }, 2000);
                    } else {
                        Swal.fire({
                            title: response.message,
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            }
        });
    }
</script>
</body>