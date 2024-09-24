<title>แก้ไขข้อมูลเพิ่มเติม</title>
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
                                        <li class="breadcrumb-item active">หน้าเกียวกับเรา</li>
                                        <li class="breadcrumb-item active">ข้อมูลเพิ่มเติม</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div>
                        </div><!-- /.card-header -->
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" title="เพิ่มข้อมูล" onclick="load_modal('Create', 'data')">
                                    <i class="fas fa-plus"></i> เพิ่มข้อมูล
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
                                        <select id="select_status" name="select_status" class="form-control select2" style="width: 100%;" onchange="getdata_table()">
                                            <option value="2" selected>ทั้งหมด</option>
                                            <option value="1">เปิดใช้งาน</option>
                                            <option value="0">ปิดใช้งาน</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-10">
                                </div>
                            </div>
                            <hr>
                            <table id="example2" class="table table-hover table-bordered text-center">
                                <thead style="background-color: #ECF0F3;">
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th width="15%">รูปภาพ</th>
                                        <th width="15%">หัวข้อ</th>
                                        <th width="40%">รายละเอียด</th>
                                        <th>สถานะ</th>
                                        <th>การจัดการ</th>
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
                <h4 class="modal-title" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="mb-3" id="form_more" action="javascript:void(0)" method="post" enctype="multipart/form-data">
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
                        <p class="text-right text-gray text-sm mt-2">* ขนาดรูปภาพแนะนำ 900 x 600 px</p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="topic_name_th">หัวข้อ (ไทย)</label>
                                <input type="text" id="topic_name_th" name="topic_name_th" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="topic_name_en">หัวข้อ (อังกฤษ)</label>
                                <input type="text" id="topic_name_en" name="topic_name_en" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="detail_th">รายละเอียด (ไทย)</label>
                                <textarea name="detail_th" id="detail_th" class="form-control" require rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="detail_en">รายละเอียด (อังกฤษ)</label>
                                <textarea name="detail_en" id="detail_en" class="form-control" require rows="5"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <input type="text" id="url_route" name="url_route" hidden>
                <input type="text" id="path_image_old" name="path_image_old" hidden>
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
        $('#topic_name_th').val('');
        $('#topic_name_en').val('');
        $('#detail_th').val('');
        $('#detail_en').val('');
        removeUpload();
        switch (action) {
            case 'Create':
                $("#modal-title").text('เพิ่มข้อมูล');
                $('#url_route').val('dashboard/aboutpage/aboutmore/create');
                check_action = 'Create';
                break;
            case 'Update':
                $("#modal-title").text('แก้ไขข้อมูล');
                const data = JSON.parse(decodeURIComponent(data_encode));
                $('#topic_name_th').val(data.topic_name_th);
                $('#topic_name_en').val(data.topic_name_en);
                $('#detail_th').val(data.detail_th);
                $('#detail_en').val(data.detail_en);
                $('#url_route').val('dashboard/aboutpage/aboutmore/update/' + data.id_more_about_pet);
                $('#path_image_old').val(data.image_path);
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
        getdata_table();
    });

    function getdata_table() {
        var select_status = document.getElementById('select_status');

        if ($.fn.DataTable.isDataTable('#example2')) {
            $('#example2').DataTable().destroy();
        }
        $('#overlay_1').show();
        $('#example2').DataTable({
            'serverSide': true,
            'ajax': {
                'url': "<?php echo site_url('dashboard/aboutpage/aboutmore/getdata'); ?>",
                'type': 'GET',
                'dataSrc': 'data',
                'data': {
                    'select_status': select_status.value
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
                sSearch: "ค้นหา ชื่อหัวข้อ: ",
                oPaginate: {
                    sFirst: "หน้าแรก",
                    sPrevious: "ก่อนหน้า",
                    sNext: "ถัดไป",
                    sLast: "หน้าสุดท้าย"
                },
            },
            "drawCallback": function(settings) {
                var daData = settings.json.data;
                if (daData.length == 0) {
                    $('#example2 tbody').html(`
                        <tr>
                            <td colspan="6" class="text-center">
                            ไม่พบข้อมูล
                            </td>
                        </tr>`);
                }
                $('#overlay_1').hide();
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
                        return `<a href="<?= base_url('dist/img/about-more/') ?>${data.image_path}" data-toggle="lightbox" data-title="${data.name_last_name}" data-gallery="gallery">
                                        <img src="<?= base_url('dist/img/about-more/') ?>${data.image_path}" class="img-fluid mb-2" alt="white sample" style="width: 10rem;" />
                                    </a>`;
                    }
                }, {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        return `${data.topic_name_th}<br><hr>${data.topic_name_en}`;
                    }
                }, {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        return `${data.detail_th}<br><hr>${data.detail_en}`;
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
                        const RowData = JSON.stringify(row).replace(/'/g, "\\'"); // Escape single quotes

                        const encodedRowData = encodeURIComponent(RowData);
                        return `<a href="javascript:load_modal('Update', '${encodedRowData}')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-lg"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการเปลี่ยนสถานะหรือไม่', 'dashboard/aboutpage/aboutmore/changestatus/${data.id_more_about_pet}/${data.status}')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/aboutpage/aboutmore/delete/${data.id_more_about_pet}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
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
    $("#form_more").on('submit', function(event) {
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
                action_(urlRouteInput, 'form_more');
            }
        }
    });
</script>