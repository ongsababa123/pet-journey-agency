<title>แก้ไขข้อมูล ข้อมูลเซอร์วิส</title>
<style>
    .icon-spacing {
        margin-right: 10px;
        /* สามารถปรับค่าได้ตามต้องการ */
    }
</style>
<link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css') ?>">

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
                                    <h1 class="m-0"><strong><?= $data_service['header_service_name_th']  . ' ' . $data_service['language'] ?></strong></h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active"><?= $data_service['header_service_name_th'] . ' ' . $data_service['language'] ?></li>
                                        <li class="breadcrumb-item active">ข้อมูลเซอร์วิส</li>
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
                                <button type="button" class="btn btn-warning" onclick="open_edit()" id="btn_edit">แก้ไขข้อมูล</button>
                                <button type="button" class="btn btn-success" onclick="save_edit()" id="btn_save">บันทึกข้อมูล</button>
                                <button type="button" class="btn btn-danger" onclick="close_edit()" id="btn_cancel">ยกเลิก</button>
                                <button type="button" class="btn btn-tool" style="color: white;" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="mb-3" id="form_service_content" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="partner">หมวดพาร์ทเนอร์</label>
                                            <select id="partner" name="partner" class="form-control">
                                                <option value="0">ไม่มีพาร์ทเนอร์</option>
                                                <option value="1">Animal Clinic</option>
                                                <option value="2">Pet Friendly Hotel </option>
                                                <option value="3">Pet Hotel</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="content">เนื้อหา</label>
                                            <textarea id="summernote" name="content">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" id="select_language" name="select_language" hidden>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-warning" onclick="open_edit()" id="btn_edit_form">แก้ไขข้อมูล</button>
                            <button type="button" class="btn btn-success" onclick="save_edit()" id="btn_save_form">บันทึกข้อมูล</button>
                            <button type="button" class="btn btn-danger" onclick="close_edit()" id="btn_cancel_form">ยกเลิก</button>
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

<script src="<?= base_url('plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- summernote -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 1000, // set the height of the editor
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['font', ['fontsize']],
                ['color', ['color', 'forecolor', 'backcolor']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['insert', ['link', 'picture', 'video', 'table', 'hr']],
                ['view', ['fullscreen', 'codeview', 'help']],
                ['misc', ['undo', 'redo']]
            ]
        });
        <?php if (isset($data_service_content)) : ?>
            $('#summernote').summernote('code', '<?= $data_service_content['content'] ?>');
            $('#select_language').val('<?= $data_service_content['language'] ?>');
            $('#partner').val('<?= $data_service_content['type_partner'] ?>');
        <?php endif; ?>
        close_edit();
    });
</script>
<!-- open edit -->
<script>
    function open_edit() {
        $('#summernote').summernote('enable');
        $('#btn_edit').hide();
        $('#btn_edit_form').hide();
        $('#btn_save').show();
        $('#btn_cancel').show();
        $('#btn_save_form').show();
        $('#btn_cancel_form').show();
        $('#partner').prop('disabled', false);
    }

    function close_edit() {
        $('#summernote').summernote('disable');
        $('#btn_edit').show();
        $('#btn_edit_form').show();
        $('#btn_save').hide();
        $('#btn_cancel').hide();
        $('#btn_save_form').hide();
        $('#btn_cancel_form').hide();
        $('#partner').prop('disabled', true);
    }

    function save_edit() {
        <?php if ($data_service_content != null) : ?>
            action_('dashboard/service_content/update/<?= $data_service_content['id_service_content'] ?>', 'form_service_content');
        <?php else : ?>
            console.log('crate');
            $('#select_language').val('<?= $data_service['language'] ?>');
            action_('dashboard/service_content/create/<?= $data_service['id_service_header'] ?>', 'form_service_content');
        <?php endif; ?>
    }
</script>