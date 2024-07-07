<title>แก้ไขข้อมูล ข้อมูลสัตว์เลี้ยง</title>
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
                                    <h1 class="m-0"><strong><?= $data_service['header_service_name_th'] ?></strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active"><?= $data_service['header_service_name_th'] ?></li>
                                        <li class="breadcrumb-item active">ข้อมูลสัตว์เลี้ยง</li>
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
                                <strong>ข้อมูลสัตว์เลี้ยง</strong>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-lg" title="เพิ่มหน้าปก" onclick="load_modal('Create', 'data')">
                                    <i class="fas fa-plus"></i> เพิ่มสัตว์เลี้ยง
                                </button>
                                <button type="button" class="btn btn-tool" style="color: white;" data-card-widget="collapse">
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
                                        <th width="30%">รูปภาพสัตว์เลี้ยง</th>
                                        <th width="20%">ชื่อสัตว์เลี้ยง</th>
                                        <th>วันที่อัพเดท</th>
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="mb-3" id="form_service_animal" action="javascript:void(0)" method="post" enctype="multipart/form-data">
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
                        <div class="col-4">
                            <div class="form-group">
                                <label for="name_pet_th">ชื่อสัตว์เลี้ยง (ภาษาไทย)</label>
                                <input type="text" id="name_pet_th" name="name_pet_th" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="breed_th">ชื่อพันธ์ (ภาษาไทย)</label>
                                <input type="text" id="breed_th" name="breed_th" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="gender">เพศ</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="male">ผู้</option>
                                    <option value="female">หญิง</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="name_pet_en">ชื่อสัตว์เลี้ยง (ภาษาอังกฤษ)</label>
                                <input type="text" id="name_pet_en" name="name_pet_en" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="breed_en">ชื่อพันธ์ (ภาษาอังกฤษ)</label>
                                <input type="text" id="breed_en" name="breed_en" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="color_th">สีขน (ภาษาไทย)</label>
                                <input type="text" id="color_th" name="color_th" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="characteristics_th">ลักษณะนิสัย (ภาษาไทย)</label>
                                <input type="text" id="characteristics_th" name="characteristics_th" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="age">อายุ</label>
                                <input type="text" id="age" name="age" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="color_en">สีขน (ภาษาอังกฤษ)</label>
                                <input type="text" id="color_en" name="color_en" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="characteristics_en">ลักษณะนิสัย (ภาษาอังกฤษ)</label>
                                <input type="text" id="characteristics_en" name="characteristics_en" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                                <label for="price">ราคา</label>
                                <input type="text" id="price" name="price" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="vaccination_history_th">ประวัติการฉีดวัคซีน (ภาษาไทย)</label>
                                <textarea name="vaccination_history_th" id="vaccination_history_th" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="vaccination_history_en">ประวัติการฉีดวัคซีน (ภาษาอังกฤษ)</label>
                                <textarea name="vaccination_history_en" id="vaccination_history_en" class="form-control" rows="5"></textarea>
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
        $('#name_pet_th').val('');
        $('#name_pet_en').val('');
        $('#breed_th').val('');
        $('#breed_en').val('');
        $('#gender').val('male');
        $('#age').val('');
        $('#color_th').val('');
        $('#color_en').val('');
        $('#characteristics_th').val('');
        $('#characteristics_en').val('');
        $('#vaccination_history_th').val('');
        $('#vaccination_history_en').val('');
        $('#price').val('');
        removeUpload();
        switch (action) {
            case 'Create':
                $("#modal-title").text('เพิ่มข้อมูลสัตว์เลี้ยง');
                $('#url_route').val('dashboard/animal/create/' + <?= $data_service['id_service_header'] ?>);
                check_action = 'Create';
                break;
            case 'Update':
                $("#modal-title").text('แก้ไขข้อมูลสัตว์เลี้ยง');
                const data = JSON.parse(decodeURIComponent(data_encode));
                $('#name_pet_th').val(data.name_pet_th);
                $('#name_pet_en').val(data.name_pet_en);
                $('#breed_th').val(data.breed_th);
                $('#breed_en').val(data.breed_en);
                $('#gender').val(data.gender);
                $('#age').val(data.age);
                $('#color_th').val(data.color_th);
                $('#color_en').val(data.color_en);
                $('#characteristics_th').val(data.characteristics_th);
                $('#characteristics_en').val(data.characteristics_en);
                $('#vaccination_history_th').val(data.vaccination_history_th);
                $('#vaccination_history_en').val(data.vaccination_history_en);
                $('#price').val(data.price);
                $('#url_route').val('dashboard/animal/update/' + data.id_service_content_buy_sale + '/' + data.image_path);
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
                    'url': "<?php echo site_url('dashboard/animal/getdata/' . $data_service['id_service_header']); ?>",
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
                    sSearch: "ค้นหา ชื่อสัตว์เลี้ยงและพันธ์: ",
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
                            return `<a href="<?= base_url('dist/img/animal/') ?>${data.image_path}" data-toggle="lightbox" data-title="${data.name_pet_th}" data-gallery="gallery">
                                <img src="<?= base_url('dist/img/animal/') ?>${data.image_path}" class="img-fluid mb-2" alt="white sample" style="width: 10rem;" />
                                </a>`;
                        }
                    }, {
                        'data': 'name_pet_th',
                        'class': 'text-center',
                    },
                    {
                        'data': 'create_date',
                        'class': 'text-center',
                    }, {
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            if (data.status == 0) {
                                return '<span class="badge bg-danger">ไม่ใช้งาน</span>';
                            }
                            if (data.status == 1) {
                                return '<span class="badge bg-success">ใช้งาน</span>';
                            } else {
                                return '<span class="badge bg-warning">ขายแล้ว</span>';
                            }
                        }
                    }, {
                        'data': null,
                        'class': 'text-center',
                        'render': function(data, type, row, meta) {
                            const encodedRowData = encodeURIComponent(JSON.stringify(row));
                            return `<a href="javascript:load_modal('Update', '${encodedRowData}')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล" data-toggle="modal" data-target="#modal-lg"></i></a>
                            <a href="javascript:alert_change_status('dashboard/animal/changestatus/${data.id_service_content_buy_sale}/')"><i class="fas fa-exchange-alt fa-lg icon-spacing" title="เปลี่ยนสถานะ"></i></a>
                            <a href="javascript:confirm_Alert('ต้องการลบหรือไม่', 'dashboard/animal/delete/${data.id_service_content_buy_sale}/${data.image_path}')"><i class="fas fa-trash icon-spacing" title="ลบข้อมูล"></i></a>`;
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
    $("#form_service_animal").on('submit', function(event) {
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
                action_(urlRouteInput, 'form_service_animal');
            }
        }
    });
</script>
<!-- alert change status -->
<script>
    function alert_change_status(url) {
        Swal.fire({
            title: "เปลี่ยนสถานะ",
            input: "select",
            inputOptions: {
                "0": "ไม่ใช้งาน",
                "1": "ใช้งาน",
                "2": "ขายแล้ว",
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