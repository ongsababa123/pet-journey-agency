<title>แก้ไขหน้าแรก เมนูติดต่อ</title>
<style>
    .icon-spacing {
        margin-right: 10px;
        /* สามารถปรับค่าได้ตามต้องการ */
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
                        <div class="card-header">
                            <h3 class="card-title mt-2">
                                <i class="fas fa-chart-pie mr-1"></i>
                                <strong>ข้อมูลเมนูติดต่อ</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary" onclick="open_edit()" id="btn_action"><i class="fa fa-edit"></i> แก้ไขข้อมูล</button>
                                <button type="button" class="btn btn-success" onclick="action()" id="btn_save"><i class="fa fa-edit"></i> บันทึกข้อมูล</button>
                                <button type="button" class="btn btn-danger" onclick="cancel()" id="btn_cancel"> ยกเลิก</button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <!-- <a href="<?= base_url('dist/img/golden_.jpg') ?>" data-toggle="lightbox" data-title="รูปปกน้องหมา" data-gallery="gallery">
                                        <img src="<?= base_url('dist/img/golden_.jpg') ?>" class="img-fluid mb-2" alt="white sample" style="width: 30rem;" />
                                    </a> -->
                                    <div class="file-upload">
                                        <h2 class="text-center"><strong>รูปภาพโลโก้</strong></h2>

                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )" id="btn_addImage">เพิ่มรูปภาพ</button>
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>"ลากและวางไฟล์ หรือเลือกเพิ่มรูปภาพ"</h3>
                                            </div>
                                        </div>
                                        <div class="file-upload-content" id="image_preview">
                                            <img class="file-upload-image" src="<?= base_url('dist/img/golden_.jpg') ?>" id="preview_image" alt="your image" style="max-width: 500px;width: 100%; max-height: none; height: 300px;" />
                                            <div class="image-title-wrap" id="image_title">
                                                <button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title">Uploaded Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">วันเวลาทำการ</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="กรอก วันเวลาทำการ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Facebook</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="กรอกลิ้งค์โปรไฟล์ Facebook">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">อีเมล์</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="กรอก อีเมล์">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Instragram</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="กรอกลิ้งค์โปรไฟล์ Instragram">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">เบอร์โทรศัพท์</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="กรอก เบอร์โทรศัพท์">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Whatsapp</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="กรอกลิ้งค์โปรไฟล์ Whatsapp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
        }else{
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
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>