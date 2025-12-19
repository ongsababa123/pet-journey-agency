<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Modern fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
    <link rel="icon" type="image/x-icon" href="<?= base_url('dist/logo.ico'); ?>">
</head>
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #4ecdc4 0%, #44a08d 25%, #f39c12 75%, #e67e22 100%);
        --teal-primary: #4ecdc4;
        --teal-dark: #44a08d;
        --accent-orange: #f39c12;
        --orange-dark: #e67e22;
        --navy-blue: #1a2a6c;
        --text-dark: #1a2a6c;
        --text-light: #5f7c8a;
        --white: #ffffff;
        --glass-bg: rgba(255, 255, 255, 0.95);
        --shadow-soft: 0 4px 20px rgba(78, 205, 196, 0.15);
        --shadow-medium: 0 8px 30px rgba(78, 205, 196, 0.2);
    }

    /* Add font family for the entire webpage */
    * {
        font-family: 'Kanit', 'Poppins', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    /* Main Header/Navbar Styling */
    .main-header {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 50%, var(--accent-orange) 100%) !important;
        border: none;
        box-shadow: var(--shadow-medium);
        transition: all 0.3s ease;
    }

    .main-header .nav-link {
        transition: all 0.3s ease;
    }

    .main-header .nav-link:hover {
        transform: scale(1.1);
    }

    /* User Block Styling */
    .user-block {
        transition: all 0.3s ease;
    }

    .user-block:hover {
        transform: translateY(-2px);
    }

    .user-block .img-circle {
        border: 3px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .user-block:hover .img-circle {
        border-color: var(--white);
        transform: scale(1.1);
    }

    /* Dropdown Menu */
    .dropdown-menu {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--orange-dark) 100%) !important;
        border-radius: 12px !important;
        border: none;
        box-shadow: var(--shadow-medium);
        animation: fadeInDown 0.3s ease;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dropdown-item {
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover {
        background: rgba(255, 255, 255, 0.2) !important;
        transform: translateX(5px);
    }

    /* Main Sidebar Styles */
    .main-sidebar {
        background: var(--white) !important;
        box-shadow: var(--shadow-soft);
        transition: all 0.3s ease;
    }

    .main-sidebar .nav-sidebar .nav-link {
        border-radius: 8px;
        margin: 0rem -0.5rem;
        padding: 0.75rem 2rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .main-sidebar .nav-sidebar .nav-link p,
    .main-sidebar .nav-sidebar .nav-header,
    .main-sidebar .nav-sidebar .nav-link .nav-icon {
        color: var(--text-dark) !important;
        transition: all 0.3s ease;
    }

    /* Menu Hover Effects */
    .nav-sidebar .nav-item .nav-link:not(:focus):hover {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 100%) !important;
        transform: translateX(5px);
        box-shadow: var(--shadow-soft);
    }

    .nav-sidebar .nav-item .nav-link:not(:focus):hover p,
    .nav-sidebar .nav-item .nav-link:not(:focus):hover .nav-icon {
        color: var(--white) !important;
        transform: scale(1.05);
    }

    /* Active Menu States */
    .nav-sidebar .nav-item.menu-is-opening.menu-open>.nav-link,
    .nav-sidebar .nav-item .nav-link:focus,
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%) !important;
        box-shadow: var(--shadow-soft);
    }

    .nav-sidebar .nav-item.menu-is-opening.menu-open>.nav-link p,
    .nav-sidebar .nav-item.menu-is-opening.menu-open>.nav-link .nav-icon,
    .nav-sidebar .nav-item .nav-link:focus p,
    .nav-sidebar .nav-item .nav-link:focus .nav-icon,
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active p,
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active .nav-icon {
        color: var(--white) !important;
        font-weight: 600;
    }

    /* Tree View Styles */
    .nav-sidebar .nav-treeview {
        background: rgba(78, 205, 196, 0.05);
        border-radius: 8px;
        margin: 0.25rem 0;
        padding: 0.5rem 0;
    }

    .nav-sidebar .nav-treeview .nav-link:focus,
    .nav-sidebar .nav-treeview .nav-link:not(:focus):hover,
    .nav-treeview>.nav-item>.nav-link.active {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--orange-dark) 100%) !important;
        box-shadow: 0 2px 8px rgba(243, 156, 18, 0.3);
    }

    .nav-sidebar .nav-treeview .nav-link:focus p,
    .nav-sidebar .nav-treeview .nav-link:focus .nav-icon,
    .nav-sidebar .nav-treeview .nav-link:not(:focus):hover p,
    .nav-sidebar .nav-treeview .nav-link:not(:focus):hover .nav-icon,
    .nav-treeview>.nav-item>.nav-link.active p,
    .nav-treeview>.nav-item>.nav-link.active .nav-icon {
        color: var(--white) !important;
        font-weight: 600;
    }

    /* Brand Link */
    .brand-link {
        border-bottom: 1px solid rgba(78, 205, 196, 0.1);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem 0.5rem;
    }

    .brand-link:hover {
        background: rgba(78, 205, 196, 0.05);
    }

    .brand-link .brand-image {
        height: auto;
        max-height: 70px;
        width: auto;
        max-width: 217px;
        transition: all 0.3s ease;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
    }

    .brand-link:hover .brand-image {
        transform: scale(1.05);
    }

    .layout-fixed .brand-link {
        height: auto;
        min-height: 100px;
    }

    /* Nav Header */
    .nav-header {
        font-weight: 700;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 1rem 1rem 0.5rem;
        color: var(--text-light) !important;
    }

    /* Preloader */
    .preloader {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
    }

    /* Scrollbar Styling */
    .sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .sidebar::-webkit-scrollbar-track {
        background: rgba(78, 205, 196, 0.1);
        border-radius: 10px;
    }

    .sidebar::-webkit-scrollbar-thumb {
        background: var(--teal-primary);
        border-radius: 10px;
    }

    .sidebar::-webkit-scrollbar-thumb:hover {
        background: var(--accent-orange);
    }
    /* Custom Alert Modal */
    .custom-alert-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(26, 42, 108, 0.7);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .custom-alert-overlay.show {
        opacity: 1;
        visibility: visible;
    }

    .custom-alert {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        border-radius: 20px;
        padding: 2rem;
        min-width: 320px;
        max-width: 500px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        transform: scale(0.7);
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        border: 2px solid rgba(78, 205, 196, 0.3);
        position: relative;
        overflow: hidden;
    }

    .custom-alert-overlay.show .custom-alert {
        transform: scale(1);
        opacity: 1;
    }

    .custom-alert::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
    }

    .custom-alert-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        animation: bounceIn 0.6s ease-out;
    }

    @keyframes bounceIn {
        0% { transform: scale(0); opacity: 0; }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); opacity: 1; }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .custom-alert-icon.success {
        background: linear-gradient(135deg, #d4f4dd 0%, #a7f3d0 100%);
        color: #059669;
        border: 3px solid #10b981;
    }

    .custom-alert-icon.error {
        background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
        color: #dc2626;
        border: 3px solid #ef4444;
    }

    .custom-alert-icon.warning {
        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
        color: #d97706;
        border: 3px solid #f59e0b;
    }

    .custom-alert-icon.question {
        background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
        color: #2563eb;
        border: 3px solid #3b82f6;
    }

    .custom-alert-icon.loading {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        color: var(--white);
        border: 3px solid var(--teal-primary);
    }

    .custom-alert-icon.loading i {
        animation: spin 1s linear infinite;
    }

    .custom-alert-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        text-align: center;
    }

    .custom-alert-message {
        font-size: 1rem;
        color: var(--text-light);
        margin-bottom: 1.5rem;
        text-align: center;
        line-height: 1.5;
    }

    .custom-alert-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
    }

    .custom-alert-btn {
        padding: 0.75rem 2rem;
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Kanit', sans-serif;
    }

    .custom-alert-btn.primary {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        color: var(--white);
        box-shadow: 0 4px 15px rgba(78, 205, 196, 0.3);
    }

    .custom-alert-btn.primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(78, 205, 196, 0.4);
    }

    .custom-alert-btn.success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: var(--white);
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
    }

    .custom-alert-btn.success:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
    }

    .custom-alert-btn.danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: var(--white);
        box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
    }

    .custom-alert-btn.danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(239, 68, 68, 0.4);
    }

    .custom-alert-btn.secondary {
        background: #e5e7eb;
        color: var(--text-dark);
    }

    .custom-alert-btn.secondary:hover {
        background: #d1d5db;
        transform: translateY(-2px);
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-10px); }
        20%, 40%, 60%, 80% { transform: translateX(10px); }
    }

    .custom-alert.shake {
        animation: shake 0.6s;
    }

    /* file uploade image */
