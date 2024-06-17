<title>แก้ไขหน้าแรก เมนูติดต่อ</title>

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
                                        <li class="breadcrumb-item active">หน้าหลัก</li>
                                        <li class="breadcrumb-item active">เมนูติดต่อ</li>
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
                                <button type="button" class="btn btn-warning" onclick="open_edit()" id="btn_action"><i class="fa fa-edit"></i> แก้ไขข้อมูล</button>
                                <button type="button" class="btn btn-success" onclick="submit()" id="btn_save"><i class="fa fa-edit"></i> บันทึกข้อมูล</button>
                                <button type="button" class="btn btn-danger" onclick="cancel()" id="btn_cancel"> ยกเลิก</button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: white">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="mb-3" id="form_contact" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                <div class="file-upload">
                                    <h2 class="text-center"><strong>รูปภาพโลโก้</strong></h2>
                                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )" id="btn_addImage">เพิ่มรูปภาพ</button>
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
                                            <button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_opentime">วันเวลาทำการ</label>
                                            <input type="text" class="form-control" id="input_opentime" name="input_opentime" placeholder="กรอก วันเวลาทำการ" value="<?= $data_contact['open_time'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="input_facebook_name">ชื่อ Facebook</label>
                                                    <input type="text" class="form-control" id="input_facebook_name" name="input_facebook_name" placeholder="กรอกชื่อ facebook" value="<?= $data_contact['facebook_name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="input_facebook_link">Link Facebook</label>
                                                    <input type="text" class="form-control" id="input_facebook_link" name="input_facebook_link" placeholder="กรอกลิ้งค์โปรไฟล์ facebook" value="<?= $data_contact['facebook_link'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_email">อีเมล์</label>
                                            <input type="text" class="form-control" id="input_email" name="input_email" placeholder="กรอก อีเมล์" value="<?= $data_contact['email'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="input_instragram_name">ชื่อ Instragram</label>
                                                    <input type="text" class="form-control" id="input_instragram_name" name="input_instragram_name" placeholder="กรอกชื่อ Instragram" value="<?= $data_contact['instragram_name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="input_instragram_link">Link Instragram</label>
                                                    <input type="text" class="form-control" id="input_instragram_link" name="input_instragram_link" placeholder="กรอกลิ้งค์โปรไฟล์ Instragram" value="<?= $data_contact['instragram_link'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_phone_number">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" id="input_phone_number" name="input_phone_number" placeholder="กรอก เบอร์โทรศัพท์" value="<?= $data_contact['phone_number'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="input_line_name">ชื่อ Line</label>
                                                    <input type="text" class="form-control" id="input_line_name" name="input_line_name" placeholder="กรอกชื่อ Line" value="<?= $data_contact['line_name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="input_line_link">Link Line</label>
                                                    <input type="text" class="form-control" id="input_line_link" name="input_line_link" placeholder="กรอกลิ้งค์โปรไฟล์ Line" value="<?= $data_contact['line_link'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_whatsapp">Whatsapp</label>
                                            <input type="text" class="form-control" id="input_whatsapp" name="input_whatsapp" placeholder="กรอกลิ้งค์โปรไฟล์ Whatsapp" value="<?= $data_contact['whatsapp'] ?>">
                                        </div>
                                    </div>
                                </div>
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
<!-- submit function -->
<script>
    function submit() {
        $('#form_contact').submit();
    }

    $("#form_contact").on('submit', function(event) {
        event.preventDefault();
        const value_image = document.getElementById('logo_image').value;
        action_('dashboard/contact/update/<?= $data_contact['id_contact'] ?>/<?= $data_contact['logo_image_path'] ?>', 'form_contact');

    });
</script>