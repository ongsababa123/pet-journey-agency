<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PetEx ศูนย์นำเข้า-ส่งออกสัตว์เลี้ยง | <?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PetEx ศูนย์นำเข้า-ส่งออกสัตว์เลี้ยง บริการนำเข้าส่งออกสัตว์เลี้ยง รับเลี้ยงดูแลสัตว์เลี้ยง และบริการครบวงจรสำหรับสัตว์เลี้ยงของคุณ">
    <meta name="keywords" content="PetEx, ศูนย์นำเข้า-ส่งออกสัตว์เลี้ยง, นำเข้าส่งออกสัตว์เลี้ยง, ดูแลสัตว์เลี้ยง, รับเลี้ยงสัตว์เลี้ยง">
    <meta property="og:title" content="บริการนำเข้าส่งออกสัตว์เลี้ยง - PetEx ศูนย์นำเข้า-ส่งออกสัตว์เลี้ยง">
    <meta property="og:description" content="PetEx ศูนย์นำเข้า-ส่งออกสัตว์เลี้ยง บริการนำเข้าส่งออกสัตว์เลี้ยง รับเลี้ยงดูแลสัตว์เลี้ยง และบริการครบวงจรสำหรับสัตว์เลี้ยงของคุณ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://petexthailand.com">
    <link rel="canonical" href="https://petexthailand.com">
    <meta name="google-site-verification" content="AmwQxltY35fczxrgHnoEfXbmeAsr48M4pKkubYJoU40" />
    <!-- Google Font: Kanit -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300,400,400i,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= base_url('dist/logo.ico'); ?>">

    <script>
        var BASE_URL = '<?= base_url(); ?>';
    </script>
    <script src="<?= base_url('public/js/language.js'); ?>"></script>

    <style>
        /* Loading Page Styles */
        .loading-container {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .spinner {
            margin: 20px auto;
            width: 70px;
            text-align: center;
        }

        .spinner>div {
            width: 10px;
            height: 10px;
            background-color: #333;
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0)
            }

            40% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }

        .hidden {
            display: none;
        }

        .loading-text {
            margin-top: 20px;
            font-size: 15px;
            color: #333;
            font-weight: bold;
        }

        .ml2 {
            font-weight: 600;
            font-size: 1.0em;
        }

        .ml2 .letter {
            display: inline-block;
            line-height: 1em;
        }

        /* general */
        * {
            font-family: 'Kanit', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding-top: 100px;
        }

        /* header */
        header {
            width: 100%;
            z-index: 1000;
            position: fixed;
            top: 0;
            display: flex;
            flex-direction: column;
        }

        /* general header-top, header-bottom, header-top-mobile */
        .header-top,
        .header-bottom,
        .header-top-mobile {
            padding: 10px 2%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .header-top {
            z-index: 2;
            position: relative;
            background-color: #ffffff;
        }

        .header-bottom,
        .header-bottom-mobile {
            z-index: 1;
            background-color: #76767626;
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
        }

        .header-top.hide,
        .header-bottom.hide {
            transform: translateY(-100%);
        }

        /* header-bottom, header-bottom-mobile */
        .header-bottom .navbar-nav,
        .header-bottom-mobile .navbar-nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            max-width: 1000px;
            flex-direction: row;
        }

        .header-bottom .nav-link,
        .header-bottom-mobile .nav-link {
            color: #fff;
            margin-right: 20px;
            position: relative;
            display: flex;
            align-items: center;
        }

        .header-bottom .nav-link a,
        .header-bottom-mobile .nav-link a {
            font-size: 120%;
            color: inherit;
            text-decoration: none;
        }

        .header-bottom .nav-link:hover,
        .header-bottom-mobile .nav-link:hover {
            color: #FAD046;
        }

        /* header-bottom.scrolled */
        .header-bottom.scrolled {
            background-color: #FFD700;
            color: #23456B;
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 2%;
        }

        .header-bottom.scrolled .nav-link,
        .header-bottom.scrolled .nav-link a {
            color: #0198B4;
            font-size: medium;
        }

        .header-bottom.scrolled .nav-link:hover {
            color: #000;
        }

        .header-bottom.scrolled .social-icons-bottom {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-bottom.scrolled .language-selector {
            display: flex;
            align-items: center;
            background: #f0f0f0;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .header-bottom.scrolled .language-selector img {
            height: 20px;
            margin-right: 5px;
        }

        .header-bottom.scrolled .language-selector select {
            border: none;
            background: transparent;
            font-size: 16px;
            outline: none;
        }

        /* logo */
        .header-top .logo img,
        .header-top-mobile .logo img {
            height: 60px;
        }

        .header-bottom .logo {
            display: none;
        }

        /* contact-info */
        .header-top .contact-info {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            flex-wrap: wrap;
        }

        .header-top .info-item {
            display: flex;
            align-items: center;
            text-align: left;
            margin: 10px 20px;
        }

        .header-top .info-item i {
            margin-right: 10px;
            font-size: 24px;
            color: #00A4E4;
            border-radius: 50%;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
        }

        .header-top .info-item div {
            display: flex;
            flex-direction: column;
        }

        .header-top .contact-info>div {
            display: flex;
            align-items: center;
            text-align: left;
            margin: 10px 20px;
        }

        .header-top .contact-info>div i {
            margin-right: 10px;
            font-size: 24px;
            color: #fff;
            background-color: #00A4E4;
            border-radius: 50%;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* social-icons */
        .header-top .social-icons {
            align-items: center;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .header-top .social-icons a {
            color: #000;
            margin-right: 10px;
            font-size: 20px;
        }

        .header-bottom .social-icons-bottom {
            display: none;
        }

        .header-bottom.scrolled .social-icons-bottom {
            display: none;
        }

        /* language-selector */
        .language-selector {
            display: flex;
            align-items: center;
            background: #f0f0f0;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .language-selector img {
            height: 20px;
            margin-right: 5px;
        }

        .language-selector select {
            border: none;
            background: transparent;
            font-size: 16px;
            outline: none;
        }

        .header-bottom .language-selector {
            display: none;
        }

        .header-bottom.scrolled .language-selector {
            display: none;
        }

        /* mobile header */
        .header-top-mobile {
            display: none;
        }

        .header-bottom-mobile {
            display: none;
        }

        /* dropdown-menu */
        .dropdown-menu {
            position: absolute;
            display: none;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            top: 100%;
            left: 0;
            z-index: 100;
        }

        .dropdown-menu a {
            padding: 10px 20px;
            display: block;
            color: #000;
            text-decoration: none;
            white-space: nowrap;
        }

        .dropdown-menu a:hover {
            background-color: #f0f0f0;
        }

        .nav-link:hover .dropdown-menu {
            display: block;
            position: absolute;
        }

        /* backdrop */
        .backdrop {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            transition: opacity 0.3s ease;
            opacity: 0;
        }

        .backdrop.show {
            display: block;
            opacity: 1;
        }

        /* mobile menu */
        .menu-mobile {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 80%;
            height: 100%;
            background-color: #fff;
            color: #333;
            z-index: 1000;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s ease, opacity 0.5s ease;
            transform: translateX(-100%);
            opacity: 0;
        }

        .menu-mobile.show {
            display: flex;
            transform: translateX(0);
            opacity: 1;
        }

        .menu-mobile a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            margin-top: 10px;
            display: flex;
            align-items: center;
        }

        .menu-mobile a i {
            margin-right: 10px;
        }

        /* .menu-mobile a:hover {
            text-decoration: none;
            background-color: #FFF792;
            color: #23456B;
            border-radius: 13px;
        } */

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
        }

        .menu-mobile .contact {
            font-size: 16px;
            text-align: left;
            margin-top: auto;
        }

        .menu-mobile .contact p {
            margin: 5px 0;
            color: #23456B;
        }

        .menu-mobile .contact div {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-top: 10px;
        }

        .menu-mobile .contact div i {
            margin-right: 10px;
            color: #FFC919;
        }

        .menu-mobile .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .menu-mobile .social-icons a {
            margin-right: 10px;
            font-size: 20px;
            color: #333;
        }

        .menu-mobile .social-icons a:hover {
            color: #00A4E4;
        }

        /* responsive */
        @media (max-width: 768px) {

            .header-top,
            .header-bottom,
            .header-bottom.scrolled {
                display: none;
            }

            .header-top-mobile,
            .header-bottom-mobile {
                display: flex;
                justify-content: space-between;
                width: 100%;
                background-color: #fff;
            }

            .header-top-mobile .logo {
                width: 90px;
                margin: 0 auto;
            }

            .header-top-mobile .menu {
                flex-grow: 1;
                display: flex;
                align-items: center;
            }

            .header-top-mobile .lang {
                flex-grow: 1;
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }

            .header-top-mobile .language-selector {
                margin-right: 0;
            }
        }

        @media (max-width: 480px) {
            .header-top-mobile {
                padding: 10px 2%;
            }

            .header-top-mobile .logo img {
                height: 75px;
            }

            .header-top-mobile .menu,
            .header-top-mobile .lang {
                flex-grow: 1;
                display: flex;
                align-items: center;
            }

            .header-top-mobile .menu {
                justify-content: flex-start;
            }

            .header-top-mobile .lang {
                justify-content: flex-end;
            }

            .language-selector {
                padding: 5px 5px;
            }
        }

        @media (max-width: 1340px) {
            .header-top .contact-info {
                display: none;
            }
        }

        @media (min-width: 769px) {
            .header-bottom.scrolled {
                background-color: #FFD700;
                color: #23456B;
                position: fixed;
                top: 0;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 10px 2%;
            }
        }

        @media (min-width: 1500px) {
            .header-bottom.scrolled {
                background-color: #FFD700;
                color: #23456B;
                position: fixed;
                top: 0;
                width: 100%;
                display: flex;
                justify-content: space-around;
                align-items: center;
                padding: 10px 2%;
            }

            .header-bottom.scrolled .logo {
                display: block;
            }

            .header-bottom.scrolled .social-icons-bottom {
                display: block;
            }

            .header-bottom.scrolled .language-selector {
                display: block;
            }
        }

        #dropdown-icon {
            transition: transform 0.3s ease;
        }

        .menu-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .menu-item i {
            margin-right: 10px;
        }

        #dropdown-icon {
            margin-left: auto;
            transition: transform 0.3s ease;
        }

        .sub-menu {
            display: none;
            margin-left: 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .sub-menu.open {
            display: block;
            max-height: 200px;
            /* ปรับตามความเหมาะสม */
        }

        #dropdown-icon.open {
            transform: rotate(90deg);
            /* หมุน 90 องศา */
        }
    </style>

    <?php
    $cut_url = explode('/', $uri_menu);
    ?>
