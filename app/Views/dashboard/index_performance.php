<title>แก้ไขข้อมูล ผลการทำงานของทีม</title>
<style>
    .layout-box {
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        background-color: #ccc;
        cursor: pointer;
        /* Adds pointer cursor on hover */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Adds an optical effect (optional) */
    }

    .layout-box:hover {
        transform: scale(1.02);
        /* Optional: Scale up the box on hover */
    }

    .layout-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(7, 200px);
        gap: 10px;
        margin-top: 50px;
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
        height: 530px;
        position: fixed;
        bottom: -530px;
        left: 0;
        background-color: white;
        z-index: 1051;
        transition: bottom 0.3s ease-in-out;
        background-color: #23456B;
    }

    .offcanvas.show {
        bottom: 0;
    }

    .offcanvas.half {
        bottom: -52%;
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
                        <div class="card-header" style="border-bottom: none">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0"><strong>จัดการหน้าเพจ</strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active">ข้อมูล</li>
                                        <li class="breadcrumb-item active">ผลการทำงานของทีม</li>
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
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: white">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="mb-3" id="form_performance" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                <div class="layout-grid">
                                    <div class="layout-box box1" style="background-color: #0198B4" onclick="toggleOffcanvas('new_open')">
                                        <div class="box-title">ผลการทำงาน</div>
                                    </div>
                                    <div class="layout-box box2" style="background-color: #0198B4"></div>
                                    <div class="layout-box box3" style="background-color: #0198B4"></div>
                                    <div class="layout-box box4" style="background-color: #0198B4"></div>
                                    <div class="layout-box box5" style="background-color: #0198B4"></div>
                                    <div class="layout-box box6" style="background-color: #0198B4"></div>
                                    <div class="layout-box box7" style="background-color: #0198B4"></div>
                                    <div class="layout-box box8" style="background-color: #0198B4"></div>
                                    <div class="layout-box box9" style="background-color: #0198B4"></div>
                                    <div class="layout-box box10" style="background-color: #0198B4"></div>
                                    <div class="layout-box box11" style="background-color: #0198B4"></div>
                                    <div class="layout-box box12" style="background-color: #0198B4"></div>
                                    <div class="layout-box box13" style="background-color: #0198B4"></div>
                                    <div class="layout-box box14" style="background-color: #0198B4"></div>
                                    <div class="layout-box box15" style="background-color: #0198B4"></div>
                                    <div class="layout-box box16" style="background-color: #0198B4"></div>
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

<div id="offcanvas" class="offcanvas">
    <div class="card" style="background-color: transparent;box-shadow: none">
        <div class="card-header" style="background-color: #0198B4">
            <h3 class="card-title" style="color: white"><strong>เกี่ยวกับฉัน</strong></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" onclick="halfOffcanvas()" style="background-color: white;color: #0198B4" id="halftoggleoffcanvas">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" onclick="closeOffcanvas()" style="background-color: white;color: #0198B4">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body" width="100%">
            <form class="mb-3" id="form_performance" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6 text-center">
                        <div class="form-group clearfix">
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r2" checked id="radioDanger1" onchange="check_radio()">
                                <label for="radioDanger1" style="color: white">
                                    แบบรูปภาพ
                                </label>
                            </div>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r2" id="radioDanger2" onchange="check_radio()">
                                <label for="radioDanger2" style="color: white">
                                    แบบข้อความ
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="file-upload" id="form_image">
                                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">เพิ่มรูปภาพ</button>
                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" id="input_image" name="input_image" />
                                        <div class="drag-text">
                                            <h3>"ลากและวางไฟล์ หรือเลือกเพิ่มรูปภาพ"</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" alt="your image" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="form_text">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="favcolor" style="color: white">ตัวเลือกสีตัวหนังสือ</label>
                                            <input type="color" id="favcolor" name="favcolor">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="detail" style="color: white">ตัวเลือกสีพื้นหลัง</label>
                                            <input type="color" id="favcolor" name="favcolor">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="detail_th" style="color: white">ข้อความ ภาษาไทย</label>
                                    <input type="text" class="form-control" id="detail_th" name="detail_th" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="color: white">
                                    <label for="detail_en">ข้อความ ภาษาอังกฤษ</label>
                                    <input type="text" class="form-control" id="detail_en" name="detail_en" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">บันทึก</button>
                            <button type="button" class="btn btn-danger" onclick="closeOffcanvas()">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="offcanvasBackdrop" class="offcanvas-backdrop"></div>

<!-- modal -->
<script>
    var check_action = '';

    function load_modal(action, data_encode) {
        $('#input_image').val('');
        $('#name_partner').val('');
        removeUpload();
        check_radio()
        switch (action) {
            case 'Create':
                $("#modal-title").text('เพิ่มพาร์ทเนอร์');
                $('#url_route').val('dashboard/partner/create/' + data_encode);
                check_action = 'Create';
                break;
            case 'Update':
                $("#modal-title").text('แก้ไขพาร์ทเนอร์');
                const data = JSON.parse(decodeURIComponent(data_encode));
                $('#name_partner').val(data.name_partner);
                $('#url_route').val('dashboard/partner/update/' + data.id_partner + '/' + data.logo_partner_path);
                check_action = 'Update';
                break;
            default:
                break;
        }
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
        $('#input_image').val('');

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
    function check_radio() {
        if (document.getElementById("radioDanger1").checked) {
            $('#form_text').hide();
            $('#form_image').show();
        } else if (document.getElementById("radioDanger2").checked) {
            $('#form_text').show();
            $('#form_image').hide();
        }
    }
</script>

<!-- offcanvas -->
<script>
    function toggleOffcanvas(action) {
        console.log(action);
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.remove('half');

        offcanvas.classList.toggle('show');
        offcanvasBackdrop.classList.toggle('show');
        if (action == 'new_open') {
            if (document.getElementById("radioDanger1").checked) {
                $('.image-upload-wrap').hide();
                $('.file-upload-image').attr('src', '<?= base_url('dist/img/performance/avatar.png') ?>');
                $('.file-upload-content').show();
            } else {

            }
        }
        check_radio();
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
    }

    function halfOffcanvas() {
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.remove('show');
        offcanvasBackdrop.classList.remove('show');

        offcanvas.classList.toggle('half');
        document.getElementById('halftoggleoffcanvas').onclick = function() {
            toggleOffcanvas();
        };
    }
</script>