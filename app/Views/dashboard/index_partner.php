<title>ข้อมูลพาร์ทเนอร์</title>
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
                                        <li class="breadcrumb-item active">ข้อมูล</li>
                                        <li class="breadcrumb-item active">ข้อมูลพาร์ทเนอร์</li>
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
                                <strong>Animal Clinic</strong>
                                <i class="fas fa-paw ml-2"></i>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-lg" title="เพิ่มหน้าปก" onclick="load_modal('Create', '1')">
                                    <i class="fas fa-plus"></i> เพิ่มข้อมูลพาร์ทเนอร์ Animal Clinic
                                </button> <button type="button" class="btn btn-tool" style="color: white;" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-hover table-bordered text-center">
                                <thead style="background-color: #ECF0F3;">
                                    <tr>
                                        <th width="6%">ลําดับ</th>
                                        <th width="30%">รูปภาพโลโก้</th>
                                        <th width="30%">ชื่อพาร์ทเนอร์</th>
                                        <th width="5%">สถานะ</th>
                                        <th width="10%">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>

                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card collapsed-card" style="border-radius: 15px;">
                        <div class="card-header" style="background-color: #FFB629;color: white">
                            <h3 class="card-title mt-2">
                                <strong>Pet Friendly Hotel</strong>
                                <i class="fas fa-paw ml-2"></i>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" title="เพิ่มหน้าปก" onclick="load_modal('Create', '2')">
                                    <i class="fas fa-plus"></i> เพิ่มข้อมูลพาร์ทเนอร์ Pet Friendly Hotel
                                </button>
                                <button type="button" class="btn btn-tool" style="color: white;" data-card-widget="collapse" onclick="getdata_table2()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-hover table-bordered text-center">
                                <thead style="background-color: #ECF0F3;">
                                    <tr>
                                        <th width="6%">ลําดับ</th>
                                        <th width="30%">รูปภาพโลโก้</th>
                                        <th width="30%">ชื่อพาร์ทเนอร์</th>
                                        <th width="5%">สถานะ</th>
                                        <th width="10%">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>

                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card collapsed-card" style="border-radius: 15px;">
                        <div class="card-header" style="background-color: #23456B;color: white">
                            <h3 class="card-title mt-2">
                                <strong>Pet Hotel</strong>
                                <i class="fas fa-paw ml-2"></i>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg" title="เพิ่มหน้าปก" onclick="load_modal('Create', '3')">
                                    <i class="fas fa-plus"></i> เพิ่มข้อมูลพาร์ทเนอร์ Pet Hotel
                                </button>
                                <button type="button" class="btn btn-tool" style="color: white;" data-card-widget="collapse" onclick="getdata_table3()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example3" class="table table-hover table-bordered text-center">
                                <thead style="background-color: #ECF0F3;">
                                    <tr>
                                        <th width="6%">ลําดับ</th>
                                        <th width="30%">รูปภาพโลโก้</th>
                                        <th width="30%">ชื่อพาร์ทเนอร์</th>
                                        <th width="5%">สถานะ</th>
                                        <th width="10%">การจัดการ</th>
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
            <form class="mb-3" id="form_review" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="file-upload">
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
                                <button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name_partner">ชื่อพาร์ทเนอร์</label>
                                <input type="text" class="form-control" id="name_partner" name="name_partner" required>
                            </div>
                        </div>
                    </div>
                    <input type="text" id="url_route" name="url_route" hidden>
                </div>
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
        $('#input_image').val('');
        $('#name_partner').val('');
        removeUpload();
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
<!-- table data 1 -->
<script>
    $(document).ready(function() {
        $(function() {
            $('#example1').DataTable({
                'serverSide': true,
                'ajax': {
                    'url': "<?php echo site_url('dashboard/partner/getdata/1'); ?>",
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
                    sSearch: "ค้นหา ชื่อพาร์ทเนอร์: ",
                    oPaginate: {
                        sFirst: "หน้าแรก",
                        sPrevious: "ก่อนหน้า",
                        sNext: "ถัดไป",
                        sLast: "หน้าสุดท้าย"
                    },
                    sLengthMenu: "แสดง _MENU_ แถว",
                },
                "drawCallback": function(settings) {
                    var daData = settings.json.data;
                    if (daData.length == 0) {
                        $('#example1 tbody').html(`
                        <tr>
                            <td colspan="5" class="text-center">
                            ไม่พบข้อมูล
                            </td>
                        </tr>`);
                    }
                },
                'columns': [{
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            return `<a href="<?= base_url('dist/img/partner/') ?>${data.logo_partner_path}" data-toggle="lightbox" data-title="" data-gallery="gallery">
                                        <img src="<?= base_url('dist/img/partner/') ?>${data.logo_partner_path}" class="img-fluid mb-2" alt="white sample" style="width: 10rem;" />
                                    </a>`;
                        }
                    },
                    {
                        'data': 'name_partner',
                        'class': 'text-center',
                    },
                    {
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
                            <a href="javascript:confirm_Alert('ต้องการเปลี่ยนสถานะหรือไม่', 'dashboard/partner/changestatus/${data.id_partner}/${data.status}')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/partner/delete/${data.id_partner}/${data.logo_partner_path}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
                        }
                    },
                ],
            });
        });
    });
