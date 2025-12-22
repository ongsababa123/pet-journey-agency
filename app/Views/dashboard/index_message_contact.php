<title>ข้อมูลติดต่อจากลูกค้า</title>
<style>
    :root {
        --teal-primary: #4ecdc4;
        --teal-dark: #44a08d;
        --accent-orange: #f39c12;
        --orange-dark: #e67e22;
        --navy-blue: #1a2a6c;
        --service-blue: #0198B4;
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
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        overflow: hidden;
        will-change: transform, box-shadow;
        contain: layout style paint;
        backface-visibility: hidden;
    }

    .card:hover {
        box-shadow: var(--shadow-medium);
        transform: translate3d(0, -3px, 0);
    }

    .card-header {
        background: linear-gradient(135deg, var(--service-blue) 0%, var(--teal-primary) 100%) !important;
        border: none;
        padding: 1.5rem;
        border-radius: 20px 20px 0 0 !important;
        border-bottom: none !important;
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
        background: rgba(255, 255, 255, 0.9);
        border-radius: 12px;
        padding: 0.75rem 1.5rem;
        box-shadow: var(--shadow-soft);
    }

    .breadcrumb-item a {
        color: var(--white) !important;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: var(--navy-blue) !important;
    }

    .breadcrumb-item.active {
        color: rgba(255, 255, 255, 0.8) !important;
        font-weight: 600;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.6) !important;
    }

    /* Table Styling */
    .table {
        border-radius: 12px;
        overflow: hidden;
    }

    .table thead {
        background: linear-gradient(135deg, var(--service-blue) 0%, var(--teal-primary) 100%) !important;
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
        transition: background-color 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: transform, background-color, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .table tbody tr:hover {
        background: rgba(1, 152, 180, 0.05);
        transform: translate3d(0, -1px, 0);
        box-shadow: 0 2px 8px rgba(1, 152, 180, 0.1);
    }

    .table tbody td {
        vertical-align: middle;
        padding: 1rem;
        border-color: rgba(1, 152, 180, 0.1);
    }

    /* Buttons */
    .btn {
        border-radius: 10px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        border: none;
        box-shadow: var(--shadow-soft);
        will-change: transform, background, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--service-blue) 0%, var(--teal-primary) 100%);
        color: var(--white);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--service-blue) 100%);
        transform: translate3d(0, -2px, 0);
        box-shadow: var(--shadow-medium);
    }

    .btn-warning {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--orange-dark) 100%);
        color: var(--white);
    }

    .btn-warning:hover {
        background: linear-gradient(135deg, var(--orange-dark) 0%, var(--accent-orange) 100%);
        transform: translate3d(0, -2px, 0);
    }

    .btn-tool {
        color: var(--white) !important;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: transform;
        contain: layout style;
        backface-visibility: hidden;
    }

    .btn-tool:hover {
        transform: translate3d(0, 0, 0) scale(1.1);
    }

    /* Form Controls */
    .form-control {
        border-radius: 10px;
        border: 2px solid rgba(1, 152, 180, 0.2);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--teal-primary);
        box-shadow: 0 0 0 0.2rem rgba(78, 205, 196, 0.25);
    }

    .icon-spacing {
        margin-right: 10px;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: transform, color;
    }

    .fa-edit {
        color: var(--teal-primary);
    }

    .fa-edit:hover {
        color: var(--accent-orange);
        transform: scale(1.15);
    }

    .fa-exchange-alt {
        color: var(--service-blue);
    }

    .fa-exchange-alt:hover {
        color: var(--teal-primary);
        transform: rotate(90deg) scale(1.15);
    }

    .fa-trash {
        color: #ef4444;
    }

    .fa-trash:hover {
        color: #dc2626;
        transform: scale(1.15);
    }

    /* Status Badges */
    .badge {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.875rem;
        letter-spacing: 0.3px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    .badge:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .badge-status-active {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .badge-status-inactive {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
    }

    .badge-status-pending {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: white;
    }

    .badge-status-processing {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--orange-dark) 100%);
        color: white;
    }

    .badge-status-completed {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--service-blue) 100%);
        color: white;
    }

    .badge-status-cancelled {
        background: linear-gradient(135deg, #9ca3af 0%, #6b7280 100%);
        color: white;
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
                        <div class="card-header" style="border-bottom: none;background-color: #0198B4;color: white">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0"><strong>จัดการข้อมูลลูกค้า</strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการข้อมูลลูกค้า</a></li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-2">
                                <i class="fas fa-envelope-open-text mr-2" style="color: #FFD700;"></i>
                                <strong>ข้อมูลติดต่อจากลูกค้า</strong>
                            </h3>
                            <div class="card-tools">
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
                                <thead>
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
                            return '<span class="badge badge-status-inactive">ยังไม่ได้เปิดอ่าน</span>';
                        } else if (data.status == 1) {
                            return '<span class="badge badge-status-active">เปิดอ่านแล้ว</span>';
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
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/message_contact/delete/${data.id_message_contact}')"><i class="fas fa-trash fa-lg icon-spacing" title="ลบข้อมูล"></i></a>`;
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