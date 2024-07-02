<title>ข้อมูลติดต่อจากลูกค้า</title>
<style>
    .icon-spacing {
        margin-right: 10px;
        /* สามารถปรับค่าได้ตามต้องการ */
    }
</style>
<!-- icheck bootstrap -->
<link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
<!-- Select2 -->
<link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">

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
                                    <h1 class="m-0"><strong>จัดการข้อมูลลูกค้า </strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการข้อมูลลูกค้า </a></li>
                                        <li class="breadcrumb-item active">ข้อมูลติดต่อจากลูกค้า</li>
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
                                <strong>ข้อมูลติดต่อจากลูกค้า</strong>
                            </h3>
                            <div class="card-tools">
                                </button> <button type="button" class="btn btn-tool" style="color: white;" data-card-widget="collapse">
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
                                        <select id="select_status" name="select_status" class="form-control" style="width: 100%;" onchange="getdata_table()">
                                            <option value="all" selected>ทั้งหมด</option>
                                            <option value="0">ยังไม่ได้อ่าน</option>
                                            <option value="1">อ่านแล้ว</option>
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
                                        <th width="6%">ลําดับ</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>อีเมล์</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>วันที่ส่ง</th>
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

<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="mb-3" id="form_message_contact" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">ชื่อ</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="ระบุชื่อ">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">นามสกุล</label>
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="ระบุนามสกุล">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">อีเมล์</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="ระบุอีเมล์">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone_number">หมายเลขโทรศัพท์</label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="ระบุหมายเลขโทรศัพท์">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">ข้อความ</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
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

<!-- Select2 -->
<script src="<?= base_url('plugins/select2/js/select2.full.min.js') ?>"></script>

<!-- modal -->
<script>
    function load_modal(action, data_encode) {
        $('#name').val('');
        $('#lastname').val('');
        $('#email').val('');
        $('#phone_number').val('');
        $('#message').val('');
        switch (action) {
            case 'Update':
                $("#modal-title").text('แก้ไขใบติดต่อจากลูกค้า');
                var data = JSON.parse(decodeURIComponent(data_encode));
                $('#name').val(data.name);
                $('#lastname').val(data.lastname);
                $('#email').val(data.email);
                $('#phone_number').val(data.phone_number);
                $('#message').val(data.message);
                $('#url_route').val('dashboard/message_contact/update/' + data.id_message_contact);
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
                'url': "<?php echo site_url('dashboard/message_contact/getdata'); ?>",
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
                sSearch: "ค้นหา ชื่อ-นามสกุล , อีเมล์",
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
                            <td colspan="7" class="text-center">
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
                },
                {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        return data.name + ' ' + data.lastname;
                    }
                },
                {
                    'data': 'email',
                    'class': 'text-center',
                },
                {
                    'data': 'phone_number',
                    'class': 'text-center',
                },
                {
                    'data': 'date_time',
                    'class': 'text-center',
                },
                {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        if (data.status == 0) {
                            return '<span class="badge bg-danger">ยังไม่ได้เปิดอ่าน</span>';
                        } else if (data.status == 1) {
                            return '<span class="badge bg-success">เปิดอ่านแล้ว</span>';
                        }
                    }
                },
                {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        const encodedRowData = encodeURIComponent(JSON.stringify(row));
                        return `<a href="javascript:load_modal('Update', '${encodedRowData}')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-xl"></i></a>
                            <a href="javascript:alert_change_status('dashboard/message_contact/changestatus/${data.id_message_contact}/${data.status}')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/message_contact/delete/${data.id_message_contact}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
                    }
                },
            ],
        });
    }
</script>

<!-- บันทึกข้อมูล -->
<script>
    $("#form_message_contact").on('submit', function(event) {
        event.preventDefault();
        const urlRouteInput = document.getElementById("url_route").value;
        action_(urlRouteInput, 'form_message_contact');
    });
</script>

<!-- alert change status -->
<script>
    function alert_change_status(url) {
        Swal.fire({
            title: "เปลี่ยนสถานะ",
            input: "select",
            inputOptions: {
                "0": "ยังไม่ได้เปิดอ่าน",
                "1": "เปิดอ่านแล้ว",
            },
            inputPlaceholder: "",
            showCancelButton: true,
            confirmButtonColor: "#28a745",
            confirmButtonText: "ตกลง",
            cancelButtonText: "ยกเลิก",
            cancelButtonColor: "#dc3545",
            inputValidator: (value) => {
                return $.ajax({
                    url: '<?= base_url() ?>' + url + value,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Loading...',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            showConfirmButton: false,
                        });
                    },
                }).then(function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            showConfirmButton: false
                        });
                        setTimeout(() => {
                            if (response.reload) {
                                window.location.reload();
                            }
                        }, 2000);
                    } else {
                        Swal.fire({
                            title: response.message,
                            icon: 'error',
                            showConfirmButton: true
                        });
                    }
                });
            }
        });
    }
</script>

</body>