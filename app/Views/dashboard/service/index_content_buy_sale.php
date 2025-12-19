<title>แก้ไขข้อมูล ข้อมูลสัตว์เลี้ยง</title>
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
        color: #3b82f6;
    }

    .fa-exchange-alt:hover {
        color: #2563eb;
        transform: scale(1.15);
    }

    .fa-trash {
        color: #ef4444;
    }

    .fa-trash:hover {
        color: #dc2626;
        transform: scale(1.15);
    }

    /* Form Controls */
    .form-control, select.form-control {
        border-radius: 10px;
        border: 2px solid rgba(1, 152, 180, 0.2);
        padding: 0.75rem 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus, select.form-control:focus {
        border-color: var(--service-blue);
        box-shadow: 0 0 0 0.2rem rgba(1, 152, 180, 0.25);
    }

    textarea.form-control {
        resize: vertical;
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
        padding: 2rem 1.5rem;
        transition: border-color 0.3s ease, background 0.3s ease, transform 0.3s ease;
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
        font-size: 1rem;
        margin: 0;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-image {
        max-height: 250px;
        max-width: 100%;
        margin: auto;
        border-radius: 12px;
        box-shadow: var(--shadow-medium);
    }

    .remove-image {
        width: 180px;
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
        margin-bottom: 1rem;
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
        font-size: 0.85rem;
    }

    /* Labels */
    label {
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        /* display: flex; */
        align-items: center;
        font-size: 0.9rem;
    }

    label i {
        color: var(--service-blue);
        margin-right: 0.5rem;
    }

    /* Section Dividers */
    hr {
        border-top: 2px solid rgba(1, 152, 180, 0.15);
        margin: 1.5rem 0;
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
            font-size: 1rem;
        }

        .section-header p {
            font-size: 0.75rem !important;
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

        .image-upload-wrap {
            padding: 1.5rem 1rem;
        }

        .drag-text h3 {
            font-size: 0.9rem;
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-header" style="border-bottom: none">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0"><strong><?= $data_service['header_service_name_th'] ?></strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active"><?= $data_service['header_service_name_th'] ?></li>
                                        <li class="breadcrumb-item active">ข้อมูลสัตว์เลี้ยง</li>
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
                                <strong>ข้อมูลสัตว์เลี้ยง</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-lg" title="เพิ่มหน้าปก" onclick="load_modal('Create', 'data')">
                                    <i class="fas fa-plus"></i> เพิ่มสัตว์เลี้ยง
                                </button>
                                <button type="button" class="btn btn-tool" style="color: white;" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-hover table-bordered text-center">
                                <thead style="background-color: #ECF0F3;">
                                    <tr>
                                        <th width="6%">ลําดับ</th>
                                        <th width="30%">รูปภาพสัตว์เลี้ยง</th>
                                        <th width="20%">ชื่อสัตว์เลี้ยง</th>
                                        <th>วันที่อัพเดท</th>
                                        <th>สถานะ</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
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


<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="mb-3" id="form_service_animal" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <!-- Left Column: Image Upload -->
                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="section-header">
                                <h5>
                                    <i class="fas fa-image mr-2" style="color: var(--service-blue);"></i>
                                    รูปภาพสัตว์เลี้ยง
                                </h5>
                                <p>JPG, PNG | ไม่เกิน 5MB</p>
                            </div>
                            <div >
                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">
                                    <i class="fas fa-folder-open mr-2"></i>เลือกรูปภาพ
                                </button>
                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" id="upload_image" name="upload_image" />
                                    <div class="drag-text">
                                        <div class="mb-2">
                                            <i class="fas fa-cloud-upload-alt" style="font-size: 2.5rem; color: var(--service-blue);"></i>
                                        </div>
                                        <h3>ลากและวางไฟล์ที่นี่</h3>
                                        <p style="color: var(--text-light); font-size: 0.8rem; margin-top: 0.5rem;">หรือคลิกปุ่มด้านบน</p>
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
                        </div>

                        <!-- Right Column: Pet Information -->
                        <div class="col-lg-8 col-12">
                            <!-- Basic Info Section -->
                            <div class="section-header">
                                <h5>
                                    <i class="fas fa-paw mr-2" style="color: var(--service-blue);"></i>
                                    ข้อมูลพื้นฐาน
                                </h5>
                                <p>ชื่อ พันธุ์ และเพศของสัตว์เลี้ยง</p>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="name_pet_th">
                                            <i class="fas fa-language"></i>
                                            ชื่อ (ไทย)
                                        </label>
                                        <input type="text" id="name_pet_th" name="name_pet_th" class="form-control" placeholder="เช่น น้องดอกไม้" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="breed_th">
                                            <i class="fas fa-dna"></i>
                                            พันธุ์ (ไทย)
                                        </label>
                                        <input type="text" id="breed_th" name="breed_th" class="form-control" placeholder="เช่น ชิวาว่า" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="gender">
                                            <i class="fas fa-venus-mars"></i>
                                            เพศ
                                        </label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="male">ผู้</option>
                                            <option value="female">เมีย</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name_pet_en">
                                            <i class="fas fa-globe"></i>
                                            ชื่อ (English)
                                        </label>
                                        <input type="text" id="name_pet_en" name="name_pet_en" class="form-control" placeholder="e.g. Flower" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="breed_en">
                                            <i class="fas fa-dna"></i>
                                            พันธุ์ (English)
                                        </label>
                                        <input type="text" id="breed_en" name="breed_en" class="form-control" placeholder="e.g. Chihuahua" required>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!-- Physical & Price Info Section -->
                            <div class="section-header">
                                <h5>
                                    <i class="fas fa-info-circle mr-2" style="color: var(--service-blue);"></i>
                                    ลักษณะและราคา
                                </h5>
                                <p>สี ลักษณะนิสัย อายุ และราคา</p>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="color_th">
                                            <i class="fas fa-palette"></i>
                                            สีขน (ไทย)
                                        </label>
                                        <input type="text" id="color_th" name="color_th" class="form-control" placeholder="เช่น น้ำตาล" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="age">
                                            <i class="fas fa-birthday-cake"></i>
                                            อายุ
                                        </label>
                                        <input type="text" id="age" name="age" class="form-control" placeholder="เช่น 2 เดือน" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="price">
                                            <i class="fas fa-tag"></i>
                                            ราคา (บาท)
                                        </label>
                                        <input type="text" id="price" name="price" class="form-control" placeholder="เช่น 5000" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="characteristics_th">
                                            <i class="fas fa-heart"></i>
                                            นิสัย (ไทย)
                                        </label>
                                        <input type="text" id="characteristics_th" name="characteristics_th" class="form-control" placeholder="เช่น ขี้เล่น ร่าเริง" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="color_en">
                                            <i class="fas fa-palette"></i>
                                            สีขน (English)
                                        </label>
                                        <input type="text" id="color_en" name="color_en" class="form-control" placeholder="e.g. Brown" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="characteristics_en">
                                            <i class="fas fa-heart"></i>
                                            นิสัย (English)
                                        </label>
                                        <input type="text" id="characteristics_en" name="characteristics_en" class="form-control" placeholder="e.g. Playful, Cheerful" required>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!-- Vaccination History Section -->
                            <div class="section-header">
                                <h5>
                                    <i class="fas fa-syringe mr-2" style="color: var(--service-blue);"></i>
                                    ประวัติการฉีดวัคซีน
                                </h5>
                                <p>บันทึกข้อมูลวัคซีนและการรักษา</p>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="vaccination_history_th">
                                            <i class="fas fa-language"></i>
                                            ประวัติวัคซีน (ไทย)
                                        </label>
                                        <textarea name="vaccination_history_th" id="vaccination_history_th" class="form-control" rows="4" placeholder="ระบุประวัติการฉีดวัคซีนและวันที่"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="vaccination_history_en">
                                            <i class="fas fa-globe"></i>
                                            Vaccination History (English)
                                        </label>
                                        <textarea name="vaccination_history_en" id="vaccination_history_en" class="form-control" rows="4" placeholder="Enter vaccination history and dates"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" id="url_route" name="url_route" hidden>
                <input type="text" id="path_image_old" name="path_image_old" hidden>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fas fa-times mr-2"></i>ยกเลิก
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save mr-2"></i>บันทึกข้อมูล
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- modal -->
<script>
    var check_action = '';

    function load_modal(action, data_encode) {
        $('#upload_image').val('');
        $('#name_pet_th').val('');
        $('#name_pet_en').val('');
        $('#breed_th').val('');
        $('#breed_en').val('');
        $('#gender').val('male');
        $('#age').val('');
        $('#color_th').val('');
        $('#color_en').val('');
        $('#characteristics_th').val('');
        $('#characteristics_en').val('');
        $('#vaccination_history_th').val('');
        $('#vaccination_history_en').val('');
        $('#price').val('');
        removeUpload();
        switch (action) {
            case 'Create':
                $("#modal-title").html('<i class="fas fa-plus-circle mr-2"></i>เพิ่มข้อมูลสัตว์เลี้ยง');
                $('#url_route').val('dashboard/animal/create/' + <?= $data_service['id_service_header'] ?>);
                check_action = 'Create';
                break;
            case 'Update':
                $("#modal-title").html('<i class="fas fa-edit mr-2"></i>แก้ไขข้อมูลสัตว์เลี้ยง');
                const data = JSON.parse(decodeURIComponent(data_encode));
                $('#name_pet_th').val(data.name_pet_th);
                $('#name_pet_en').val(data.name_pet_en);
                $('#breed_th').val(data.breed_th);
                $('#breed_en').val(data.breed_en);
                $('#gender').val(data.gender);
                $('#age').val(data.age);
                $('#color_th').val(data.color_th);
                $('#color_en').val(data.color_en);
                $('#characteristics_th').val(data.characteristics_th);
                $('#characteristics_en').val(data.characteristics_en);
                $('#vaccination_history_th').val(data.vaccination_history_th);
                $('#vaccination_history_en').val(data.vaccination_history_en);
                $('#price').val(data.price);
                $('#url_route').val('dashboard/animal/update/' + data.id_service_content_buy_sale);
                $('#path_image_old').val(data.image_path);
                check_action = 'Update';
                break;
            default:
                break;
        }
    }
</script>
<!-- table data -->
<script>
    $(document).ready(function() {
        $(function() {
            $('#example2').DataTable({
                'serverSide': true,
                'ajax': {
                    'url': "<?php echo site_url('dashboard/animal/getdata/' . $data_service['id_service_header']); ?>",
                    'type': 'GET',
                    'dataSrc': 'data',
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
                    sSearch: "ค้นหา ชื่อสัตว์เลี้ยงและพันธ์: ",
                    oPaginate: {
                        sFirst: "หน้าแรก",
                        sPrevious: "ก่อนหน้า",
                        sNext: "ถัดไป",
                        sLast: "หน้าสุดท้าย"
                    },
                },
                "drawCallback": function(settings) {
                    var daData = settings.json.data;
                    $('#carousel-indicators').empty();
                    $('#carousel').empty();
                    if (daData.length == 0) {
                        $('#example2 tbody').html(`
                        <tr>
                            <td colspan="6" class="text-center">
                            ไม่พบข้อมูล
                            </td>
                        </tr>`);
                    }
                },
                'columns': [{
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    }, {
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            return `<a href="<?= base_url('dist/img/animal/') ?>${data.image_path}" data-toggle="lightbox" data-title="${data.name_pet_th}" data-gallery="gallery">
                                <img src="<?= base_url('dist/img/animal/') ?>${data.image_path}" class="img-fluid mb-2" alt="white sample" style="width: 10rem;" />
                                </a>`;
                        }
                    }, {
                        'data': 'name_pet_th',
                        'class': 'text-center',
                    },
                    {
                        'data': 'create_date',
                        'class': 'text-center',
                    }, {
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            if (data.status == 0) {
                                return '<span class="badge bg-danger">ไม่ใช้งาน</span>';
                            }
                            if (data.status == 1) {
                                return '<span class="badge bg-success">ใช้งาน</span>';
                            } else {
                                return '<span class="badge bg-warning">ขายแล้ว</span>';
                            }
                        }
                    }, {
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            const encodedRowData = encodeURIComponent(JSON.stringify(row));
                            return `<a href="javascript:load_modal('Update', '${encodedRowData}')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-lg"></i></a>
                            <a href="javascript:alert_change_status('dashboard/animal/changestatus/${data.id_service_content_buy_sale}/')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/animal/delete/${data.id_service_content_buy_sale}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
                        }
                    },
                ],
            });
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
<script>
    // Modal animation handlers
    $(document).on('show.bs.modal', '.modal', function () { $(this).find('.modal-dialog').addClass('modal-enter'); });
    $(document).on('shown.bs.modal', '.modal', function () { const d = $(this).find('.modal-dialog'); d.removeClass('modal-enter').addClass('modal-opened'); });
    $(document).on('hide.bs.modal', '.modal', function () { $(this).find('.modal-dialog').addClass('modal-exit'); });
    $(document).on('hidden.bs.modal', '.modal', function () { $(this).find('.modal-dialog').removeClass('modal-exit modal-opened'); });

    // ekkoLightbox animation integration
    $(document).on('click', '[data-toggle="lightbox"]', function() { setTimeout(function(){ const $ekko = $('.ekko-lightbox'); if ($ekko.length) { $ekko.find('.modal-dialog').addClass('modal-enter'); } }, 10); });
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
<!-- form submit -->
<script>
    $("#form_service_animal").on('submit', function(event) {
        event.preventDefault();
        const value_image = document.getElementById('upload_image').value;
        const urlRouteInput = document.getElementById("url_route").value;

        if (check_action == 'Create' || check_action == 'Update') {
            if (check_action == 'Create' && !value_image) {
                Swal.fire({
                    title: 'กรุณาเลือกรูปภาพ...',
                    icon: 'warning',
                    showConfirmButton: true,
                });
            } else {
                action_(urlRouteInput, 'form_service_animal');
            }
        }
    });
</script>
<!-- alert change status -->
<script>
    function alert_change_status(url) {
        Swal.fire({
            title: "เปลี่ยนสถานะ",
            input: "select",
            inputOptions: {
                "0": "ไม่ใช้งาน",
                "1": "ใช้งาน",
                "2": "ขายแล้ว",
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