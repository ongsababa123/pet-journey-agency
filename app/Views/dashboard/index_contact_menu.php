<title>แก้ไขข้อมูล ติดต่อ</title>
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
    .form-control {
        border-radius: 10px;
        border: 2px solid rgba(1, 152, 180, 0.2);
        padding: 0.75rem 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--service-blue);
        box-shadow: 0 0 0 0.2rem rgba(1, 152, 180, 0.25);
    }

    .form-control:disabled {
        background-color: #f8f9fa;
        border-color: rgba(1, 152, 180, 0.1);
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

    /* File Upload Styling */
    .file-upload {
        margin-bottom: 2rem;
    }

    .file-upload h2 {
        color: var(--text-dark);
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

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
        margin-top: 1.5rem;
    }

    .file-upload-content a {
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .file-upload-content a:hover {
        transform: scale(1.02);
    }

    .file-upload-image {
        max-height: 300px;
        max-width: 100%;
        margin: auto;
        border-radius: 12px;
        box-shadow: var(--shadow-medium);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .file-upload-image:hover {
        transform: translate3d(0, -2px, 0);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
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

    /* Responsive - Tablet */
    @media (max-width: 992px) {
        .card-body {
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
            padding: 2rem 1rem;
        }

        .drag-text h3 {
            font-size: 0.95rem;
        }

        .card-tools {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .card-tools .btn {
            flex: 1 1 auto;
            min-width: fit-content;
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
                                        <li class="breadcrumb-item active">ข้อมูล</li>
                                        <li class="breadcrumb-item active">ติดต่อ</li>
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
                                <strong>ข้อมูลเมนูติดต่อ</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-warning" onclick="open_edit()" id="btn_action"><i class="fas fa-edit mr-2"></i>แก้ไขข้อมูล</button>
                                <button type="button" class="btn btn-success" onclick="submit()" id="btn_save"><i class="fas fa-save mr-2"></i>บันทึกข้อมูล</button>
                                <button type="button" class="btn btn-danger" onclick="cancel()" id="btn_cancel"><i class="fas fa-times mr-2"></i>ยกเลิก</button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: white">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="mb-3" id="form_contact" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                <!-- Logo Section -->
                                <div class="mb-4">
                                    <h2 class="text-center mb-3"><i class="fas fa-image mr-2"></i><strong>รูปภาพโลโก้</strong></h2>
                                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )" id="btn_addImage"><i class="fas fa-upload mr-2"></i>เพิ่มรูปภาพ</button>
                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" id="logo_image" name="logo_image" />
                                        <div class="drag-text">
                                            <h3>"ลากและวางไฟล์ หรือเลือกเพิ่มรูปภาพ"</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content" id="image_preview">
                                        <a href="<?= base_url('dist/img/logo/') ?><?= $data_contact['logo_image_path'] ?>" data-toggle="lightbox" data-title="โลโก้" data-gallery="gallery">
                                            <img class="file-upload-image" src="<?= base_url('dist/img/logo/') ?><?= $data_contact['logo_image_path'] ?>" id="preview_image" alt="your image" style="max-width: 500px;width: 100%; max-height: none; height: 300px;" />
                                        </a>
                                        <div class="image-title-wrap" id="image_title">
                                            <button type="button" onclick="removeUpload()" class="remove-image"><i class="fas fa-trash mr-2"></i>ลบรูปภาพ <span class="image-title"></span></button>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4" style="border-top: 2px solid rgba(1, 152, 180, 0.2);">

                                <!-- Operating Hours Section -->
                                <div class="mb-4">
                                    <h4 class="mb-3" style="color: var(--service-blue); font-weight: 700;">
                                        <i class="fas fa-clock mr-2"></i>เวลาทำการ
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_opentime"><i class="fas fa-language"></i>วันเวลาทำการ (ไทย)</label>
                                                <input type="text" class="form-control" id="input_opentime" name="input_opentime" placeholder="เช่น: จันทร์-ศุกร์ 09:00-18:00" value="<?= $data_contact['open_time'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_opentime_en"><i class="fas fa-globe"></i>วันเวลาทำการ (อังกฤษ)</label>
                                                <input type="text" class="form-control" id="input_opentime_en" name="input_opentime_en" placeholder="e.g., Mon-Fri 09:00-18:00" value="<?= $data_contact['open_time_en'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4" style="border-top: 2px solid rgba(1, 152, 180, 0.2);">

                                <!-- Contact Information Section -->
                                <div class="mb-4">
                                    <h4 class="mb-3" style="color: var(--service-blue); font-weight: 700;">
                                        <i class="fas fa-address-book mr-2"></i>ข้อมูลติดต่อ
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_phone_number"><i class="fas fa-phone"></i>เบอร์โทรศัพท์</label>
                                                <input type="text" class="form-control" id="input_phone_number" name="input_phone_number" placeholder="กรอก เบอร์โทรศัพท์" value="<?= $data_contact['phone_number'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_email"><i class="fas fa-envelope"></i>อีเมล์</label>
                                                <input type="email" class="form-control" id="input_email" name="input_email" placeholder="กรอก อีเมล์" value="<?= $data_contact['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_email_receive"><i class="fas fa-inbox"></i>อีเมล์รับข้อมูล</label>
                                                <input type="email" class="form-control" id="input_email_receive" name="input_email_receive" placeholder="กรอก อีเมล์รับข้อมูล" value="<?= $data_contact['email_receive'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4" style="border-top: 2px solid rgba(1, 152, 180, 0.2);">

                                <!-- Social Media Section -->
                                <div class="mb-4">
                                    <h4 class="mb-3" style="color: var(--service-blue); font-weight: 700;">
                                        <i class="fas fa-share-alt mr-2"></i>โซเชียลมีเดีย
                                    </h4>
                                    
                                    <!-- Facebook -->
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <h6 style="color: var(--text-dark); font-weight: 600;">
                                                <i class="fab fa-facebook" style="color: #1877f2;"></i> Facebook
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_facebook_name"><i class="fas fa-user"></i>ชื่อ Facebook</label>
                                                <input type="text" class="form-control" id="input_facebook_name" name="input_facebook_name" placeholder="กรอกชื่อ Facebook" value="<?= $data_contact['facebook_name'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_facebook_link"><i class="fas fa-link"></i>Link Facebook</label>
                                                <input type="url" class="form-control" id="input_facebook_link" name="input_facebook_link" placeholder="https://facebook.com/..." value="<?= $data_contact['facebook_link'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Instagram -->
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <h6 style="color: var(--text-dark); font-weight: 600;">
                                                <i class="fab fa-instagram" style="color: #e4405f;"></i> Instagram
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_instragram_name"><i class="fas fa-user"></i>ชื่อ Instagram</label>
                                                <input type="text" class="form-control" id="input_instragram_name" name="input_instragram_name" placeholder="กรอกชื่อ Instagram" value="<?= $data_contact['instragram_name'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_instragram_link"><i class="fas fa-link"></i>Link Instagram</label>
                                                <input type="url" class="form-control" id="input_instragram_link" name="input_instragram_link" placeholder="https://instagram.com/..." value="<?= $data_contact['instragram_link'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Line -->
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <h6 style="color: var(--text-dark); font-weight: 600;">
                                                <i class="fab fa-line" style="color: #00b900;"></i> Line
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_line_name"><i class="fas fa-user"></i>ชื่อ Line</label>
                                                <input type="text" class="form-control" id="input_line_name" name="input_line_name" placeholder="กรอกชื่อ Line" value="<?= $data_contact['line_name'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_line_link"><i class="fas fa-link"></i>Link Line</label>
                                                <input type="url" class="form-control" id="input_line_link" name="input_line_link" placeholder="https://line.me/..." value="<?= $data_contact['line_link'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- WhatsApp -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 style="color: var(--text-dark); font-weight: 600;">
                                                <i class="fab fa-whatsapp" style="color: #25d366;"></i> WhatsApp
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_whatsapp"><i class="fas fa-link"></i>Link WhatsApp</label>
                                                <input type="url" class="form-control" id="input_whatsapp" name="input_whatsapp" placeholder="https://wa.me/..." value="<?= $data_contact['whatsapp'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="text" id="path_image_old" name="path_image_old" value="<?= $data_contact['logo_image_path'] ?>" hidden>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>

<script>
    $(document).ready(function() {
        cancel();
    });

    function open_edit() {
        $('#btn_addImage').show();
        $('#image_title').show();
        if ($('#preview_image').attr('src') == '') {
            $('#image_preview').hide();
            $('.image-upload-wrap').show();
        } else {
            $('#image_preview').show();
            $('.image-upload-wrap').hide();
        }
        $('#btn_save').show();
        $('#btn_cancel').show();
        $('#btn_action').hide();
        $('input[type="text"]').prop('disabled', false);
    }

    function cancel() {
        $('#btn_addImage').hide();
        $('#image_title').hide();
        $('.image-upload-wrap').hide();
        $('#image_preview').show();
        $('#btn_action').show();
        $('#btn_save').hide();
        $('#btn_cancel').hide();
        $('input[type="text"]').prop('disabled', true);
        $('.file-upload-image').attr('src', '<?= base_url('dist/img/logo/'.$data_contact['logo_image_path']) ?>');
        $('#logo_image').val('');
    }
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
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
        $('#logo_image').val('');
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
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
    // ekkoLightbox animation integration
    $(document).on('click', '[data-toggle="lightbox"]', function() { 
        setTimeout(function(){ 
            const $ekko = $('.ekko-lightbox'); 
            if ($ekko.length) { 
                $ekko.find('.modal-dialog').css({
                    'transform': 'scale(0.95)',
                    'transition': 'transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1)'
                });
                setTimeout(function() {
                    $ekko.find('.modal-dialog').css('transform', 'scale(1)');
                }, 10);
            } 
        }, 10); 
    });
</script>
<!-- submit function -->
<script>
    function submit() {
        $('#form_contact').submit();
    }

    $("#form_contact").on('submit', function(event) {
        event.preventDefault();
        const value_image = document.getElementById('logo_image').value;
        action_('dashboard/contact/update/<?= $data_contact['id_contact'] ?>', 'form_contact');

    });
</script>