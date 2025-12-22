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
        padding: 0.5rem 1rem;
    }

    .main-header .nav-link {
        transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        color: white !important;
        border-radius: 10px;
    }

    /* Menu Toggle Button */
    .nav-menu-toggle {
        background: rgba(255, 255, 255, 0.15);
        padding: 0.5rem 0.75rem !important;
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
    }

    .nav-menu-toggle::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .nav-menu-toggle:active::before {
        width: 300px;
        height: 300px;
    }

    .nav-menu-toggle:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: scale(1.05);
    }

    .nav-menu-toggle i {
        transition: transform 0.3s ease;
        display: inline-block;
    }

    .sidebar-collapse .nav-menu-toggle i {
        transform: rotate(90deg);
    }

    .nav-menu-toggle:active i {
        transform: scale(0.9);
    }

    /* Brand Text */
    .navbar-brand-text {
        color: white;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        margin-top: 2%;
    }

    /* Navbar Icon Buttons */
    .navbar-icon-btn {
        position: relative;
        background: rgba(255, 255, 255, 0.15);
        padding: 0.5rem 0.75rem !important;
        margin: 0 0.25rem;
        backdrop-filter: blur(10px);
    }

    .navbar-icon-btn:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px);
    }

    .navbar-icon-btn i {
        font-size: 1.1rem;
    }

    .navbar-badge {
        position: absolute;
        top: 0.25rem;
        right: 0.25rem;
        font-size: 0.65rem;
        padding: 0.2rem 0.4rem;
        border-radius: 10px;
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        border: 2px solid white;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }

    /* User Profile Link */
    .user-profile-link {
        background: rgba(255, 255, 255, 0.15);
        padding: 0.35rem 0.65rem !important;
        margin-left: 0.5rem;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .user-profile-link:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px);
    }

    .user-panel-compact {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    /* User Avatar */
    .user-avatar {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .user-avatar i {
        font-size: 1.75rem;
        color: white;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
    }

    .status-indicator {
        position: absolute;
        bottom: 2px;
        right: 2px;
        width: 10px;
        height: 10px;
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border: 2px solid white;
        border-radius: 50%;
        box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.3);
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% {
            box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.3);
        }
        50% {
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
        }
    }

    /* User Info */
    .user-info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 0.05rem;
        line-height: 1;
    }

    .user-name {
        font-weight: 600;
        font-size: 0.85rem;
        color: white;
        line-height: 1.1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 150px;
    }

    .user-role {
        font-size: 0.7rem;
        color: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        line-height: 1;
    }

    .dropdown-arrow {
        font-size: 0.75rem;
        transition: transform 0.3s ease;
    }

    .user-profile-link[aria-expanded="true"] .dropdown-arrow {
        transform: rotate(180deg);
    }

    /* User Dropdown Menu */
    .user-dropdown-menu {
        background: white;
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        padding: 0;
        min-width: 280px;
        margin-top: 0.5rem;
        animation: dropdownFadeIn 0.3s ease;
    }

    @keyframes dropdownFadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dropdown-header {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        padding: 1.25rem;
        border-radius: 15px 15px 0 0;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .user-dropdown-avatar i {
        font-size: 3rem;
        color: white;
        filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.2));
    }

    .user-dropdown-info {
        flex: 1;
    }

    .user-dropdown-info strong {
        color: white;
        font-size: 1.1rem;
        display: block;
        margin-bottom: 0.25rem;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .user-email {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.85rem;
        margin: 0;
    }

    .dropdown-divider {
        margin: 0;
        border-color: rgba(78, 205, 196, 0.1);
    }

    .dropdown-item-icon {
        padding: 0.75rem 1.25rem;
        color: var(--text-dark);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        font-weight: 500;
    }

    .dropdown-item-icon i {
        width: 20px;
        color: var(--teal-primary);
        transition: transform 0.3s ease;
    }

    .dropdown-item-icon:hover {
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.1) 0%, rgba(243, 156, 18, 0.1) 100%);
        color: var(--text-dark);
        padding-left: 1.5rem;
    }

    .dropdown-item-icon:hover i {
        transform: translateX(3px);
    }

    .logout-btn {
        border-radius: 0 0 15px 15px;
    }

    .logout-btn i {
        color: #ef4444;
    }

    .logout-btn:hover {
        background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(220, 38, 38, 0.1) 100%);
    }

    /* Responsive Navbar */
    @media (max-width: 768px) {
        .navbar-brand-text {
            font-size: 0.95rem;
        }

        .user-dropdown-menu {
            min-width: 250px;
        }

        .navbar-icon-btn {
            padding: 0.4rem 0.6rem !important;
        }
    }

    @media (max-width: 576px) {
        .main-header {
            padding: 0.4rem 0.75rem;
        }

        .user-panel-compact {
            gap: 0.5rem;
        }

        .user-avatar i {
            font-size: 1.75rem;
        }

        .navbar-badge {
            font-size: 0.6rem;
            padding: 0.15rem 0.3rem;
        }
    }

    /* Main Sidebar Styles */
    .main-sidebar {
        background: var(--white) !important;
        box-shadow: var(--shadow-soft);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: transform;
        contain: layout style;
    }

    .main-sidebar .nav-sidebar .nav-link {
        border-radius: 8px;
        margin: 0rem -0.5rem;
        padding: 0.75rem 2rem;
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                   background 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                   box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: transform, background, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .main-sidebar .nav-sidebar .nav-link p,
    .main-sidebar .nav-sidebar .nav-header,
    .main-sidebar .nav-sidebar .nav-link .nav-icon {
        color: var(--text-dark) !important;
        transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                   transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: color, transform;
    }

    /* Menu Hover Effects */
    .nav-sidebar .nav-item .nav-link:not(:focus):hover {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 100%) !important;
        transform: translate3d(5px, 0, 0);
        box-shadow: var(--shadow-soft);
    }

    .nav-sidebar .nav-item .nav-link:not(:focus):hover p,
    .nav-sidebar .nav-item .nav-link:not(:focus):hover .nav-icon {
        color: var(--white) !important;
        transform: translate3d(0, 0, 0) scale(1.05);
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
        position: relative;
        overflow: hidden;
    }

    .brand-link:hover {
        background: rgba(78, 205, 196, 0.05);
    }

    /* Brand Logo Wrapper */
    .brand-logo-wrapper {
        opacity: 1;
        transform: scale(1) translateX(0);
        transition: opacity 0.3s ease, transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sidebar-collapse .brand-logo-wrapper {
        opacity: 0;
        transform: scale(0.8) translateX(-20px);
        pointer-events: none;
        position: absolute;
    }

    /* Brand Icon Wrapper */
    .brand-icon-wrapper {
        opacity: 0;
        transform: scale(0.8) translateX(20px);
        transition: opacity 0.3s ease, transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
    }

    .sidebar-collapse .brand-icon-wrapper {
        opacity: 1;
        transform: scale(1) translateX(0);
        position: relative;
    }

    /* Brand Full Image */
    .brand-image-full {
        height: auto;
        max-height: 70px;
        width: auto;
        max-width: 217px;
        transition: all 0.3s ease;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
    }

    .brand-link:hover .brand-image-full {
        transform: scale(1.05);
    }

    /* Brand Mini Icon */
    .brand-icon-mini {
        font-size: 2.5rem;
        color: var(--teal-primary);
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
        transition: all 0.3s ease;
        animation: pawBounce 2s ease-in-out infinite;
    }

    .brand-link:hover .brand-icon-mini {
        transform: scale(1.15) rotate(15deg);
        color: var(--accent-orange);
    }

    @keyframes pawBounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }
    }

    .layout-fixed .brand-link {
        height: auto;
        min-height: 100px;
    }

    /* Sidebar Transition */
    .main-sidebar {
        transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
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
        background: rgba(26, 42, 108, 0.75);
        /* ลดงาน render: ตัด blur แบบเต็มหน้าจอออก */
        /* backdrop-filter: blur(5px); */
        /* -webkit-backdrop-filter: blur(5px); */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.25s ease, visibility 0.25s ease;
    }

    .custom-alert-overlay.show {
        opacity: 1;
        visibility: visible;
    }

    .custom-alert {
        background: #ffffff;
        /* ลดงาน GPU: ไม่ใช้ blur ซ้อนในกล่องอีกชั้น */
        /* backdrop-filter: blur(16px) saturate(180%); */
        /* -webkit-backdrop-filter: blur(16px) saturate(180%); */
        border-radius: 20px;
        padding: 2rem;
        min-width: 320px;
        max-width: 500px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
        transform: scale(0.7);
        opacity: 0;
        transition: transform 0.28s cubic-bezier(0.34, 1.56, 0.64, 1),
                    opacity 0.28s cubic-bezier(0.34, 1.56, 0.64, 1);
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
                    <a class="nav-link nav-menu-toggle" data-widget="pushmenu" href="#" role="button" title="Toggle Sidebar">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-md-inline-block ml-3">
                    <span class="navbar-brand-text">
                        <i class="fas fa-paw mr-2"></i>
                        <strong>Pet Journey Agency</strong>
                    </span>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto align-items-center">
                <!-- Fullscreen -->
                <li class="nav-item">
                    <a class="nav-link navbar-icon-btn" data-widget="fullscreen" href="#" role="button" title="เต็มหน้าจอ">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <!-- User Menu -->
                <li class="nav-item dropdown user-menu-dropdown">
                    <a class="nav-link user-profile-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-panel-compact">
                            <div class="user-avatar">
                                <i class="fas fa-user-circle"></i>
                                <span class="status-indicator"></span>
                            </div>
                            <div class="user-info d-none d-lg-block">
                                <span class="user-name">
                                    <?php echo session()->get('name_last_admin'); ?>
                                </span>
                                <span class="user-role">
                                    <i class="fas fa-shield-alt mr-1"></i>ผู้ดูแลระบบ
                                </span>
                            </div>
                            <i class="fas fa-chevron-down ml-2 dropdown-arrow"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dropdown-menu" aria-labelledby="userDropdown">
                        <div class="dropdown-header">
                            <div class="user-dropdown-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="user-dropdown-info">
                                <strong><?php echo session()->get('name_last_admin'); ?></strong>
                                <p class="user-email"><?php echo session()->get('email_admin'); ?></p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item dropdown-item-icon logout-btn" href="<?= base_url('/dashboard/logout'); ?>">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            <span>ออกจากระบบ</span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <div class="brand-logo-wrapper">
                    <img src="<?= base_url('dist/img/logo_pet_journey.png') ?>" alt="Pet Ex Logo" class="brand-image-full">
                </div>
                <div class="brand-icon-wrapper">
                    <i class="fas fa-paw brand-icon-mini"></i>
                </div>
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