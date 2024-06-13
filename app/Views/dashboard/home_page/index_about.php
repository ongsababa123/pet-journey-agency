<link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />

<title>แก้ไขหน้าแรก เกี่ยวกับฉัน</title>
<!-- Content Wrapper. Contains page content -->
<style>
    .icon-spacing {
        margin-right: 10px;
        /* สามารถปรับค่าได้ตามต้องการ */
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
                                        <li class="breadcrumb-item active">เกี่ยวกับฉัน</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 p-5" style="background-color: #ECF0F3; border-radius: 15px;">
                                    <div class="row">
                                        <div class="col-7" style="background-color: #EACC52;">
                                            <div class="p-5 text-center">
                                                <video width="700" controls id="video_about">
                                                    <source src="<?= base_url('dist/video/pet_th.mp4') ?>" type="video/mp4" id="video_about_src">
                                                    Your browser does not support HTML video.
                                                </video>
                                            </div>
                                        </div>
                                        <div class="col-5" style="background-color: #0198B4;">
                                            <p class="text-left pl-5 pt-5" style="color: #EACC52;font-size: 70px" id="header_about">
                                                <strong>เกี่ยวกับเรา</strong>
                                            </p>
                                            <p class="text-left pl-5 mr-5" style="color: white;font-size: 20px" id="content_about">
                                                เราเข้าใจถึงความรักและความผูกพันระหว่างสัตว์เลี้ยงกับ
                                                เจ้าของ ซึ่งในปัจจุบันสัตว์เลี้ยงเสมือนสมาชิกในครอบครัว
                                                ด้วยเหตุนี้ทีมงานของเราจึงก่อตั้ง Pet Journey Agency
                                                ขึ้นมา เพื่อทำให้การนำเข้า-ส่งออกสัตว์เลี้ยงเป็นเรื่องง่าย
                                                และสะดวกมากขึ้น ไม่ว่าจะเป็นการพาน้องหมาน้องแมวไปยัง
                                                ต่างประเทศหรือกลับมาประเทศไทยสำหรับเจ้าของที่ต้องการ
                                                ให้สัตว์เลี้ยงเดินทางไปด้วย</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
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
                                        <th width="30%">วิดีโอ</th>
                                        <th>หัวข้อ</th>
                                        <th>คำอธิบาย</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <video width="300" controls>
                                                <source src="<?= base_url('dist/video/pet_th.mp4') ?>" type="video/mp4" id="video_about_th">
                                                Your browser does not support HTML video.
                                            </video>
                                        </td>
                                        <td id="header_about_th">
                                            เกี่ยวกับเรา
                                        </td>
                                        <td width="50%" id="content_about_th">
                                            เราเข้าใจถึงความรักและความผูกพันระหว่างสัตว์เลี้ยงกับ
                                            เจ้าของ ซึ่งในปัจจุบันสัตว์เลี้ยงเสมือนสมาชิกในครอบครัว
                                            ด้วยเหตุนี้ทีมงานของเราจึงก่อตั้ง Pet Journey Agency
                                            ขึ้นมา เพื่อทำให้การนำเข้า-ส่งออกสัตว์เลี้ยงเป็นเรื่องง่าย
                                            และสะดวกมากขึ้น ไม่ว่าจะเป็นการพาน้องหมาน้องแมวไปยัง
                                            ต่างประเทศหรือกลับมาประเทศไทยสำหรับเจ้าของที่ต้องการ
                                            ให้สัตว์เลี้ยงเดินทางไปด้วย
                                        </td>
                                        <td width="10%">
                                            <a href="javascript:toggleOffcanvas('new_open_th')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล"></i></a>
                                            <a href="javascript:confirm_Alert('text', 'url')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                                            <a href="javascript:confirm_Alert('text', 'url')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <video width="300" controls>
                                                <source src="<?= base_url('dist/video/pet_en.mp4') ?>" type="video/mp4" id="video_about_en">
                                                Your browser does not support HTML video.
                                            </video>
                                        </td>
                                        <td id="header_about_en">
                                            ABOUT US
                                        </td>
                                        <td width="50%" id="content_about_en">
                                            At Pet Journey Agency, we specialize in the professional import and export
                                            of pets. Whether you want to transport your beloved pet abroad or are
                                            looking to welcome a new pet into your family, we have the expertise and
                                            experience to make every step of the process easy and safe.
                                        </td>
                                        <td width="10%">
                                            <a href="javascript:toggleOffcanvas('new_open_en')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล"></i></a>
                                            <a href="javascript:confirm_Alert('text', 'url')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                                            <a href="javascript:confirm_Alert('text', 'url')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>
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
    <div class="card" style="background-color: transparent;">
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
        </div><!-- /.card-header -->
        <div class="card-body" style="padding: 0rem; padding-top: 1.5rem; padding-bottom: 4rem; padding-left: 1.5rem; padding-right: 5rem">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <h3 style="color: white" class="text-center"><strong>อัพโหลดวิดีโอ</strong></h3>
                            <div class="file-upload" style="border-radius: 15px; max-width: 500px;">
                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger('click')" style="background-color: #007BFF; border-radius: 20px;">เพิ่มวิดีโอ</button>
                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept=".mp4" />
                                    <div class="drag-text">
                                        <h3>ลากและวางไฟล์วิดีโอ</h3>
                                    </div>
                                </div>
                                <div class="file-upload-content">
                                    <video class="file-upload-video" autoplay loop controls width="300">
                                        <source src="#" type="video/mp4" />
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="remove-image">ลบวิดีโอ <span class="image-title">อัพโหลดวิดีโอ</span></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-right" style="color: #C2C2C2; margin-right: 180px">*mp4</p>
                        </div>

                        <div class="col-6">
                            <h3 style="color: white" class="text-center"><strong>ข้อความเกี่ยวกับเรา</strong></h3>
                            <div>
                                <textarea class="form-control" id="text_area_content_about" rows="7" maxlength="300" oninput="updateCharCount()"></textarea>
                                <small class="text-right" id="char_count_about" style="color: #C2C2C2">0 / 300 ตัวอักษร</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <button type="button" class="btn btn-success" onclick="saveAbout()">บันทึก</button>
                                <button type="button" class="btn btn-danger" onclick="closeOffcanvas()">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.card-body -->
    </div>
</div>
<div id="offcanvasBackdrop" class="offcanvas-backdrop"></div>

<!-- table data -->
<script>
    $(function() {
        $('#example2').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
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
<!-- switch language -->
<script>
    var lang = 'th';

    function switchLanguage() {
        if (lang == 'th') {
            lang = 'en';
            header_about = document.getElementById("header_about_en").innerText;
            content_about = document.getElementById("content_about_en").innerText;
            video_about = document.getElementById("video_about_en");
        } else {
            lang = 'th';
            header_about = document.getElementById("header_about_th").innerText;
            content_about = document.getElementById("content_about_th").innerText;
            video_about = document.getElementById("video_about_th");

        }
        document.getElementById("header_about").innerHTML = "<strong>" + header_about + "</strong>";
        document.getElementById("content_about").innerText = content_about;
        document.getElementById("video_about_src").src = video_about.src;
        document.getElementById("video_about").load();
    }
</script>
<!-- offcanvas -->
<script>
    function toggleOffcanvas(action) {
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.toggle('show');
        offcanvas.classList.remove('half');
        offcanvasBackdrop.classList.toggle('show');
        if (action === 'new_open_en') {
            document.getElementById('text_area_content_about').value = document.getElementById('content_about_en').innerText;
            lang = 'th';
            switchLanguage();
            removeUpload();
        } else if (action === 'new_open_th') {
            document.getElementById('text_area_content_about').value = document.getElementById('content_about_th').innerText;
            lang = 'en';
            switchLanguage();
            removeUpload();
        }
        document.getElementById('halftoggleoffcanvas').onclick = function() {
            halfOffcanvas();
        };
        updateCharCount();
    }

    function closeOffcanvas() {
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.remove('show');
        offcanvas.classList.remove('half');
        offcanvasBackdrop.classList.remove('show');
        lang = (lang === 'en') ? 'th' : 'en';

        switchLanguage();
    }

    function halfOffcanvas() {
        console.log("test");
        closeOffcanvas();
        offcanvas.classList.toggle('half');
        document.getElementById('halftoggleoffcanvas').onclick = function() {
            toggleOffcanvas();
        };
    }
</script>
<!-- script upload video -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();
                $('.file-upload-video').attr('src', e.target.result);
                $('.file-upload-content').show();
                $('.image-title').html(input.files[0].name);
                document.getElementById("video_about_src").src = e.target.result;
                document.getElementById("video_about").load();
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

<!-- function check char-->
<script>
    function updateCharCount() {
        var textarea = document.getElementById('text_area_content_about');
        var charCount = textarea.value.length;
        document.getElementById('char_count_about').textContent = charCount + ' / 300 ตัวอักษร';
        document.getElementById("content_about").innerText = textarea.value;

    }
</script>