<style>
    .file-upload {
        background-color: var(--white);
        width: 600px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 16px;
        box-shadow: var(--shadow-soft);
    }

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
        color: var(--white);
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        border: none;
        padding: 10px;
        border-radius: 10px;
        border-bottom: 4px solid var(--accent-orange);
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--teal-primary) 100%);
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
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
        border: 4px dashed var(--teal-primary);
        position: relative;
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.1) 0%, rgba(243, 156, 18, 0.1) 100%);
        border: 4px dashed var(--accent-orange);
        transform: scale(1.02);
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: var(--text-dark);
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 600;
        text-transform: uppercase;
        color: var(--text-dark);
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
        border-radius: 12px;
    }

    .remove-image {
        width: 300px;
        margin: 0;
        color: var(--white);
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        padding: 10px;
        border-radius: 10px;
        border-bottom: 4px solid #b91c1c;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
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
    <!-- Custom Alert Modal -->
    <div class="custom-alert-overlay" id="customAlertOverlay">
        <div class="custom-alert" id="customAlert">
            <div class="custom-alert-icon" id="alertIcon">
                <i class="fas fa-check"></i>
            </div>
            <h3 class="custom-alert-title" id="alertTitle">ข้อความ</h3>
            <p class="custom-alert-message" id="alertMessage"></p>
            <div class="custom-alert-buttons" id="alertButtons">
                <button class="custom-alert-btn primary" id="alertConfirmBtn">ตกลง</button>
            </div>
        </div>
    </div>

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url('dist/img/logo-pet.png'); ?>" alt="AdminLTELogo" width="300">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
                <img src="<?= base_url('dist/img/logo_pet_journey.png') ?>" alt="Pet Ex Logo" class="brand-image">
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
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/message_contact') ?>" class="nav-link <?= check_menu_state($uri_menu, 'message_contact', 'active_display') ?>">
                                <i class="nav-icon fas fa-file-signature"></i>
                                <p>
                                    ข้อมูลการติดต่อ
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
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
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

    <!-- Custom Alert System -->
    <script>
        const CustomAlert = {
            overlay: null,
            alert: null,
            icon: null,
            title: null,
            message: null,
            buttons: null,
            confirmBtn: null,
            cancelBtn: null,
            
            init() {
                this.overlay = document.getElementById('customAlertOverlay');
                this.alert = document.getElementById('customAlert');
                this.icon = document.getElementById('alertIcon');
                this.title = document.getElementById('alertTitle');
                this.message = document.getElementById('alertMessage');
                this.buttons = document.getElementById('alertButtons');
                this.confirmBtn = document.getElementById('alertConfirmBtn');
                
                this.overlay.addEventListener('click', (e) => {
                    if (e.target === this.overlay) {
                        this.close();
                    }
                });
            },
            
            show(options) {
                const {
                    icon = 'success',
                    title = '',
                    text = '',
                    confirmButtonText = 'ตกลง',
                    confirmButtonColor = 'primary',
                    showConfirmButton = true,
                    showCancelButton = false,
                    cancelButtonText = 'ยกเลิก',
                    timer = null,
                    onConfirm = null,
                    onCancel = null
                } = options;
                
                const iconMap = {
                    success: '<i class="fas fa-check"></i>',
                    error: '<i class="fas fa-times"></i>',
                    warning: '<i class="fas fa-exclamation"></i>',
                    question: '<i class="fas fa-question"></i>',
                    loading: '<i class="fas fa-spinner"></i>'
                };
                
                this.icon.className = 'custom-alert-icon ' + icon;
                this.icon.innerHTML = iconMap[icon] || iconMap.success;
                this.title.textContent = title;
                this.message.textContent = text;
                this.message.style.display = text ? 'block' : 'none';
                
                // Clear existing buttons
                this.buttons.innerHTML = '';
                
                // Add cancel button if needed
                if (showCancelButton) {
                    const cancelBtn = document.createElement('button');
                    cancelBtn.className = 'custom-alert-btn danger';
                    cancelBtn.textContent = cancelButtonText;
                    cancelBtn.onclick = () => {
                        if (onCancel) onCancel();
                        this.close();
                    };
                    this.buttons.appendChild(cancelBtn);
                }
                
                // Add confirm button
                if (showConfirmButton) {
                    const confirmBtn = document.createElement('button');
                    confirmBtn.className = 'custom-alert-btn ' + confirmButtonColor;
                    confirmBtn.textContent = confirmButtonText;
                    confirmBtn.onclick = () => {
                        if (onConfirm) onConfirm();
                        this.close();
                    };
                    this.buttons.appendChild(confirmBtn);
                }
                
                this.overlay.classList.add('show');
                document.body.style.overflow = 'hidden';
                
                if (icon === 'error' || icon === 'warning') {
                    this.alert.classList.add('shake');
                    setTimeout(() => this.alert.classList.remove('shake'), 600);
                }
                
                if (timer) {
                    setTimeout(() => this.close(), timer);
                }
            },
            
            showLoading() {
                this.show({
                    icon: 'loading',
                    title: 'กำลังดำเนินการ...',
                    showConfirmButton: false
                });
            },
            
            close() {
                this.overlay.classList.remove('show');
                document.body.style.overflow = '';
            }
        };
        
        document.addEventListener('DOMContentLoaded', function() {
            CustomAlert.init();
        });
    </script>

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
                    CustomAlert.showLoading();
                },
                success: function(response) {
                    CustomAlert.close();
                    if (response.success) {
                        CustomAlert.show({
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000
                        });
                        if (response.reload) {
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    } else {
                        CustomAlert.show({
                            icon: 'error',
                            title: response.message,
                            confirmButtonText: 'ตกลง'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    CustomAlert.show({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: 'กรุณาลองอีกครั้ง',
                        confirmButtonText: 'ตกลง'
                    });
                }
            });
        }
    </script>

    <!-- function check confirm after ajax request -->
    <script>
        function confirm_Alert(text, url) {
            CustomAlert.show({
                icon: 'question',
                title: text,
                showCancelButton: true,
                confirmButtonText: 'ตกลง',
                confirmButtonColor: 'success',
                cancelButtonText: 'ยกเลิก',
                onConfirm: () => {
                    $.ajax({
                        url: '<?= base_url() ?>' + url,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        beforeSend: function() {
                            CustomAlert.showLoading();
                        },
                        success: function(response) {
                            CustomAlert.close();
                            if (response.success) {
                                CustomAlert.show({
                                    icon: 'success',
                                    title: response.message,
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                                setTimeout(() => {
                                    if (response.reload) {
                                        window.location.reload();
                                    }
                                }, 2000);
                            } else {
                                CustomAlert.show({
                                    icon: 'error',
                                    title: response.message,
                                    confirmButtonText: 'ตกลง'
                                });
                            }
                        },
                        error: function() {
                            CustomAlert.show({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                confirmButtonText: 'ตกลง'
                            });
                        }
                    });
                }
            });
        }
    </script>

    <body>

</html>