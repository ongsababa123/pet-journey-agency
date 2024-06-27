<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300,400,400i,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css'); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="<?= base_url('plugins/ekko-lightbox/ekko-lightbox.css'); ?>">
</head>
<style>
    /* Add font family for the entire webpage */
    * {
        font-family: 'Kanit', sans-serif;
    }

    /* Main Sidebar Styles */
    .main-sidebar,
    .main-sidebar .nav-sidebar .nav-link p,
    .main-sidebar .nav-sidebar .nav-header,
    .main-sidebar .nav-sidebar .nav-link .nav-icon {
        background-color: #ffffff !important;
        color: #000000 !important;
    }

    /* Menu treeview */
    .nav-sidebar .nav-item .nav-link:not(:focus):hover,
    .nav-sidebar .nav-item .nav-link:not(:focus):hover p,
    .nav-sidebar .nav-item .nav-link:not(:focus):hover .nav-icon {
        background-color: #23456B !important;
        color: white !important;
    }

    .nav-sidebar .nav-item.menu-is-opening.menu-open>.nav-link,
    .nav-sidebar .nav-item.menu-is-opening.menu-open>.nav-link p,
    .nav-sidebar .nav-item.menu-is-opening.menu-open>.nav-link .nav-icon {
        background-color: #23456B !important;
        color: white !important;
    }

    /* Menu */
    .nav-sidebar .nav-item .nav-link:focus,
    .nav-sidebar .nav-item .nav-link:focus p,
    .nav-sidebar .nav-item .nav-link:focus .nav-icon {
        background-color: #23456B !important;
        color: white !important;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active p,
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active .nav-icon,
    .nav-sidebar .nav-item .nav-link:active .nav-icon {
        background-color: #23456B !important;
        color: white !important;
    }

    /* Tree View */
    .nav-sidebar .nav-treeview .nav-link:focus,
    .nav-sidebar .nav-treeview .nav-link:focus p,
    .nav-sidebar .nav-treeview .nav-link:focus .nav-icon {
        background-color: #EACB56 !important;
        color: black !important;
    }

    .nav-sidebar .nav-treeview .nav-link:not(:focus):hover,
    .nav-sidebar .nav-treeview .nav-link:not(:focus):hover p,
    .nav-sidebar .nav-treeview .nav-link:not(:focus):hover .nav-icon {
        background-color: #EACB56 !important;
        color: black !important;
    }

    .nav-treeview>.nav-item>.nav-link.active,
    .nav-treeview>.nav-item>.nav-link.active p,
    .nav-treeview>.nav-item>.nav-link.active .nav-icon {
        background-color: #EACB56 !important;
        color: black !important;
    }

    .brand-link .brand-image {
        height: 200px;
        max-height: 70px;
        width: 217px;
    }

    .layout-fixed .brand-link {
        height: 100px;
    }
</style>
<!-- file uploade image -->
<style>
    .file-upload {
        background-color: #ffffff;
        width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Media query for larger screens */

    @media (min-width: 0px) {
        .file-upload {
            width: 60%;
        }

        .drag-text {
            font-size: 1.5em;
        }
    }



    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #23456B;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #FAD046;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #043062;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #23456B;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #FAD046;
        border: 4px dashed #23456B;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: black;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 300px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
</style>
<?php

function check_menu_state($uri_menu, $input, $type)
{
    $cut = explode('/', $uri_menu);
    switch ($type) {
        case 'active':
            return $input == $uri_menu ? 'active' : '';
        case 'treeview':
            return $input == $cut[0] ? 'menu-is-opening menu-open' : '';
        case 'display':
            return $input == $cut[0] ? 'block' : 'none';
        case 'active_display':
            return $input == $cut[1] ? 'active' : '';
        default:
            return '';
    }
}

?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url('dist/img/logo-pet.png'); ?>" alt="AdminLTELogo" width="300">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #23456B !important;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: white !important;"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="user-block">
                        <a class="nav-link " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-circle" src="<?= base_url('dist/img/avatar3.png'); ?>" alt="User Image">
                            <span class="username" style="color: white !important;">
                                <?php echo session()->get('name_last_admin'); ?> 
                            </span>
                            <span class="description" style="color: white !important;">
                                <?php echo session()->get('email_admin'); ?>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown" style="background-color: #FFC107 !important;border-radius: 10px !important;">
                            <!-- Dropdown items go here -->
                            <a class="dropdown-item" href="<?= base_url('/dashboard/logout'); ?>" style="color: black !important;"> <i class="fas fa-sign-out-alt"></i>
                                ลงชื่อออก
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button" style="color: white !important;">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= base_url('dist/img/logo_pet_journey.png') ?>" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">หน้าหลัก</li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/dashboardhome') ?>" class="nav-link <?= check_menu_state($uri_menu, 'dashboardhome', 'active_display') ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">จัดการหน้าเพจ</li>
                        <li class="nav-item <?= check_menu_state($uri_menu, 'homepage', 'treeview') ?>">
                            <a href="#" class="nav-link <?= check_menu_state($uri_menu, 'homepage', 'active') ?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    หน้าหลัก
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: <?= check_menu_state($uri_menu, 'homepage', 'display') ?>;">
                                <li class="nav-item">
                                    <a href="<?= base_url('dashboard/homepage/cover') ?>" class="nav-link <?= check_menu_state($uri_menu, 'homepage/cover', 'active') ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>หน้าปก</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('dashboard/homepage/about') ?>" class="nav-link <?= check_menu_state($uri_menu, 'homepage/about', 'active') ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>เกี่ยวกับเรา</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?= check_menu_state($uri_menu, 'aboutpage', 'treeview') ?>">
                            <a href="#" class="nav-link <?= check_menu_state($uri_menu, 'aboutpage', 'active') ?>">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>
                                    หน้าเกียวกับเรา
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: <?= check_menu_state($uri_menu, 'aboutpage', 'display') ?>;">
                                <li class="nav-item">
                                    <a href="<?= base_url('dashboard/aboutpage/abouthead') ?>" class="nav-link <?= check_menu_state($uri_menu, 'aboutpage/abouthead', 'active') ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ส่วนข้อมูลเกี่ยวกับ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('dashboard/aboutpage/aboutteam') ?>" class="nav-link <?= check_menu_state($uri_menu, 'aboutpage/aboutteam', 'active') ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ส่วนข้อมูลทีมแพทย์</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('dashboard/aboutpage/aboutmore') ?>" class="nav-link <?= check_menu_state($uri_menu, 'aboutpage/aboutmore', 'active') ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ส่วนข้อมูลเพิ่มเติม</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/service') ?>" class="nav-link <?= check_menu_state($uri_menu, 'service', 'active_display') ?>">
                                <i class="nav-icon fas fa-tasks"></i>
                                <p>
                                    เซอร์วิส
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/review') ?>" class="nav-link <?= check_menu_state($uri_menu, 'review', 'active_display') ?>">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    ข้อมูลรีวิว
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/contact') ?>" class="nav-link <?= check_menu_state($uri_menu, 'contact', 'active_display') ?>">
                                <i class="nav-icon fas fa-file-contract"></i>
                                <p>
                                    ข้อมูลติดต่อ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/partner') ?>" class="nav-link <?= check_menu_state($uri_menu, 'partner', 'active_display') ?>">
                                <i class="nav-icon fas fa-handshake"></i>
                                <p>
                                    ข้อมูลพาร์ทเนอร์
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/performanceteam') ?>" class="nav-link <?= check_menu_state($uri_menu, 'performanceteam', 'active_display') ?>">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    ข้อมูลผลงานทีม
                                </p>
                            </a>
                        </li>
                        <div>
                            <hr>
                        </div>
                        <li class="nav-header">จัดการข้อมูลลูกค้า</li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/quotation') ?>" class="nav-link <?= check_menu_state($uri_menu, 'quotation', 'active_display') ?>">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>
                                    ข้อมูลเสนอราคา
                                </p>
                            </a>
                        </li>
                        <div>
                            <hr>
                        </div>
                        <li class="nav-header">จัดการข้อมูลแอดมิน</li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/useradmin') ?>" class="nav-link <?= check_menu_state($uri_menu, 'useradmin', 'active_display') ?>">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>
                                    ข้อมูลผู้ใช้แอดมิน
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>

    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('dist/js/demo.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jszip/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
    <!-- Ekko Lightbox -->
    <script src="<?= base_url('plugins/ekko-lightbox/ekko-lightbox.min.js'); ?>"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- function action ajax request -->
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

    <!-- function check confirm after ajax request -->
    <script>
        function confirm_Alert(text, url) {
            Swal.fire({
                title: text,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: "#28a745",
                confirmButtonText: "ตกลง",
                cancelButtonText: "ยกเลิก",
                cancelButtonColor: "#dc3545",
                preConfirm: () => {
                    return $.ajax({
                        url: '<?= base_url() ?>' + url,
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

    <body>

</html>