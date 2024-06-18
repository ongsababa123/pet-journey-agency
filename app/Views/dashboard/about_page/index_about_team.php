<title>แก้ไขข้อมูลทีมแพทย์</title>
<!-- Content Wrapper. Contains page content -->
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
                                        <li class="breadcrumb-item active">หน้าปก</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 p-5" style="background-color: #ECF0F3; border-radius: 15px;">
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
                        </div><!-- /.card-body -->
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" title="เพิ่มหน้าปก" onclick="load_modal('Create', 'data')">
                                    <i class="fas fa-plus"></i> เพิ่มหน้าปก
                                </button>
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
                                        <th>รูปภาพ</th>
                                        <th>ชื่อหน้าปก</th>
                                        <th>ภาษาของรูป</th>
                                        <th>สถานะ</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
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

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"></h4>
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
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputName">ชื่อหน้าปก</label>
                                <input type="text" id="inputName_cover" name="inputName_cover" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputName">ประเภทภาษา</label>
                                <select class="form-control" id="select_language" name="select_language" required>
                                    <option value="th">ไทย</option>
                                    <option value="en">อังกฤษ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" id="url_route" name="url_route" hidden>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
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
                $("#modal-title").text('เพิ่มหน้าปก');
                $('#url_route').val('dashboard/homepage/cover/create');
                check_action = 'Create';
                break;
            case 'Update':
                $("#modal-title").text('แก้ไขหน้าปก');
                const data = JSON.parse(decodeURIComponent(data_encode));
                $('#inputName_cover').val(data.name_image);
                $('#select_language').val(data.language);
                $('#url_route').val('dashboard/homepage/cover/update/' + data.id_cover);
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
        $(function() {
            $('#example2').DataTable({
                'serverSide': true,
                'ajax': {
                    'url': "<?php echo site_url('dashboard/aboutpage/aboutteam/getdata'); ?>",
                    'type': 'GET',
                    'dataSrc': 'data',
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
                                                    <img class="d-block w-100" src="<?= base_url('dist/img/team/') ?>${element.image_path}">
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
                            return `<a href="<?= base_url('dist/img/team/') ?>${data.image_path}" data-toggle="lightbox" data-title="${data.name_last_name}" data-gallery="gallery">
                                        <img src="<?= base_url('dist/img/team/') ?>${data.image_path}" class="img-fluid mb-2" alt="white sample" style="width: 10rem;" />
                                    </a>`;
                        }
                    }, {
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            return data.name_last_name;
                        }
                    }, {
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            return data.position;
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
                            <a href="javascript:confirm_Alert('ต้องการเปลี่ยนสถานะหรือไม่', 'dashboard/homepage/cover/changestatus/${data.id_team }/${data.status}')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/homepage/cover/delete/${data.id_team}/${data.image_path}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
                        }
                    },
                ],
            });
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
                Swal.fire({
                    title: 'กรุณาเลือกรูปภาพ...',
                    icon: 'warning',
                    showConfirmButton: true,
                });
            } else {
                action_(urlRouteInput, 'form_cover');
            }
        }
    });
</script>