</head>

<body>
            <!-- Preloader -->
    <div class="loading-container" id="loading-container">
        <img class="animation__shake" src="<?= base_url('dist/img/logo-pet.png'); ?>" alt="AdminLTELogo" width="300">
        <span class="ml2 loading-text" id="loading"></span>
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <div id="content" class="hidden">
        <header>
            <!-- header normal -->
            <div class="header-top">
                <div class="logo" width="100%">
                    <img src="<?= base_url('dist/img/logo/') . $contact_data['logo_image_path'] ?>" alt="Logo">
                </div>
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <span id="info_open1"></span>
                            <?php if ($cut_url['0'] == 'th') echo $contact_data['open_time'];
                            else echo $contact_data['open_time_en']; ?>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <span id="info_email1"></span>
                            <span><?= $contact_data['email'] ?></span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <span id="info_callus1"></span>
                            <span><?= $contact_data['phone_number'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="social-icons">
                    <?php if (!empty($contact_data['facebook_link'])) : ?>
                        <a href="<?= $contact_data['facebook_link'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($contact_data['instragram_link'])) : ?>
                        <a href="<?= $contact_data['instragram_link'] ?>"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                    <div class="language-selector">
                        <img id="flag-img" src="<?= base_url('dist/img/flagen.png') ?>" alt="Flag">
                        <select id="language-select">
                            <option value="en" <?php if ($cut_url['0'] == 'en') echo 'selected'; ?>>English</option>
                            <option value="th" <?php if ($cut_url['0'] == 'th') echo 'selected'; ?>>ไทย</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="logo">
                    <img src="<?= base_url('dist/img/logo/') . $contact_data['logo_image_path'] ?>" style="width: 165px;" alt="Logo">
                    
                </div>
                <div class="navbar-nav">
                    <div class="nav-link"><a id="menu_home" href="<?= base_url($cut_url[0] . '/homepage') ?>">Home</a></div>
                    <div class="nav-link"><a id="menu_about_us" href="<?= base_url($cut_url[0] . '/aboutuspage') ?>">About us</a></div>
                    <div class="nav-link">
                        <a id="menu_service" href="#">Our Service <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <?php foreach ($service_header as $service) : ?>
                                <a href="<?= base_url($cut_url[0] . '/servicepage/' . ($service['id_service_header'] == 1 ? 'buysale/' : '') . $service['id_service_header']) ?>">
                                    <?php
                                    if ($cut_url[0] == 'th') {
                                        echo $service['header_service_name_th'];
                                    } else {
                                        echo $service['header_service_name_en'];
                                    } ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="nav-link"><a id="menu_review" href="<?= base_url($cut_url[0] . '/reviewpage') ?>">Review</a></div>
                    <div class="nav-link"><a id="menu_contact" href="<?= base_url($cut_url[0] . '/contactpage') ?>">Contact</a></div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="social-icons-bottom">
                        <?php if (!empty($contact_data['facebook_link'])) : ?>
                            <a href="<?= $contact_data['facebook_link'] ?>"><i class="fab fa-facebook-f"></i></a>&nbsp; &nbsp;
                        <?php endif; ?>
                        <?php if (!empty($contact_data['instragram_link'])) : ?>
                            <a href="<?= $contact_data['instragram_link'] ?>"><i class="fab fa-instagram"></i></a>&nbsp; &nbsp;
                        <?php endif; ?>
                    </div>
                    <div class="language-selector">
                        <img id="flag-img-bottom" src="<?= base_url('dist/img/flagen.png') ?>" alt="Flag">
                        <select id="language-select-bottom">
                            <option value="en" <?php if ($cut_url['0'] == 'en') echo 'selected'; ?>>English</option>
                            <option value="th" <?php if ($cut_url['0'] == 'th') echo 'selected'; ?>>ไทย</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- header mobile -->
            <div class="header-top-mobile">
                <div class="menu">
                    <i class="fas fa-bars" onclick="toggleMobileMenu()"></i>
                </div>
                <div class="logo">
                    <img src="<?= base_url('dist/img/logo/') . $contact_data['logo_image_path'] ?>" alt="Logo">
                </div>
                <div class="lang">
                    <div class="language-selector">
                        <select id="language-select-mobile">
                            <option value="en" <?php if ($cut_url['0'] == 'en') echo 'selected'; ?>>EN</option>
                            <option value="th" <?php if ($cut_url['0'] == 'th') echo 'selected'; ?>>TH</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="backdrop" id="backdrop" onclick="toggleMobileMenu()"></div>

            <div class="menu-mobile" id="menu-mobile">
                <span class="close-btn" onclick="toggleMobileMenu()">✖</span>
                <div>
                    <img rc="<?= base_url('dist/img/logo/') . $contact_data['logo_image_path'] ?>" style="width: 165px;" alt="Logo">
                    <div class="menu-item">
                        <i class="fas fa-home"></i>
                        <a id="menu_home_mb" href="<?= base_url($cut_url[0] . '/homepage') ?>"> Home</a>
                    </div>
                    <div class="menu-item" h>
                        <i class="fas fa-info-circle"></i>
                        <a id="menu_about_us_mb" href="<?= base_url($cut_url[0] . '/aboutuspage') ?>"> About us</a>
                    </div>
                    <div class="menu-item" href="javascript:void(0);" onclick="toggleSubMenu()">
                        <i class="fas fa-concierge-bell"></i>
                        <a id="menu_service_mb">
                            Our Service
                        </a>
                        <i id="dropdown-icon" class="fas fa-chevron-right"></i>
                    </div>
                    <div id="sub-menu" class="sub-menu">
                        <?php foreach ($service_header as $service) : ?>
                            <a href="<?= base_url($cut_url[0] . '/servicepage/' . ($service['id_service_header'] == 1 ? 'buysale/' : '') . $service['id_service_header']) ?>">
                                <?= $cut_url[0] == 'th' ? $service['header_service_name_th'] : $service['header_service_name_en']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="menu-item">
                        <i class="fas fa-star"></i>
                        <a id="menu_review_mb" href="<?= base_url($cut_url[0] . '/reviewpage') ?>"> Review</a>
                    </div>
                    <div class="menu-item">
                        <i class="fas fa-file-alt"></i>
                        <a id="menu_contact_mb" href="<?= base_url($cut_url[0] . '/contactpage') ?>"> Contact</a>
                    </div>
                </div>
                <div class="contact">
                    <p style="font-size: larger;" id="info_callus1">Contact</p>
                    <?php if (!empty($contact_data['facebook_name'])) : ?>
                        <div>
                            <i class="fab fa-facebook"></i>
                            <p>&nbsp;<?= $contact_data['facebook_name'] ?></p>
                        </div>
                    <?php endif; ?>
                    <div>
                        <i class="fas fa-phone-alt"></i>
                        <p>&nbsp;<?= $contact_data['phone_number'] ?></p>
                    </div>
                    <div>
                        <i class="fas fa-phone-alt"></i>
                        <p>&nbsp;088 657 3909</p>
                    </div>
                    <div>
                        <i class="fas fa-phone-alt"></i>
                        <p>&nbsp;082 519 2892</p>
                    </div>
                </div>
                <div class="social-icons">
                    <?php if (!empty($contact_data['facebook_name'])) : ?>
                        <a href="<?= $contact_data['facebook_link'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($contact_data['instragram_name'])) : ?>
                        <a href="<?= $contact_data['instragram_link'] ?>"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                </div>
            </div>

        </header>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- loading page -->
    <script>

    </script>

    <!-- Script to handle language change -->
    <script>
        $(document).ready(function() {
            var defaultLang = '<?= $cut_url[0] ?>';
            updateLanguage(defaultLang);
            var flagImg = document.getElementById('flag-img');
            var flag_img_bottom = document.getElementById('flag-img-bottom');

            if (defaultLang == 'th') {
                flagImg.src = BASE_URL + 'dist/img/flagth.png';
                flag_img_bottom.src = BASE_URL + 'dist/img/flagth.png';
            } else {
                flagImg.src = BASE_URL + 'dist/img/flagen.png';
                flag_img_bottom.src = BASE_URL + 'dist/img/flagen.png';
            }

            setTimeout(function() {
                document.getElementById('loading-container').style.display = 'none';
                document.getElementById('content').classList.remove('hidden');
            }, 800);
        });

        function load_language(value_language) {
            var url = window.location.href;
            if (url.includes('/th/')) {
                url = url.replace('/th/', '/' + value_language + '/');
            } else if (url.includes('/en/')) {
                url = url.replace('/en/', '/' + value_language + '/');
            }
            window.location.href = url;
        }

        document.getElementById('language-select').addEventListener('change', function() {
            load_language(this.value);
        });

        document.getElementById('language-select-bottom').addEventListener('change', function() {
            load_language(this.value);
        });

        document.getElementById('language-select-mobile').addEventListener('change', function() {
            load_language(this.value);
        });


        document.getElementById('language-select').addEventListener('change', function() {
            load_language(this.value);
        });

        window.addEventListener('scroll', function() {
            const headerTop = document.querySelector('.header-top');
            const headerBottom = document.querySelector('.header-bottom');
            if (window.scrollY > 100) {
                headerTop.classList.add('hide');
                headerBottom.classList.add('scrolled');
            } else {
                headerTop.classList.remove('hide');
                headerBottom.classList.remove('scrolled');
            }
        });

        function toggleMobileMenu() {
            var menu = document.getElementById('menu-mobile');
            var backdrop = document.getElementById('backdrop');
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
                backdrop.classList.remove('show');
            } else {
                menu.classList.add('show');
                backdrop.classList.add('show');
            }
        }
    </script>

    <script>
        function toggleSubMenu() {
            var subMenu = document.getElementById("sub-menu");
            var dropdownIcon = document.getElementById("dropdown-icon");

            if (subMenu.classList.contains("open")) {
                subMenu.classList.remove("open");
                subMenu.style.maxHeight = "0";
                dropdownIcon.classList.remove("open");
            } else {
                subMenu.classList.add("open");
                subMenu.style.maxHeight = subMenu.scrollHeight + "px";
                dropdownIcon.classList.add("open");
            }
        }
    </script>
</body>

</html>