</script>
<!-- table data 2 -->
<script>
    var count_table2 = 0
    function getdata_table2() {
        if (count_table2 == 0) {
            count_table2 = 1
            $(function() {
                $('#example2').DataTable({
                    'serverSide': true,
                    'ajax': {
                        'url': "<?php echo site_url('dashboard/partner/getdata/2'); ?>",
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
                        sSearch: "ค้นหา ชื่อพาร์ทเนอร์: ",
                        oPaginate: {
                            sFirst: "หน้าแรก",
                            sPrevious: "ก่อนหน้า",
                            sNext: "ถัดไป",
                            sLast: "หน้าสุดท้าย"
                        },
                        sLengthMenu: "แสดง _MENU_ แถว",
                    },
                    "drawCallback": function(settings) {
                        var daData = settings.json.data;
                        if (daData.length == 0) {
                            $('#example2 tbody').html(`
                        <tr>
                            <td colspan="5" class="text-center">
                            ไม่พบข้อมูล
                            </td>
                        </tr>`);
                        }
                    },
                    'columns': [{
                            'data': null,
                            'class': 'text-center',
                            'render': function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function(data, type, row, meta) {
                                return `<a href="<?= base_url('dist/img/partner/') ?>${data.logo_partner_path}" data-toggle="lightbox" data-title="" data-gallery="gallery">
                                        <img src="<?= base_url('dist/img/partner/') ?>${data.logo_partner_path}" class="img-fluid mb-2" alt="white sample" style="width: 10rem;" />
                                    </a>`;
                            }
                        },
                        {
                            'data': 'name_partner',
                            'class': 'text-center',
                        },
                        {
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
                            <a href="javascript:confirm_Alert('ต้องการเปลี่ยนสถานะหรือไม่', 'dashboard/partner/changestatus/${data.id_partner}/${data.status}')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/partner/delete/${data.id_partner}/${data.logo_partner_path}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
                            }
                        },
                    ],
                });
            });
        }
    }
</script>
<!-- table data 2 -->
<script>
    var count_table3 = 0
    function getdata_table3() {
        if (count_table3 == 0) {
            count_table3 = 1
            $(function() {
                $('#example3').DataTable({
                    'serverSide': true,
                    'ajax': {
                        'url': "<?php echo site_url('dashboard/partner/getdata/3'); ?>",
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
                        sSearch: "ค้นหา ชื่อพาร์ทเนอร์: ",
                        oPaginate: {
                            sFirst: "หน้าแรก",
                            sPrevious: "ก่อนหน้า",
                            sNext: "ถัดไป",
                            sLast: "หน้าสุดท้าย"
                        },
                        sLengthMenu: "แสดง _MENU_ แถว",
                    },
                    "drawCallback": function(settings) {
                        var daData = settings.json.data;
                        if (daData.length == 0) {
                            $('#example3 tbody').html(`
                        <tr>
                            <td colspan="5" class="text-center">
                            ไม่พบข้อมูล
                            </td>
                        </tr>`);
                        }
                    },
                    'columns': [{
                            'data': null,
                            'class': 'text-center',
                            'render': function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function(data, type, row, meta) {
                                return `<a href="<?= base_url('dist/img/partner/') ?>${data.logo_partner_path}" data-toggle="lightbox" data-title="" data-gallery="gallery">
                                        <img src="<?= base_url('dist/img/partner/') ?>${data.logo_partner_path}" class="img-fluid mb-2" alt="white sample" style="width: 10rem;" />
                                    </a>`;
                            }
                        },
                        {
                            'data': 'name_partner',
                            'class': 'text-center',
                        },
                        {
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
                            <a href="javascript:confirm_Alert('ต้องการเปลี่ยนสถานะหรือไม่', 'dashboard/partner/changestatus/${data.id_partner}/${data.status}')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/partner/delete/${data.id_partner}/${data.logo_partner_path}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
                            }
                        },
                    ],
                });
            });
        }
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
<!-- form submit -->
<script>
    $("#form_review").on('submit', function(event) {
        event.preventDefault();
        const value_image = document.getElementById('input_image').value;
        const urlRouteInput = document.getElementById("url_route").value;

        if (check_action == 'Create' || check_action == 'Update') {
            if (check_action == 'Create' && !value_image) {
                Swal.fire({
                    title: 'กรุณาเลือกรูปภาพ...',
                    icon: 'warning',
                    showConfirmButton: true,
                });
            } else {
                action_(urlRouteInput, 'form_review');
            }
        }
    });
</script>