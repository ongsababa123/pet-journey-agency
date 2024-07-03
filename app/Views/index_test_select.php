<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300,400,400i,700&display=swap">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css'); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
</head>
<style>
    * {
        font-family: 'Kanit', sans-serif;
    }
</style>

<?php
$select_data = [
    '1' => 'PHP',
    '2' => 'React',
    '3' => 'C++',
    '4' => 'JavaScript',
    '5' => 'Python',
];

//$muti_select['0']['value_select'] มีข้อมูลเป็น 1,2,3,4,5;
// แยก string ตามตัวแบ่ง ',' แล้วเก็บใน $split_value_muti
$split_value_muti = explode(',', $muti_select['0']['value_select']);

?>

<body>
    <div class="container">
        <form class="mb-3" id="form_muti_select" action="javascript:void(0)" method="post" enctype="multipart/form-data">
            <div class="form-group mt-5">
                <label>Multiple</label>
                <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" id="select2" name="select2[]" multiple>
                    <?php foreach ($select_data as $key_select => $value_select) : ?>
                        <!-- หาตัวเลขที่เหมือนกันในชุดข้อมูลของ $split_value_muti ว่า $key_select มีอยู่ในชุดข้อมูลไหม return เป็น true or false -->
                        <option <?= in_array($key_select, $split_value_muti) ? 'selected' : '' ?> value="<?= $key_select ?>"><?= $value_select ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Select2 -->
    <script src="<?= base_url('plugins/select2/js/select2.full.min.js'); ?>"></script>

    <script>
        const muti_select_value_Data = <?= json_encode($muti_select); ?>
        //Initialize Select2 Elements
        $(function() {
            $('.select2').select2({
                theme: 'bootstrap4'
            })
        });
    </script>
    <script>
        $("#form_muti_select").on('submit', function(event) {
            event.preventDefault();
            var selected = Array.from(document.getElementById('select2').selectedOptions).map(option => option.value);
            console.log(selected);
            // action_('test_select/update/1', 'form_muti_select');
        });
    </script>
    <script>
        function action_(url, form) {
            var formData = new FormData(document.getElementById(form));
            $.ajax({
                url: '<?= base_url() ?>' + url,
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                beforeSend: function() {
                    Swal.fire({
                        title: 'กําลังดําเนินการ...',
                        allowEscapeKey: false,
                        allowOutsideClick: false,
                        showConfirmButton: false,
                    });
                },
                success: function(response) {
                    Swal.close();
                    console.log(response);
                    if (response.success) {
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            allowOutsideClick: false,
                        });
                        if (response.reload) {
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    } else {
                        Swal.fire({
                            title: response.message,
                            icon: 'error',
                            showConfirmButton: true,
                            confirmButtonText: 'ตกลง',
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: "เกิดข้อผิดพลาด",
                        icon: 'error',
                        showConfirmButton: true,
                        confirmButtonText: 'ตกลง',
                    });
                }
            });
        }
    </script>

</body>

</html>