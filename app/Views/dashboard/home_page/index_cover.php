<title>จัดการหน้าปก - PetEX</title>
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
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .card:hover {
        box-shadow: var(--shadow-medium);
        transform: translateY(-3px);
    }

    .card-header {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%) !important;
        border: none;
        padding: 1.5rem;
        border-radius: 20px 20px 0 0 !important;
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
        background: rgba(255, 255, 255, 0.8);
        border-radius: 12px;
        padding: 0.75rem 1.5rem;
        box-shadow: var(--shadow-soft);
        backdrop-filter: blur(10px);
    }

    .breadcrumb-item a {
        color: var(--white) !important;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: var(--accent-orange) !important;
    }

    .breadcrumb-item.active {
        color: rgba(255, 255, 255, 0.8) !important;
        font-weight: 600;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.6) !important;
    }

    /* Carousel Container */
    .carousel-container {
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.1) 0%, rgba(243, 156, 18, 0.1) 100%);
        border-radius: 20px !important;
        padding: 2rem;
        box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.05);
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
        transition: all 0.3s ease;
    }

    .table tbody tr:hover {
        background: rgba(78, 205, 196, 0.05);
        transform: scale(1.01);
        box-shadow: 0 2px 8px rgba(78, 205, 196, 0.1);
    }

    .table tbody td {
        vertical-align: middle;
        padding: 1rem;
        border-color: rgba(78, 205, 196, 0.1);
    }

    /* Badges */
    .badge {
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.85rem;
        letter-spacing: 0.3px;
    }

    .badge.bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        box-shadow: 0 2px 8px rgba(16, 185, 129, 0.3);
    }

    .badge.bg-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
        box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
    }

    /* Buttons */
    .btn {
        border-radius: 10px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        box-shadow: var(--shadow-soft);
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        color: var(--white);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--teal-primary) 100%);
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
    }

    .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: var(--white);
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #059669 0%, #047857 100%);
        transform: translateY(-2px);
    }

    .btn-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: var(--white);
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        transform: translateY(-2px);
    }

    .btn-tool {
        color: var(--white) !important;
        transition: all 0.3s ease;
    }

    .btn-tool:hover {
        transform: scale(1.1) rotate(90deg);
    }

    /* Form Controls */
    .form-control,
    .select2 {
        border-radius: 10px;
        border: 2px solid rgba(78, 205, 196, 0.2);
        padding: 0rem 1rem;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .form-control:focus {
        border-color: var(--teal-primary);
        box-shadow: 0 0 0 3px rgba(78, 205, 196, 0.1);
    }

    .form-group label {
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    /* Action Icons */
    .icon-spacing {
        margin-right: 10px;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .icon-spacing:hover {
        transform: scale(1.2);
    }

    .fa-edit {
        color: var(--teal-primary);
    }

    .fa-edit:hover {
        color: var(--accent-orange);
    }

    .fa-exchange-alt {
        color: var(--accent-orange);
    }

    .fa-exchange-alt:hover {
        color: var(--teal-primary);
    }

    .fa-trash {
        color: #ef4444;
    }

    .fa-trash:hover {
        color: #dc2626;
    }

    /* Modal Styling */
    .modal-content {
        border-radius: 20px;
        border: none;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .modal-header {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        border-radius: 20px 20px 0 0;
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
    }

    .modal-footer {
        border-top: 1px solid rgba(78, 205, 196, 0.1);
        padding: 1.5rem 2rem;
    }

    /* Image Preview */
    .table img {
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .table img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    /* Overlay */
    .overlay {
        background: rgba(78, 205, 196, 0.9) !important;
    }

    .overlay i {
        color: var(--white);
    }

    /* DataTables Search */
    .dataTables_filter input {
        border-radius: 10px;
        border: 2px solid rgba(78, 205, 196, 0.2);
        padding: 0.5rem 1rem;
    }

    /* File Upload Styling */
    .file-upload {
        margin: 0 auto;
    }

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
        transition: all 0.3s ease;
        box-shadow: var(--shadow-soft);
    }

    .file-upload-btn:hover {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--teal-primary) 100%);
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
    }

    .file-upload-btn:active {
        transform: translateY(0);
    }

    .file-upload-content {
        display: none;
        text-align: center;
        margin-top: 1.5rem;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 1.5rem;
        border: 3px dashed rgba(78, 205, 196, 0.3);
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%);
        position: relative;
        border-radius: 15px;
        padding: 3rem 2rem;
        transition: all 0.3s ease;
    }

    .image-upload-wrap:hover {
        border-color: var(--teal-primary);
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.1) 0%, rgba(243, 156, 18, 0.1) 100%);
        transform: scale(1.01);
    }

    .image-dropping {
        border-color: var(--accent-orange) !important;
        background: linear-gradient(135deg, rgba(243, 156, 18, 0.15) 0%, rgba(78, 205, 196, 0.15) 100%) !important;
        transform: scale(1.02);
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 600;
        color: var(--text-dark);
        font-size: 1.1rem;
        margin: 0;
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .drag-text i {
        color: var(--teal-primary);
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .file-upload-image {
        max-height: 300px;
        max-width: 100%;
        margin: auto;
        padding: 1rem;
        border-radius: 15px;
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
        transition: all 0.3s ease;
        cursor: pointer;
        box-shadow: var(--shadow-soft);
    }

    .remove-image:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
    }

    .remove-image span {
        display: none;
    }

    .image-title-wrap {
        padding: 0 1rem;
        margin: 0 auto;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .card-body {
            padding: 1rem;
        }
        
        .btn {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }

        .image-upload-wrap {
            padding: 2rem 1rem;
        }

        .drag-text h3 {
            font-size: 0.95rem;
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
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h1 class="m-0"><i class="fas fa-images mr-2"></i>จัดการหน้าเพจ</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right mb-0">
                                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/dashboardhome') ?>"><i class="fas fa-home mr-1"></i>หน้าหลัก</a></li>
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active">หน้าปก</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 carousel-container">
                                    <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel" style="width: 100%;">
                                        <ol class="carousel-indicators" id="carousel-indicators">
                                        </ol>
                                        <div class="carousel-inner" style="height: 500px" id="carousel" name="carousel">
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <div class="row">
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-images mr-2"></i>ข้อมูลหน้าปก
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg" title="เพิ่มหน้าปก" onclick="load_modal('Create', 'data')">
                                    <i class="fas fa-plus mr-1"></i>เพิ่มหน้าปก
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
                                        <select id="select_status" name="select_status" class="form-control select2" style="width: 100%;" onchange="getdata_table_1()">
                                            <option value="2" selected>ทั้งหมด</option>
                                            <option value="1">เปิดใช้งาน</option>
                                            <option value="0">ปิดใช้งาน</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="select_lang">ประเภทภาษา</label>
                                        <select id="select_lang" name="select_lang" class="form-control select2" style="width: 100%;" onchange="getdata_table_1()">
                                            <option value="all" selected>ทั้งหมด</option>
                                            <option value="th">ไทย</option>
                                            <option value="en">อังกฤษ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-8">
                                </div>
                            </div>
                            <hr style="border-color: rgba(78, 205, 196, 0.2);">
                            <table id="example2" class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th><i class="fas fa-hashtag mr-1"></i>ลำดับ</th>
                                        <th><i class="fas fa-image mr-1"></i>รูปภาพ</th>
                                        <th><i class="fas fa-file-signature mr-1"></i>ชื่อหน้าปก</th>
                                        <th><i class="fas fa-language mr-1"></i>ภาษา</th>
                                        <th><i class="fas fa-toggle-on mr-1"></i>สถานะ</th>
                                        <th><i class="fas fa-cogs mr-1"></i>จัดการ</th>
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
                <h4 class="modal-title" id="modal-title"><i class="fas fa-images mr-2"></i></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="mb-3" id="form_cover" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="modal-body">
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
                        <p class="text-right text-gray text-sm mt-2">* ขนาดรูปภาพแนะนำ 1400 x 400 px</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName_cover"><i class="fas fa-file-signature mr-1"></i>ชื่อหน้าปก</label>
                                <input type="text" id="inputName_cover" name="inputName_cover" class="form-control" placeholder="กรอกชื่อหน้าปก" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="select_language"><i class="fas fa-language mr-1"></i>ประเภทภาษา</label>
                                <select class="form-control" id="select_language" name="select_language" required>
                                    <option value="th">🇹🇭 ไทย</option>
                                    <option value="en">🇬🇧 English</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" id="url_route" name="url_route" hidden>
                <input type="text" id="path_image_old" name="path_image_old" hidden>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fas fa-times mr-1"></i>ยกเลิก
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save mr-1"></i>บันทึกข้อมูล
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
        $('#inputName_cover').val('');
        $('#select_language').val('th');
        removeUpload();
        switch (action) {
            case 'Create':
                $("#modal-title").html('<i class="fas fa-plus-circle mr-2"></i>เพิ่มหน้าปก');
                $('#url_route').val('dashboard/homepage/cover/create');
                check_action = 'Create';
                break;
            case 'Update':
                $("#modal-title").html('<i class="fas fa-edit mr-2"></i>แก้ไขหน้าปก');
                const data = JSON.parse(decodeURIComponent(data_encode));
                $('#inputName_cover').val(data.name_image);
                $('#select_language').val(data.language);
                $('#url_route').val('dashboard/homepage/cover/update/' + data.id_cover);
                $('#path_image_old').val(data.path_image);
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
        getdata_table_1();
    });

    function getdata_table_1() {
        var select_status = document.getElementById('select_status');
        var select_lang = document.getElementById('select_lang');
        if ($.fn.DataTable.isDataTable('#example2')) {
            $('#example2').DataTable().destroy();
        }
        $('#overlay_1').show();
        $('#example2').DataTable({
            'serverSide': true,
            'ajax': {
                'url': "<?php echo site_url('dashboard/homepage/cover/getdata'); ?>",
                'type': 'GET',
                'dataSrc': 'data',
                'data': {
                    'select_status': select_status.value,
                    'select_lang': select_lang.value
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
                sSearch: "ค้นหา ชื่อรูปภาพ: ",
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

                $('#overlay_1').hide();
                if (daData.length == 0) {
                    $('#example2 tbody').html(`
                        <tr>
                            <td colspan="6" class="text-center">
                            ไม่พบข้อมูล
                            </td>
                        </tr>`);
                } else {
                    var count_carousel = 0;
                    daData.forEach(element => {
                        if (element.status == 1) {
                            var carousel_html = `<div class="carousel-item ${count_carousel == 0 ? 'active' : ''}">
                                                    <img class="d-block w-100" src="<?= base_url('dist/img/cover/') ?>${element.path_image}">
                                                </div> `;
                            var carousel_indicators = `<li data-target="#carouselExampleIndicators" data-slide-to="${count_carousel}" class="${count_carousel == 0 ? 'active' : ''}"></li>`;
                            count_carousel++;
                            $('#carousel-indicators').append(carousel_indicators);
                            $('#carousel').append(carousel_html);
                        }
                    });
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
                        return `<a href="<?= base_url('dist/img/cover/') ?>${data.path_image}" data-toggle="lightbox" data-title="${data.name_image}" data-gallery="gallery">
                                        <img src="<?= base_url('dist/img/cover/') ?>${data.path_image}" class="img-fluid mb-2" alt="white sample" style="width: 10rem;" />
                                    </a>`;
                    }
                }, {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        return data.name_image;
                    }
                }, {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        return data.language;
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
                        const encodedRowData = encodeURIComponent(JSON.stringify(row));
                        return `<a href="javascript:load_modal('Update', '${encodedRowData}')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-lg"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการเปลี่ยนสถานะหรือไม่', 'dashboard/homepage/cover/changestatus/${data.id_cover}/${data.status}')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/homepage/cover/delete/${data.id_cover}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
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
    $("#form_cover").on('submit', function(event) {
        event.preventDefault();
        const value_image = document.getElementById('upload_image').value;
        const urlRouteInput = document.getElementById("url_route").value;

        if (check_action == 'Create' || check_action == 'Update') {
            if (check_action == 'Create' && !value_image) {
                CustomAlert.show({
                    icon: 'warning',
                    title: 'กรุณาเลือกรูปภาพ',
                    text: 'กรุณาเลือกรูปภาพหน้าปกก่อนบันทึก',
                    confirmButtonText: 'ตกลง'
                });
            } else {
                action_(urlRouteInput, 'form_cover');
            }
        }
    });
</script>