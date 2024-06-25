<title>แก้ไขข้อมูล ผลการทำงานของทีม</title>
<style>
    .layout-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(7, 200px);
        gap: 10px;
        margin-top: 50px;
    }

    .layout-box {
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        background-color: #ccc;
        position: relative;
    }

    .layout-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .layout-box .text-content {
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .layout-box .text-content-img {
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        display: flex;
        justify-content: space-around;
        align-items: end;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(27, 59, 93, 0.75) 100%);
        color: #ffffff;
    }

    .layout-box:hover {
        transform: scale(1.02);
        /* Optional: Scale up the box on hover */
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
        bottom: -44%;
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

<style>
    .form-control:disabled,
    .form-control[readonly] {
        background-color: #94979b;
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
                                <button type="button" class="btn btn-primary" onclick="switchLanguage()" id="btn_switch_lang">เปลี่ยนภาษาตัวอย่าง แสดงผลข้อมูล (ภาษาไทย)</button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: white">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="layout-grid" id="layout-grid">
                                <div class="layout-box box1" id="box-1" onclick="toggleOffcanvas('new_open', 'box-1')"></div>
                                <div class="layout-box box2" id="box-2" onclick="toggleOffcanvas('new_open', 'box-2')"></div>
                                <div class="layout-box box3" id="box-3" onclick="toggleOffcanvas('new_open', 'box-3')"></div>
                                <div class="layout-box box4" id="box-4" onclick="toggleOffcanvas('new_open', 'box-4')"></div>
                                <div class="layout-box box5" id="box-5" onclick="toggleOffcanvas('new_open', 'box-5')"></div>
                                <div class="layout-box box6" id="box-6" onclick="toggleOffcanvas('new_open', 'box-6')"></div>
                                <div class="layout-box box7" id="box-7" onclick="toggleOffcanvas('new_open', 'box-7')"></div>
                                <div class="layout-box box8" id="box-8" onclick="toggleOffcanvas('new_open', 'box-8')"></div>
                                <div class="layout-box box9" id="box-9" onclick="toggleOffcanvas('new_open', 'box-9')"></div>
                                <div class="layout-box box10" id="box-10" onclick="toggleOffcanvas('new_open', 'box-10')"></div>
                                <div class="layout-box box11" id="box-11" onclick="toggleOffcanvas('new_open', 'box-11')"></div>
                                <div class="layout-box box12" id="box-12" onclick="toggleOffcanvas('new_open', 'box-12')"></div>
                                <div class="layout-box box13" id="box-13" onclick="toggleOffcanvas('new_open', 'box-13')"></div>
                                <div class="layout-box box14" id="box-14" onclick="toggleOffcanvas('new_open', 'box-14')"></div>
                                <div class="layout-box box15" id="box-15" onclick="toggleOffcanvas('new_open', 'box-15')"></div>
                            </div>
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
                <button type="button" class="btn btn-primary" onclick="switchLanguage_canvas()" id="btn_canvas_switch_lang">เปลี่ยนภาษาตัวอย่าง การกรอกข้อมูล (ภาษาไทย)</button>
                <button type="button" class="btn btn-tool" onclick="halfOffcanvas()" style="background-color: white;color: #0198B4" id="halftoggleoffcanvas">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" onclick="closeOffcanvas()" style="background-color: white;color: #0198B4">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="padding: 0rem; padding-top: 1.5rem; padding-bottom: 4rem; padding-left: 1.5rem; padding-right: 5rem">
            <div class="row">
                <div class="col-12">
                    <form class="mb-3" id="form_performance" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="form-group clearfix">
                                    <div class="icheck-success d-inline">
                                        <input type="radio" name="r2" checked id="radioDanger1" onchange="check_radio(true)" value="1">
                                        <label for="radioDanger1" style="color: white">
                                            แบบข้อความและรูปภาพ
                                        </label>
                                    </div>
                                    <div class="icheck-success d-inline">
                                        <input type="radio" name="r2" id="radioDanger2" onchange="check_radio(true)" value="2">
                                        <label for="radioDanger2" style="color: white">
                                            แบบรูปภาพอย่างเดียว
                                        </label>
                                    </div>
                                    <div class="icheck-success d-inline">
                                        <input type="radio" name="r2" id="radioDanger3" onchange="check_radio(true)" value="3">
                                        <label for="radioDanger3" style="color: white">
                                            แบบข้อความอย่างเดียว
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="file-upload" id="form_image" style="border-radius: 15px; max-width: 500px;">
                                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">เพิ่มรูปภาพ</button>
                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" id="input_image" name="input_image" />
                                        <div class="drag-text">
                                            <h3>"ลากและวางไฟล์ หรือเลือกเพิ่มรูปภาพ"</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" alt="your image" id="input_image_img" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="form_text">
                                    <div class="col-sm-6 text-center">
                                        <div class="form-group">
                                            <label for="color_text" style="color: white">ตัวเลือกสีตัวหนังสือ</label>
                                            <input type="color" id="color_text" name="color_text" oninput="onchange_color(this)">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="color_bg" style="color: white">ตัวเลือกสีพื้นหลัง</label>
                                            <input type="color" id="color_bg" name="color_bg" oninput="onchange_color(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="detail_th" style="color: white">ข้อความ ภาษาไทย</label>
                                            <input type="text" class="form-control" id="detail_th" name="detail_th" oninput="onchange_text(this)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group" style="color: white">
                                            <label for="detail_en">ข้อความ ภาษาอังกฤษ</label>
                                            <input type="text" class="form-control" id="detail_en" name="detail_en" oninput="onchange_text(this)">
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
        </div><!-- /.card-body -->
    </div>
</div>
<div id="offcanvasBackdrop" class="offcanvas-backdrop"></div>

<!-- script upload image -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.image-upload-wrap').hide();
                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();
                $('#' + this_box + '-img').attr('src', e.target.result);
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
        $('#' + this_box + '-img').attr('src', '<?= base_url('dist/img/gray-color.png') ?>');
        $('#input_image_img').attr('src', null);
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
    function check_radio(focus_radio, type_show) {
        var text_box = document.getElementById(this_box + '-text');
        var image_box = document.getElementById(this_box + '-img');
        text_box.classList.remove('text-content');
        text_box.classList.remove('text-content-img');
        text_box.style.cssText = '';
        var id = this_box.split('-');
        var foundItem = data_performance_team.find(function(item) {
            return item.id_team === id[1];
        });
        if (($('#radioDanger1').prop('checked') && focus_radio) || type_show == '1') {
            // Option 1: Text and Image
            $('#form_text').hide();
            $('#form_image').show();
            $('input[type="text"]').prop('disabled', false);
            text_box.classList.toggle('text-content-img');
            image_box.style.display = 'block';
            $('#' + this_box + '-img').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
            $('.image-upload-wrap').hide();
            $('.file-upload-image').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
            $('.file-upload-content').show();
        } else if (($('#radioDanger2').prop('checked') && focus_radio) || type_show == '2') {
            // Option 2: Image Only
            $('#form_text').hide();
            $('#form_image').show();
            $('input[type="text"]').prop('disabled', true);
            text_box.style.display = 'none';
            image_box.style.display = 'block';
            $('#' + this_box + '-img').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
            $('.image-upload-wrap').hide();
            $('.file-upload-image').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
            $('.file-upload-content').show();
        } else if (($('#radioDanger3').prop('checked') && focus_radio) || type_show == '3') {
            // Option 3: Text Only
            $('#form_text').show();
            $('#form_image').hide();
            $('input[type="text"]').prop('disabled', false);
            text_box.classList.toggle('text-content');
            text_box.style.color = foundItem.color_text;
            text_box.style.backgroundColor = foundItem.color_bg;
            image_box.style.display = 'none';
        }
    }
</script>

<!-- offcanvas -->
<script>
    function toggleOffcanvas(action, id_box) {

        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.remove('half');

        offcanvas.classList.toggle('show');
        offcanvasBackdrop.classList.toggle('show');
        if (action == 'new_open') {

            this_box = id_box;
            var id = id_box.split('-');
            var foundItem = data_performance_team.find(function(item) {
                return item.id_team === id[1];
            });

            $('#detail_th').val(foundItem.detail_th);
            $('#detail_en').val(foundItem.detail_en);
            $('#color_text').val(foundItem.color_text);
            $('#color_bg').val(foundItem.color_bg);
            $('input[name="r2"]').filter('[value="' + foundItem.type_show + '"]').prop('checked', true);

            if (foundItem.type_show == 1 || foundItem.type_show == 2) {
                $('#' + id_box + '-img').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
                $('.image-upload-wrap').hide();
                $('.file-upload-image').attr('src', '<?= base_url('dist/img/performance/') ?>' + foundItem.image_path);
                $('.file-upload-content').show();
            } else {
                $('.image-upload-wrap').show();
            }
        }
        check_radio(true);
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

        var id = this_box.split('-');
        var foundItem = data_performance_team.find(function(item) {
            return item.id_team === id[1];
        });
        check_radio(false, foundItem.type_show);
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

<!-- change -->
<script>
    function onchange_text(input) {
        if (language_canvas == 'th' && input.id == 'detail_th' || language_canvas == 'en' && input.id == 'detail_en') {
            $('#' + this_box + '-text').text(input.value);
        }
    }

    function onchange_color(input) {
        if (input.id == 'color_text') {
            $('#' + this_box + '-text').css('color', input.value);
        }
        if (input.id == 'color_bg') {
            $('#' + this_box + '-text').css('background-color', input.value);
        }
    }

    function switchLanguage() {
        if (language == 'th') {
            language = 'en';
            language_canvas = 'en';
            $('#btn_switch_lang').text('เปลี่ยนภาษาตัวอย่าง แสดงผลข้อมูล (ภาษาอังกฤษ)');
        } else if (language == 'en') {
            language = 'th';
            language_canvas = 'th';
            $('#btn_switch_lang').text('เปลี่ยนภาษาตัวอย่าง แสดงผลข้อมูล (ภาษาไทย)');
        }
        view_the_performance(language);
    }

    function switchLanguage_canvas() {
        const detail_th = document.getElementById('detail_th');
        const detail_en = document.getElementById('detail_en');
        if (language_canvas == 'th') {
            language_canvas = 'en';
            $('#' + this_box + '-text').text(detail_en.value);
            $('#btn_canvas_switch_lang').text('เปลี่ยนภาษาตัวอย่าง การกรอกข้อมูล (ภาษาอังกฤษ)');
        } else if (language_canvas == 'en') {
            language_canvas = 'th';
            $('#' + this_box + '-text').text(detail_th.value);
            $('#btn_canvas_switch_lang').text('เปลี่ยนภาษาตัวอย่าง การกรอกข้อมูล (ภาษาไทย)');
        }
    }
    var language = 'th';
    var language_canvas = 'th';
    var this_box = '';
    $(document).ready(function() {
        view_the_performance(language);
    })
</script>

<!-- box -->
<script>
    var data_performance_team = <?php echo json_encode($data_performance_team); ?>;

    function view_the_performance(language) {

        data_performance_team.forEach(item => {
            const box = document.getElementById(`box-${item.id_team}`);
            $('#box-' + item.id_team).empty();

            const img = document.createElement('img');
            if (item.image_path) {
                img.src = '<?= base_url('dist/img/performance/') ?>' + item.image_path;
                img.id = 'box-' + item.id_team + '-img';
            } else {
                img.src = '<?= base_url('dist/img/gray-color.png') ?>';
                img.id = 'box-' + item.id_team + '-img';
                img.style.display = 'none';
            }

            const text = document.createElement('div');
            text.id = 'box-' + item.id_team + '-text';
            if (['th', 'en'].includes(language)) {
                const detailKey = `detail_${language}`;
                if (item[detailKey]) {
                    text.textContent = `“${item[detailKey]}”`;
                } else {
                    text.textContent = '“”';
                }
            }


            if (item.type_show == '1') {
                img.style.display = 'block';
                box.classList.add('has-image');
                text.classList.add('text-content-img');
            } else if (item.type_show == '2') {
                img.style.display = 'block';
                text.style.display = 'none';
                text.classList.add('text-content');
            } else if (item.type_show == '3') {
                img.style.display = 'none';
                text.classList.add('text-content');
                text.style.color = item.color_text;
                text.style.backgroundColor = item.color_bg;
            }

            box.appendChild(img);
            box.appendChild(text);

        });
    }
</script>

<!-- form submit -->
<script>
    $("#form_performance").on('submit', function(event) {
        event.preventDefault();
        const value_image = document.getElementById('input_image').value;
        const detail_th = document.getElementById('detail_th').value;
        const detail_en = document.getElementById('detail_en').value;
        const selectedRadio = document.querySelector('input[name="r2"]:checked');
        const input_image_img = document.getElementById('input_image_img');
        var id = this_box.split('-');
        var foundItem = data_performance_team.find(function(item) {
            return item.id_team === id[1];
        });

        const urlRouteInput = 'dashboard/performanceteam/update/' + foundItem.id_team + '/' + foundItem.image_path;

        if (selectedRadio.value == '1' || selectedRadio.value == '2') {
            console.log('value_image', value_image, 'input_image_img.src', input_image_img.src);
            if ((!value_image && !input_image_img.src) || (!input_image_img.src)) {
                Swal.fire({
                    title: 'กรุณาเลือกรูปภาพ...',
                    icon: 'warning',
                    showConfirmButton: true,
                });
            } else {
                action_(urlRouteInput, 'form_performance');
            }
        } else if (selectedRadio.value == '3') {
            if (!detail_th || !detail_en) {
                Swal.fire({
                    title: 'กรุณากรอกข้อมูล...',
                    icon: 'warning',
                    showConfirmButton: true,
                });
            } else {
                action_(urlRouteInput, 'form_performance');
            }
        }
    });
</script>