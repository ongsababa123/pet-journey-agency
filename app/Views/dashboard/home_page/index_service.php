<title>แก้ไขหน้าแรก เซอร์วิส</title>
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
                                        <li class="breadcrumb-item active">เซอร์วิส</li>
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
                                <strong>ข้อมูลเซอร์วิส</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-lg" title="เพิ่มหน้าปก" onclick="load_modal('Create', 'data')">
                                    <i class="fas fa-plus"></i> เพิ่มเซอร์วิส
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
                                        <th width="30%">รูปภาพ</th>
                                        <th width="20%">หัวข้อเซอร์วิส ไทย</th>
                                        <th width="20%">หัวข้อเซอร์วิส อังกฤษ</th>
                                        <th>สถานะ</th>
                                        <th>การจัดการ</th>
                                        <th>แก้ไขหน้า</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="<?= base_url('dist/img/golden_.jpg') ?>" data-toggle="lightbox" data-title="รูปปกน้องหมา" data-gallery="gallery">
                                                <img src="<?= base_url('dist/img/golden_.jpg') ?>" class="img-fluid mb-2" alt="white sample" style="width: 20rem;" />
                                            </a>
                                        </td>
                                        <td>
                                            นำเข้าและส่งออกสัตว์เลี้ยง
                                        </td>
                                        <td>
                                            Pet import and export
                                        </td>
                                        <td>
                                            <h2 class="badge bg-success">กำลังใช้งาน</h2>
                                        </td>
                                        <td width="10%">
                                            <a href="javascript:load_modal('Update', 'data')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-lg"></i></a>
                                            <a href="javascript:confirm_Alert('text', 'url')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                                            <a href="javascript:confirm_Alert('text', 'url')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('dashboard/home_page/index_about') ?>" class="btn btn-primary" target="_blank"><i class="fas fa-keyboard"></i></a>
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
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="file-upload">
                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">เพิ่มรูปภาพ</button>
                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputName">หัวข้อเซอร์วิส ภาษาไทย</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputName">หัวข้อเซอร์วิส ภาษาอังกฤษ</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
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
    $(document).ready(function() {
        // $('#modal-lg').modal('show');
    });

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
            "lengthChange": true,
            "searching": true,
            "ordering": true,
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
                sSearch: "ค้นหา หัวข้อเซอร์วิส: ",
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
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>