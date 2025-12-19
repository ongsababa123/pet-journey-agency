<title>แก้ไขข้อมูลเพิ่มเติม</title>
<!-- Content Wrapper. Contains page content -->
<style>
    :root {
        --teal-primary: #4ecdc4;
        --teal-dark: #44a08d;
        --accent-orange: #f39c12;
        --orange-dark: #e67e22;
        --navy-blue: #1a2a6c;
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
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%) !important;
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
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%) !important;
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
        background: rgba(78, 205, 196, 0.05);
        transform: translate3d(0, -1px, 0);
        box-shadow: 0 2px 8px rgba(78, 205, 196, 0.1);
    }

    .table tbody td {
        vertical-align: middle;
        padding: 1rem;
        border-color: rgba(78, 205, 196, 0.1);
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
    .form-control {
        border-radius: 10px;
        border: 2px solid rgba(78, 205, 196, 0.2);
        padding: 0rem 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--teal-primary);
        box-shadow: 0 0 0 0.2rem rgba(78, 205, 196, 0.25);
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
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
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
        border-top: 1px solid rgba(78, 205, 196, 0.1);
        padding: 1.5rem 2rem;
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%);
        border-radius: 0 0 25px 25px;
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
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%);
        border-radius: 15px;
        margin-bottom: 1rem;
    }

    /* Section Headers */
    .section-header {
        padding-bottom: 1rem;
        margin-bottom: 1.5rem;
        border-bottom: 2px solid rgba(78, 205, 196, 0.2);
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
                                    <h1 class="m-0"><strong>จัดการหน้าเพจ</strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active">หน้าเกียวกับเรา</li>
                                        <li class="breadcrumb-item active">ข้อมูลเพิ่มเติม</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div>
                        </div><!-- /.card-header -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <div class="row">
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-header" style="background-color: #043062;color: white">
                            <h3 class="card-title mt-2">
                                <i class="fas fa-chart-pie mr-1"></i>
                                <strong>ข้อมูลหน้าปก</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" title="เพิ่มข้อมูล" onclick="load_modal('Create', 'data')">
                                    <i class="fas fa-plus"></i> เพิ่มข้อมูล
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
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
                                        <select id="select_status" name="select_status" class="form-control select2" style="width: 100%;" onchange="getdata_table()">
                                            <option value="2" selected>ทั้งหมด</option>
                                            <option value="1">เปิดใช้งาน</option>
                                            <option value="0">ปิดใช้งาน</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-10">
                                </div>
                            </div>
                            <hr>
                            <table id="example2" class="table table-hover table-bordered text-center">
                                <thead style="background-color: #ECF0F3;">
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th width="15%">รูปภาพ</th>
                                        <th width="15%">หัวข้อ</th>
                                        <th width="40%">รายละเอียด</th>
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

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"><i class="fas fa-info-circle mr-2"></i>จัดการข้อมูล</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="mb-3" id="form_more" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- Upload Section -->
                    <div class="section-header">
                        <h5>
                            <i class="fas fa-cloud-upload-alt mr-2" style="color: var(--teal-primary);"></i>
                            อัพโหลดรูปภาพ
                        </h5>
                        <p>รองรับไฟล์ภาพ JPG, PNG ขนาดแนะนำ 900 x 600 px (ไม่เกิน 5MB)</p>
                    </div>
                    <div class="mb-4">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">
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

                    <!-- Thai Information Section -->
                    <div class="section-header">
                        <h5>
                            <i class="fas fa-language mr-2" style="color: var(--teal-primary);"></i>
                            ข้อมูลภาษาไทย
                        </h5>
                        <p>กรอกหัวข้อและรายละเอียดเป็นภาษาไทย</p>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="topic_name_th">
                                    <i class="fas fa-heading mr-2" style="color: var(--teal-primary);"></i>
                                    หัวข้อ (ไทย)
                                </label>
                                <input type="text" id="topic_name_th" name="topic_name_th" class="form-control" placeholder="กรอกหัวข้อภาษาไทย" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="detail_th">
                                    <i class="fas fa-align-left mr-2" style="color: var(--teal-primary);"></i>
                                    รายละเอียด (ไทย)
                                </label>
                                <textarea name="detail_th" id="detail_th" class="form-control" placeholder="กรอกรายละเอียดภาษาไทย" require rows="5"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- English Information Section -->
                    <div class="section-header">
                        <h5>
                            <i class="fas fa-globe mr-2" style="color: var(--teal-primary);"></i>
                            ข้อมูลภาษาอังกฤษ
                        </h5>
                        <p>กรอกหัวข้อและรายละเอียดเป็นภาษาอังกฤษ</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="topic_name_en">
                                    <i class="fas fa-heading mr-2" style="color: var(--teal-primary);"></i>
                                    หัวข้อ (อังกฤษ)
                                </label>
                                <input type="text" id="topic_name_en" name="topic_name_en" class="form-control" placeholder="Enter English Topic" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="detail_en">
                                    <i class="fas fa-align-left mr-2" style="color: var(--teal-primary);"></i>
                                    รายละเอียด (อังกฤษ)
                                </label>
                                <textarea name="detail_en" id="detail_en" class="form-control" placeholder="Enter English Details" require rows="5"></textarea>
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
        $('#topic_name_th').val('');
        $('#topic_name_en').val('');
        $('#detail_th').val('');
        $('#detail_en').val('');
        removeUpload();
        switch (action) {
            case 'Create':
                $("#modal-title").html('<i class="fas fa-plus-circle mr-2"></i>เพิ่มข้อมูล');
                $('#url_route').val('dashboard/aboutpage/aboutmore/create');
                check_action = 'Create';
                break;
            case 'Update':
                $("#modal-title").html('<i class="fas fa-edit mr-2"></i>แก้ไขข้อมูล');
                const data = JSON.parse(decodeURIComponent(data_encode));
                $('#topic_name_th').val(data.topic_name_th);
                $('#topic_name_en').val(data.topic_name_en);
                $('#detail_th').val(data.detail_th);
                $('#detail_en').val(data.detail_en);
                $('#url_route').val('dashboard/aboutpage/aboutmore/update/' + data.id_more_about_pet);
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
                'url': "<?php echo site_url('dashboard/aboutpage/aboutmore/getdata'); ?>",
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
                sSearch: "ค้นหา ชื่อหัวข้อ: ",
                oPaginate: {
                    sFirst: "หน้าแรก",
                    sPrevious: "ก่อนหน้า",
                    sNext: "ถัดไป",
                    sLast: "หน้าสุดท้าย"
                },
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
                }, {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        return `<a href="<?= base_url('dist/img/about-more/') ?>${data.image_path}" data-toggle="lightbox" data-title="${data.topic_name_th}" data-gallery="gallery">
                                        <img src="<?= base_url('dist/img/about-more/') ?>${data.image_path}" class="img-fluid mb-2" alt="white sample" style="width: 10rem;" />
                                    </a>`;
                    }
                }, {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        return `${data.topic_name_th}<br><hr>${data.topic_name_en}`;
                    }
                }, {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        return `${data.detail_th}<br><hr>${data.detail_en}`;
                    }
                }, {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        if (data.status == 0) {
                            return '<span class="badge bg-danger">ไม่ใช้งาน</span>';
                        } else {
                            return '<span class="badge bg-success">ใช้งาน</span>';
                        }
                    }
                },
                {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        const RowData = JSON.stringify(row).replace(/'/g, "\\'"); // Escape single quotes

                        const encodedRowData = encodeURIComponent(RowData);
                        return `<a href="javascript:load_modal('Update', '${encodedRowData}')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-lg"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการเปลี่ยนสถานะหรือไม่', 'dashboard/aboutpage/aboutmore/changestatus/${data.id_more_about_pet}/${data.status}')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/aboutpage/aboutmore/delete/${data.id_more_about_pet}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
                    }
                },
            ],
        });
    }
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
<style>
    /* Modal animation helpers */
    .modal-enter .modal-content { transform: translateY(20px) scale(0.98); opacity: 0; }
    .modal-opened .modal-content { transform: translateY(0) scale(1); opacity: 1; transition: transform 250ms cubic-bezier(0.4,0,0.2,1), opacity 250ms ease-out; }
    .modal-exit .modal-content { transform: translateY(12px) scale(0.99); opacity: 0; transition: transform 200ms ease-in, opacity 200ms ease-in; }
</style>

<script>
    $(document).on('show.bs.modal', '.modal', function () { $(this).find('.modal-dialog').addClass('modal-enter'); });
    $(document).on('shown.bs.modal', '.modal', function () { const d = $(this).find('.modal-dialog'); d.removeClass('modal-enter').addClass('modal-opened'); });
    $(document).on('hide.bs.modal', '.modal', function () { $(this).find('.modal-dialog').addClass('modal-exit'); });
    $(document).on('hidden.bs.modal', '.modal', function () { $(this).find('.modal-dialog').removeClass('modal-exit modal-opened'); });

    $(document).on('click', '[data-toggle="lightbox"]', function() {
        setTimeout(function(){ const $ekko = $('.ekko-lightbox'); if ($ekko.length) { $ekko.find('.modal-dialog').addClass('modal-enter'); } }, 10);
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
    $("#form_more").on('submit', function(event) {
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
                action_(urlRouteInput, 'form_more');
            }
        }
    });
</script>