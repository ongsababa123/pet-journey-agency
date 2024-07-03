<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font: Kanit -->
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
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">


    <script>
        var BASE_URL = '<?= base_url(); ?>';
    </script>
    <script src="<?= base_url('public/js/language.js'); ?>"></script>
    <style>
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

        .menu-mobile a:hover {
            background-color: #FFF792;
            color: #23456B;
            border-radius: 8px;
        }

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

        .nav .nav-item {
            font-size: 1.2em;
        }

        .nav {
            display: flex;
            flex-direction: column;
        }

        .nav-link {
            cursor: pointer;
        }

        .nav-treeview {
            display: none;
            list-style: none;
            padding-left: 20px;
            opacity: 0;
            max-height: 0;
            transition: opacity 0.5s, max-height 0.5s;
        }

        .nav-treeview.show {
            display: block;
            opacity: 1;
            max-height: 1000px;
        }

        .nav-treeview .nav-item {
            color: #000;
            padding-left: 15px;
            font-size: 1.2em;
        }

        .rotate {
            transform: rotate(90deg);
        }
    </style>
</head>

<body>
    <header>
        <!-- header normal -->
        <div class="header-top">
            <div class="logo">
                <img src="<?= base_url('dist/img/logo1.jpg') ?>" alt="Logo">
            </div>
            <div class="contact-info">
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <span id="info_open1">Mon - Sat 9.00 - 18.00</span>
                        <span id="info_open2">Sunday Closed</span>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <span id="info_email1">Email</span>
                        <span id="info_email2">contact@logistics.com</span>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <span id="info_callus1">Call Us</span>
                        <span id="info_callus2">(00) 112 365 489</span>
                    </div>
                </div>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <div class="language-selector">
                    <img id="flag-img" src="<?= base_url('dist/img/flagen.png') ?>" alt="Flag">
                    <select id="language-select">
                        <option value="en">English</option>
                        <option value="th">Thai</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="logo">
                <img src="<?= base_url('dist/img/logo_pet_journey.png') ?>" style="width: 165px;" alt="Logo">
            </div>
            <div class="navbar-nav">
                <div class="nav-link"><a id="menu_home" href="/pet-journey-agency/page/homepage">Home</a></div>
                <div class="nav-link"><a id="menu_about_us" href="/pet-journey-agency/page/aboutuspage">About us</a></div>
                <div class="nav-link">
                    <a id="menu_service" href="#">Our Service</a><i class="fas fa-chevron-down"></i>
                    <div class="dropdown-menu">
                        <a href="/pet-journey-agency/page/servicepage">Service ปกติ</a>
                        <a href="/pet-journey-agency/page/servicesellpage">Service ขาย</a>
                    </div>
                </div>
                <div class="nav-link"><a id="menu_review" href="/pet-journey-agency/page/reviewpage">Review</a></div>
                <div class="nav-link"><a id="menu_contact" href="/pet-journey-agency/page/contactpage">Contact</a></div>
            </div>
            <div class="d-flex align-items-center">
                <div class="social-icons-bottom">
                    <a href="#"><i class="fab fa-instagram"></i></a>&nbsp; &nbsp;
                    <a href="#"><i class="fab fa-facebook-f"></i></a>&nbsp; &nbsp;
                    <a href="#"><i class="fab fa-twitter"></i></a>&nbsp; &nbsp;
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>&nbsp; &nbsp;
                </div>
                <div class="language-selector">
                    <img id="flag-img-bottom" src="<?= base_url('dist/img/flagen.png') ?>" alt="Flag">
                    <select id="language-select-bottom">
                        <option value="en">English</option>
                        <option value="th">Thai</option>
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
                <img src="<?= base_url('dist/img/logo_mobile.png') ?>" alt="Logo">
            </div>
            <div class="lang">
                <div class="language-selector">
                    <select id="language-select-mobile">
                        <option value="en">EN</option>
                        <option value="th">TH</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="backdrop" id="backdrop" onclick="toggleMobileMenu()"></div>

        <div class="menu-mobile" id="menu-mobile">
            <span class="close-btn" onclick="toggleMobileMenu()">✖</span>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <img class="mb-3" src="<?= base_url('dist/img/logo1.jpg') ?>" style="width: 150px;" alt="Logo">
                </li>
                <li class="nav-item">
                    <a id="mb_menu_home" class="nav-link" href="/pet-journey-agency/page/homepage">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a id="mb_menu_about_us" class="nav-link" href="/pet-journey-agency/page/aboutuspage">
                        <i class="fas fa-info-circle"></i> About us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="toggleServices" style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="mb_menu_service"><i class="fas fa-concierge-bell"></i> Our Service</span>
                        <i class="fas fa-chevron-right" id="arrowIcon" style="font-size: small;"></i>
                    </a>
                    <ul class="nav nav-treeview" id="servicesMenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#service1">Service 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service2">Service 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service3">Service 3</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="mb_menu_review" class="nav-link" href="/pet-journey-agency/page/reviewpage">
                        <i class="fas fa-star"></i> Review
                    </a>
                </li>
                <li class="nav-item">
                    <a id="mb_menu_contact1" class="nav-link" href="/pet-journey-agency/page/contactpage">
                        <i class="fas fa-file-alt"></i> Contact
                    </a>
                </li>
            </ul>
            <div class="contact">
                <p id="mb_menu_contact2" style="font-size: larger;">Contact</p>
                <div>
                    <i class="fab fa-facebook"></i>
                    <p>&nbsp;Pet Journey Agency</p>
                </div>
                <p>&nbsp;นำเข้าส่งออกสัตว์เลี้ยง</p>
                <div>
                    <i class="fas fa-phone-alt"></i>
                    <p>&nbsp;081 615 5644</p>
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
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </header>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

    <!-- Script to handle language change -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var defaultLang = 'en';
            updateLanguage(defaultLang);

            document.getElementById('language-select').addEventListener('change', function() {
                var selectedLang = this.value;
                updateLanguage(selectedLang);
                var flagImg = document.getElementById('flag-img');
                if (selectedLang === 'th') {
                    flagImg.src = BASE_URL + 'dist/img/flagth.png';
                } else {
                    flagImg.src = BASE_URL + 'dist/img/flagen.png';
                }
            });

            document.getElementById('language-select-bottom').addEventListener('change', function() {
                var selectedLang = this.value;
                updateLanguage(selectedLang);
                var flagImg = document.getElementById('flag-img-bottom');
                if (selectedLang === 'th') {
                    flagImg.src = BASE_URL + 'dist/img/flagth.png';
                } else {
                    flagImg.src = BASE_URL + 'dist/img/flagen.png';
                }
            });

            document.getElementById('language-select-mobile').addEventListener('change', function() {
                var selectedLang = this.value;
                updateLanguage(selectedLang);
            });
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

        document.getElementById('language-select').addEventListener('change', function() {
            var flagImg = document.getElementById('flag-img');
            if (this.value === 'th') {
                flagImg.src = '<?= base_url('dist/img/flagth.png') ?>';
            } else {
                flagImg.src = '<?= base_url('dist/img/flagen.png') ?>';
            }
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
    </script>
    <script>
        document.getElementById('toggleServices').addEventListener('click', function() {
            var servicesMenu = document.getElementById('servicesMenu');
            var arrowIcon = document.getElementById('arrowIcon');
            if (servicesMenu.classList.contains('show')) {
                servicesMenu.classList.remove('show');
                arrowIcon.classList.remove('rotate');
            } else {
                servicesMenu.classList.add('show');
                arrowIcon.classList.add('rotate');
            }
        });
    </script>
</body>

</html>