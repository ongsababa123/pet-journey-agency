<title>แก้ไขข้อมูล ข้อมูลเซอร์วิส</title>
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

    .card-footer {
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(1, 152, 180, 0.05) 100%);
        border-top: 1px solid rgba(78, 205, 196, 0.1);
        padding: 1.5rem 2rem;
        border-radius: 0 0 20px 20px;
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

    /* Form Controls */
    .form-control,
    .form-control:disabled {
        border-radius: 10px;
        border: 2px solid rgba(1, 152, 180, 0.2);
        padding: 0rem 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        background: var(--white);
    }

    .form-control:focus {
        border-color: var(--service-blue);
        box-shadow: 0 0 0 0.2rem rgba(1, 152, 180, 0.25);
    }

    .form-control:disabled {
        background: rgba(1, 152, 180, 0.05);
        cursor: not-allowed;
    }

    /* Labels */
    label {
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
    }

    label i {
        color: var(--service-blue);
        margin-right: 0.5rem;
    }

    /* Summernote Editor Wrapper */
    .editor-section {
        background: linear-gradient(135deg, rgba(1, 152, 180, 0.05) 0%, rgba(78, 205, 196, 0.05) 100%);
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }

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
        font-size: 0.9rem;
    }

    /* Summernote Custom Styling */
    .note-editor.note-frame {
        border: 2px solid rgba(1, 152, 180, 0.2);
        border-radius: 10px;
        box-shadow: var(--shadow-soft);
    }

    .note-editor.note-frame.disabled {
        opacity: 0.7;
    }

    .note-toolbar {
        background: linear-gradient(135deg, rgba(1, 152, 180, 0.1) 0%, rgba(78, 205, 196, 0.1) 100%);
        border-bottom: 1px solid rgba(1, 152, 180, 0.2) !important;
    }

    /* Responsive - Tablet */
    @media (max-width: 992px) {
        .card-body {
            padding: 1.5rem;
        }

        .card-footer {
            padding: 1rem;
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

        .card-footer {
            padding: 1rem;
        }

        .card-footer .btn {
            display: block;
            width: 100%;
            margin-bottom: 0.5rem;
        }

        .card-footer .btn:last-child {
            margin-bottom: 0;
        }

        .section-header h5 {
            font-size: 1.1rem;
        }

        .section-header p {
            font-size: 0.8rem !important;
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

        .editor-section {
            padding: 1rem;
        }
    }

    .icon-spacing {
        margin-right: 10px;
    }
</style>
<link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css') ?>">

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
                                    <h1 class="m-0"><strong><?= $data_service['header_service_name_th']  . ' ' . $data_service['language'] ?></strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active"><?= $data_service['header_service_name_th'] . ' ' . $data_service['language'] ?></li>
                                        <li class="breadcrumb-item active">ข้อมูลเซอร์วิส</li>
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
                                <strong>ข้อมูลเซอร์วิส</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-warning" onclick="open_edit()" id="btn_edit">
                                    <i class="fas fa-edit mr-2"></i>แก้ไขข้อมูล
                                </button>
                                <button type="button" class="btn btn-success" onclick="save_edit()" id="btn_save">
                                    <i class="fas fa-save mr-2"></i>บันทึกข้อมูล
                                </button>
                                <button type="button" class="btn btn-danger" onclick="close_edit()" id="btn_cancel">
                                    <i class="fas fa-times mr-2"></i>ยกเลิก
                                </button>
                                <button type="button" class="btn btn-tool" style="color: white;" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="mb-3" id="form_service_content" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                <!-- Partner Selection Section -->
                                <div class="section-header">
                                    <h5>
                                        <i class="fas fa-handshake mr-2"></i>
                                        หมวดพาร์ทเนอร์
                                    </h5>
                                    <p>เลือกประเภทพาร์ทเนอร์ที่เกี่ยวข้องกับเซอร์วิสนี้</p>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="partner">
                                                <i class="fas fa-user-friends"></i>
                                                หมวดพาร์ทเนอร์
                                            </label>
                                            <select id="partner" name="partner" class="form-control">
                                                <option value="0">ไม่มีพาร์ทเนอร์</option>
                                                <option value="1">Animal Clinic</option>
                                                <option value="2">Pet Friendly Hotel</option>
                                                <option value="3">Pet Hotel</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Content Editor Section -->
                                <div class="section-header">
                                    <h5>
                                        <i class="fas fa-edit mr-2"></i>
                                        เนื้อหาเซอร์วิส
                                    </h5>
                                    <p>เขียนรายละเอียดและข้อมูลเกี่ยวกับเซอร์วิสของคุณ</p>
                                </div>
                                <div class="editor-section">
                                    <div class="form-group">
                                        <textarea id="summernote" name="content"></textarea>
                                    </div>
                                </div>
                                <input type="text" id="select_language" name="select_language" hidden>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-warning" onclick="open_edit()" id="btn_edit_form">
                                <i class="fas fa-edit mr-2"></i>แก้ไขข้อมูล
                            </button>
                            <button type="button" class="btn btn-success" onclick="save_edit()" id="btn_save_form">
                                <i class="fas fa-save mr-2"></i>บันทึกข้อมูล
                            </button>
                            <button type="button" class="btn btn-danger" onclick="close_edit()" id="btn_cancel_form">
                                <i class="fas fa-times mr-2"></i>ยกเลิก
                            </button>
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

<script src="<?= base_url('plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- summernote -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 1000, // set the height of the editor
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['font', ['fontsize']],
                ['color', ['color', 'forecolor', 'backcolor']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['insert', ['link', 'picture', 'video', 'table', 'hr']],
                ['view', ['fullscreen', 'codeview', 'help']],
                ['misc', ['undo', 'redo']]
            ]
        });
        <?php if (isset($data_service_content)) : ?>
            $('#summernote').summernote('code', '<?= $data_service_content['content'] ?>');
            $('#select_language').val('<?= $data_service_content['language'] ?>');
            $('#partner').val('<?= $data_service_content['type_partner'] ?>');
        <?php endif; ?>
        close_edit();
    });
</script>
<!-- open edit -->
<script>
    function open_edit() {
        $('#summernote').summernote('enable');
        $('#btn_edit').hide();
        $('#btn_edit_form').hide();
        $('#btn_save').show();
        $('#btn_cancel').show();
        $('#btn_save_form').show();
        $('#btn_cancel_form').show();
        $('#partner').prop('disabled', false);
    }

    function close_edit() {
        $('#summernote').summernote('disable');
        $('#btn_edit').show();
        $('#btn_edit_form').show();
        $('#btn_save').hide();
        $('#btn_cancel').hide();
        $('#btn_save_form').hide();
        $('#btn_cancel_form').hide();
        $('#partner').prop('disabled', true);
    }

    function save_edit() {
        <?php if ($data_service_content != null) : ?>
            action_('dashboard/service_content/update/<?= $data_service_content['id_service_content'] ?>', 'form_service_content');
        <?php else : ?>
            console.log('crate');
            $('#select_language').val('<?= $data_service['language'] ?>');
            action_('dashboard/service_content/create/<?= $data_service['id_service_header'] ?>', 'form_service_content');
        <?php endif; ?>
    }
</script>