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
    <style>
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

        header {
            width: 100%;
            z-index: 1000;
            position: fixed;
            top: 0;
        }

        .header-top,
        .header-bottom,
        .header-top-mobile {
            background-color: #ffffff;
            padding: 10px 2%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-bottom,
        .header-bottom-mobile {
            background-color: rgba(12, 20, 70, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
        }

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
            color: #00A4E4;
        }

        .header-top .logo img,
        .header-top-mobile .logo img {
            height: 60px;
        }

        .header-top .contact-info {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            flex-wrap: wrap;
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

        .header-top .social-icons {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .header-top .social-icons a {
            color: #000;
            margin-right: 10px;
            font-size: 20px;
        }

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

        .header-top-mobile {
            display: none;
        }

        .header-bottom-mobile {
            display: none;
        }

        @media (max-width: 768px) {

            .header-top,
            .header-bottom {
                display: none;
            }

            .header-top-mobile,
            .header-bottom-mobile {
                display: flex;
                justify-content: space-between;
                width: 100%;
            }

            .header-top-mobile .logo {
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
                height: 50px;
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

        @media (max-width: 1250px) {
            .header-top .contact-info {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- header normal -->
    <header>
        <div class="header-top">
            <div class="logo">
                <img src="<?= base_url('dist/img/logo1.jpg') ?>" alt="Logo">
            </div>
            <div class="contact-info">
                <div><i class="fas fa-clock"></i> <span>Mon - Sat 9.00 - 18.00 <br> Sunday Closed</span></div>
                <div><i class="fas fa-envelope"></i> <span>Email <br> contact@logistics.com</span></div>
                <div><i class="fas fa-phone"></i> <span>Call Us <br> (00) 112 365 489</span></div>
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
            <div class="navbar-nav">
                <div class="nav-link"><a href="#">Home</a></div>
                <div class="nav-link"><a href="#">About</a></div>
                <div class="nav-link"><a href="#">Our Service</a></div>
                <div class="nav-link"><a href="#">Review</a></div>
                <div class="nav-link"><a href="#">Contact</a></div>
            </div>
        </div>
    </header>

    <!-- header mobile -->
    <header>
        <div class="header-top-mobile">
            <div class="menu">
                <i class="fas fa-bars"></i>
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
    </header>

    <script>
        document.getElementById('language-select').addEventListener('change', function() {
            var flagImg = document.getElementById('flag-img');
            if (this.value === 'th') {
                flagImg.src = '<?= base_url('dist/img/flagth.png') ?>';
            } else {
                flagImg.src = '<?= base_url('dist/img/flagen.png') ?>';
            }
        });
    </script>
</body>

</html>