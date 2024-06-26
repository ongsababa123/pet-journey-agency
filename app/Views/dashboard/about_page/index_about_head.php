<title>แก้ไขหน้าเกี่ยวกับเรา ข้อมูลเกี่ยวกับเรา</title>
<!-- offcanvas -->
<style>
    .offcanvas {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 100%;
        left: 0;
        background-color: white;
        z-index: 1051;
        transition: top 0.3s ease-in-out;
        background-color: #23456B;
    }

    .offcanvas.show {
        top: 0;
    }

    .offcanvas.half {
        top: 48%;
    }

    .offcanvas.closehalf {
        top: 95%;
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
            <form class="mb-3" id="form_about" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="color: white" class="text-center"><strong>แก้ไขเกี่ยวกับเรา</strong></h3>
                        <textarea id="summernote" name="text_area_content_about"></textarea>
                    </div>
                    <div class="col-6">
                        <h3 style="color: white" class="text-center"><strong>อัพโหลดภาพ</strong></h3>
                        <div class="file-upload">
                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">เพิ่มรูปภาพ</button>
                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" id="upload_image" name="upload_image" />
                                <div class="drag-text">
                                    <h3>"ลากและวางไฟล์ หรือเลือกเพิ่มรูปภาพ"</h3>
                                </div>
                            </div>
                            <div class="file-upload-content">
                                <img class="file-upload-image" src="#" alt="your image" />
                                <div class="image-title-wrap">
                                    <button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title">Uploaded Image</span></button>
                                </div>
                            </div>
                        </div>
                        <p class="text-right" style="color: #C2C2C2; margin-right: 180px">*image</p>
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
        if (lang == 'th') {
            lang = 'en';
            document.getElementById("header_about").innerHTML = '<strong>เกี่ยวกับ <span style="color: #FAD046;">เรา</span></strong>';
            document.getElementById("content_about").innerHTML = <?= json_encode($about_page['1']['detail_page']); ?>;
            document.getElementById("image_about_img").src = '<?= base_url('dist/img/about-team/' . $about_page['1']['image_page_path']) ?>';
            document.getElementById("image_about").href = '<?= base_url('dist/img/about-team/' . $about_page['1']['image_page_path']) ?>';

        } else {
            lang = 'th';
            document.getElementById("header_about").innerHTML = '<strong>เกี่ยวกับ <span style="color: #FAD046;">เรา</span></strong>';
            document.getElementById("content_about").innerHTML = <?= json_encode($about_page['0']['detail_page']); ?>;
            document.getElementById("image_about_img").src = '<?= base_url('dist/img/about-team/' . $about_page['0']['image_page_path']) ?>';
            document.getElementById("image_about").href = '<?= base_url('dist/img/about-team/' . $about_page['0']['image_page_path']) ?>';
        }
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
<!-- form submit -->
<script>
    $("#form_about").on('submit', function(event) {
        event.preventDefault();
        var id_about_page = '';
        var image_page_path = '';
        if (lang == 'en') {
            id_about_page = <?= $about_page['1']['id_about_page'] ?>;
            image_page_path = '<?= $about_page['1']['image_page_path'] ?>';
        } else if (lang == 'th') {
            id_about_page = <?= $about_page['0']['id_about_page'] ?>;
            image_page_path = '<?= $about_page['0']['image_page_path'] ?>';
        }
        action_('dashboard/aboutpage/abouthead/update/' + id_about_page + '/' + image_page_path, 'form_about');
    });
</script>