<title>ข้อมูลเสนอราคา</title>
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
                                        <li class="breadcrumb-item active">ข้อมูลเสนอราคา</li>
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
                                <strong>ข้อมูลเสนอราคา</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-xl" title="เพิ่มหน้าปก" onclick="load_modal('Create', 'data')">
                                    <i class="fas fa-plus"></i> เพิ่มใบเสนอราคา
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
                                            <option value="1">กำลังดำเนินการ</option>
                                            <option value="2">ดำเนินการเสร็จสิ้น</option>
                                            <option value="3">ยกเลิก</option>
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
                                        <th class="text-center">บริการที่ใช้</th>
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="mb-3" id="form_quotation" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name_last">ชื่อ-นามสกุล</label>
                                <input type="text" id="name_last" name="name_last" class="form-control" placeholder="ระบุชื่อ-นามสกุล">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="phone_number">หมายเลขโทรศัพท์</label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="ระบุหมายเลขโทรศัพท์">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">อีเมล์</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="ระบุอีเมล">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="travel_date">วันเดินทาง</label>
                                <input type="date" id="travel_date" name="travel_date" class="form-control" placeholder="เลือกวันเดินทาง">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>ประเทศต้นทาง</label>
                                    <select class="form-control select2" style="width: 100%;" id="country_of_origin" name="country_of_origin" oninput="get_airport_of_origin(this.value)">
                                        <option selected="selected" value="0">กรุณาเลือกประเทศต้นทาง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>เลือกสนามบินต้นทาง</label>
                                    <select class="form-control select2" style="width: 100%;" id="airport_of_origin" name="airport_of_origin">
                                        <option selected="selected" value="0">กรุณาเลือกเลือกสนามบินต้นทาง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>ประเทศปลายทาง</label>
                                    <select class="form-control select2" style="width: 100%;" id="destination_country" name="destination_country" oninput="get_airport_of_destination(this.value)">
                                        <option selected="selected" value="0">กรุณาเลือกประเทศปลายทาง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>เลือกสนามบินปลายทาง</label>
                                    <select class="form-control select2" style="width: 100%;" id="destination_airport" name="destination_airport">
                                        <option selected="selected" value="0">กรุณาเลือกเลือกสนามบินปลายทาง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name_last">ประเภทการเดินทาง</label>
                                <select name="travel_type" id="travel_type" class="form-control">
                                    <option value="0">กรุณาเลือกประเภทการเดินทาง</option>
                                    <option value="1">เดินทางเอง</option>
                                    <option value="2">เดินทางกับสัตว์เลี้ยง</option>
                                    <option value="3">ใช้บริการจากเรา</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name_last">รูปแบบขนส่งสัตว์เลี้ยง</label>
                                <select name="transport_format" id="transport_format" class="form-control">
                                    <option value="0">กรุณาเลือกรูปแบบขนส่งสัตว์เลี้ยง</option>
                                    <option value="1">เครื่องบิน</option>
                                    <option value="2">รถไฟ</option>
                                    <option value="3">เรือ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label for="customCheckbox1" class="col-sm-12 col-form-label">
                            <strong>เลือกบริการที่ต้องการ</strong>
                        </label>
                        <div class="col-sm-12">
                            <?php foreach ($service_header as $key => $value) : ?>
                                <?php if ($value['status'] == 1) : ?>
                                    <div class="form-group clearfix">
                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="service_<?= $key ?>" name="service_<?= $key ?>" value="<?= $value['id_service_header'] ?>">
                                            <label for="service_<?= $key ?>" style="color: grey">
                                                <?= $value['header_service_name_th'] ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="animal_type">ชนิดสัตว์</label>
                                <input type="text" class="form-control" placeholder="ระบุชนิดสัตว์" id="animal_type" name="animal_type">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="breed">สายพันธุ์</label>
                                <input type="text" class="form-control" placeholder="ระบุสายพันธุ์" id="breed" name="breed">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="age">อายุ</label>
                                <input type="text" class="form-control" placeholder="ระบุอายุ" id="age" name="age">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="weight">น้ำหนัก</label>
                                <input type="text" class="form-control" placeholder="ระบุน้ำหนัก" id="weight" name="weight">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="note">หมายเหตุ</label>
                                <input type="text" class="form-control" placeholder="ระบุหมายเหตุ" id="note" name="note">
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
        $('#name_last').val('');
        $('#email').val('');
        $('#phone_number').val('');
        $('#travel_date').val('');
        $('#country_of_origin').val('0').trigger('change');
        $('#destination_country').val('0').trigger('change');
        $('#airport_of_origin').val('0').trigger('change');
        $('#destination_airport').val('0').trigger('change');
        $('#travel_type').val('0');
        $('#transport_format').val('0');
        $('input[type="checkbox"]').prop('checked', false);
        $('#animal_type').val('');
        $('#breed').val('');
        $('#age').val('');
        $('#weight').val('');
        $('#note').val('');
        $('#note').val('');

        switch (action) {
            case 'Create':
                $("#modal-title").text('เพิ่มใบเสนอราคา');
                $('#url_route').val('dashboard/quotation/create/<?= count($service_header) ?>');
                break;
            case 'Update':
                $("#modal-title").text('แก้ไขใบเสนอราคา');
                var data = JSON.parse(decodeURIComponent(data_encode));
                $('#name_last').val(data.name_last);
                $('#email').val(data.email);
                $('#phone_number').val(data.phone_number);
                $('#travel_date').val(data.travel_date);
                $('#country_of_origin').val(data.country_of_origin).trigger('change');
                $('#destination_country').val(data.destination_country).trigger('change');
                $('#travel_type').val(data.travel_type);
                $('#transport_format').val(data.transport_format);
                var dataService = data.service.split(',');
                dataService.forEach(element => {
                    $('input[type="checkbox"][value="' + element + '"]').prop('checked', true);
                });
                $('#animal_type').val(data.animal_type);
                $('#breed').val(data.breed);
                $('#age').val(data.age);
                $('#weight').val(data.weight);
                $('#note').val(data.note);
                $('#url_route').val('dashboard/quotation/update/' + data.id_quotation + '/' + <?= count($service_header) ?>);
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
                'url': "<?php echo site_url('dashboard/quotation/getdata'); ?>",
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
                sSearch: "ค้นหา คำอธิบายรีวิว: ",
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
                },
                {
                    'data': 'name_last',
                    'class': 'text-center',
                },
                {
                    'data': 'email',
                    'class': 'text-center',
                },
                {
                    'data': null,
                    'class': 'text-left',
                    'render': function(data, type, row, meta) {
                        var dataService = data.service.split(',');
                        var serviceHeader = <?php echo json_encode($service_header); ?>;

                        var html = dataService.map(serviceId => {
                            var header = serviceHeader.find(header => header.id_service_header == serviceId);
                            return header ? `- ${header.header_service_name_th}<br>` : '';
                        }).join('');

                        return html;
                    }
                },

                {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        if (data.status == 0) {
                            return '<span class="badge bg-info">ยังไม่ได้เปิดอ่าน</span>';
                        } else if (data.status == 1) {
                            return '<span class="badge bg-warning">กำลังดำเนินการ</span>';
                        } else if (data.status == 2) {
                            return '<span class="badge bg-success">ดำเนินการเสร็จสิ้น</span>';
                        }else if (data.status == 3) {
                            return '<span class="badge bg-danger">ยกเลิก</span>';
                        }
                    }
                },
                {
                    'data': null,
                    'class': 'text-center',
                    'render': function(data, type, row, meta) {
                        const encodedRowData = encodeURIComponent(JSON.stringify(row));
                        return `<a href="javascript:load_modal('Update', '${encodedRowData}')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-xl"></i></a>
                            <a href="javascript:alert_change_status('dashboard/quotation/changestatus/${data.id_quotation}/')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/quotation/delete/${data.id_quotation}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
                    }
                },
            ],
        });
    }
</script>

<!-- ดึงข้อมูลแต่ละประเทศ -->
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4'
        })
    });
    fetchCountries();
    // ดึงข้อมูลประเทศ
    async function fetchCountries() {
        const response_countries = await fetch('<?= base_url('public/data/countries.json'); ?>');
        if (!response_countries.ok) {
            throw new Error('Network response_countries was not ok ' + response_countries.statusText);
        }
        const countries = await response_countries.json();

        countries.forEach(element => {
            $("#country_of_origin").append('<option value="' + element.code + '">' + element.name_en + ' (' + element.code + ')</option>');
            $("#destination_country").append('<option value="' + element.code + '">' + element.name_en + ' (' + element.code + ')</option>');
        });
    }
</script>

<!-- get_airport_of_origin // get_airport_of_destination -->
<script>
    async function get_airport_of_origin(country) {
        const response_airport = await fetch('<?= base_url('public/data/airports.json'); ?>');
        if (!response_airport.ok) {
            throw new Error('Network response_airport was not ok ' + response_airport.statusText);
        }
        const airports = await response_airport.json();
        $("#airport_of_origin").empty();
        $("#airport_of_origin").append('<option selected="selected" value="0">กรุณาเลือกเลือกสนามบินต้นทาง</option>');
        for (const key in airports) {
            if (airports.hasOwnProperty(key)) {
                const element = airports[key];
                if (element.country === country) {
                    $("#airport_of_origin").append('<option value="' + element.name + '">' + element.name + ' (' + element.state + ')</option>');
                }
            }
        }
    }

    async function get_airport_of_destination(country) {
        const response_airport = await fetch('<?= base_url('public/data/airports.json'); ?>');
        if (!response_airport.ok) {
            throw new Error('Network response_airport was not ok ' + response_airport.statusText);
        }
        const airports = await response_airport.json();
        $("#destination_airport").empty();
        $("#destination_airport").append('<option selected="selected" value="0">กรุณาเลือกเลือกสนามบินปลายทาง</option>');
        for (const key in airports) {
            if (airports.hasOwnProperty(key)) {
                const element = airports[key];
                if (element.country === country) {
                    $("#destination_airport").append('<option value="' + element.name + '">' + element.name + ' (' + element.state + ')</option>');
                }
            }
        }
    }
</script>

<!-- บันทึกข้อมูล -->
<script>
    $("#form_quotation").on('submit', function(event) {
        event.preventDefault();
        const urlRouteInput = document.getElementById("url_route").value;
        action_(urlRouteInput, 'form_quotation');
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
                "1": "กำลังดำเนินการ",
                "2": "ดำเนินการเสร็จสิ้น",
                "3": "ยกเลิก",
            },
            inputPlaceholder: "",
            showCancelButton: true,
            confirmButtonColor: "#28a745",
            confirmButtonText: "ตกลง",
            cancelButtonText: "ยกเลิก",
            cancelButtonColor: "#dc3545",
            inputValidator: (value) => {
                console.log(value);
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