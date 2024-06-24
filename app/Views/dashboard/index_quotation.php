<title>ข้อมูลเสนอราคา</title>
<style>
    .icon-spacing {
        margin-right: 10px;
        /* สามารถปรับค่าได้ตามต้องการ */
    }
</style>
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
                            <table id="example2" class="table table-hover table-bordered text-center">
                                <thead style="background-color: #ECF0F3;">
                                    <tr>
                                        <th width="6%">ลําดับ</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>อีเมล์</th>
                                        <th>บริการที่ใช้</th>
                                        <th>สถานะ</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            จิลายุทธ บัณฑิต
                                        </td>
                                        <td>
                                            jailyootbandit@gmail.com
                                        </td>
                                        <td class="text-left">
                                            - บริการนำเข้าและส่งออกสัตว์เลี้ยง <br>
                                            - บริการตรวจเลือดสัตว์เลี้ยง <br>
                                            - บริการด้านสัตวแพทย์
                                        </td>
                                        <td>
                                            <h2 class="badge bg-success">ตอบรับแล้ว</h2>
                                        </td>
                                        <td width="10%">
                                            <a href="javascript:load_modal('Update', 'data')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-xl"></i></a>
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
<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
                            <label for="phone_number">ประเทศต้นทาง</label>
                            <input type="text" id="phone_number" name="phone_number" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email">ประเทศปลายทาง</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name_last">ประเภทการเดินทาง</label>
                            <input type="text" id="name_last" name="name_last" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="phone_number">รูปแบบขนส่งสัตว์เลี้ยง</label>
                            <input type="text" id="phone_number" name="phone_number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="customCheckbox1" class="col-sm-12 col-form-label">
                        <strong>เลือกบริการที่ต้องการ</strong>
                    </label>
                    <div class="col-sm-12">
                        <?php foreach ($service_header as $key => $value) : ?>
                            <div class="form-group clearfix"> 
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="service_<?= $key ?>" name="service_<?= $key ?>" value="<?= $value['id_service_header'] ?>">
                                    <label for="service_<?= $key ?>" style="color: grey">
                                        <?= $value['header_service_name'] ?>
                                    </label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-success">บันทึกข้อมูล</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- modal -->
<script>
    function load_modal(action, data_encode) {
        switch (action) {
            case 'Create':
                console.log(action);
                $("#modal-title").text('เพิ่มเซอร์วิส');
                break;
            case 'Update':
                $("#modal-title").text('แก้ไขเซอร์วิส');
                break;
            default:
                break;
        }
    }
</script>
<!-- table data -->
<script>
    $(function() {
        $('#example2').DataTable({
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
                sSearch: "ค้นหา ชื่อ-นามสกุล: ",
                oPaginate: {
                    sFirst: "หน้าแรก",
                    sPrevious: "ก่อนหน้า",
                    sNext: "ถัดไป",
                    sLast: "หน้าสุดท้าย"
                },
                sLengthMenu: "แสดง _MENU_ แถว",
            },
        });
    });
</script>