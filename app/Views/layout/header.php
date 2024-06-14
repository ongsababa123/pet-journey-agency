<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
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
            display: flex;
            flex-direction: column;
            width: 100%;
            z-index: 1000;
            position: fixed;
            top: 0;
        }

        .header-top,
        .header-bottom {
            background-color: #ffffff;
            padding: 10px 2%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-bottom {
            background-color: rgba(12, 20, 70, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
            /* Center the menu items horizontally */
        }

        .header-bottom .navbar-nav {
            display: flex;
            justify-content: space-around;
            /* Distribute menu items evenly */
            align-items: center;
            width: 100%;
            max-width: 1000px;
            flex-direction: row;
            /* Ensure the menu items are in a row */
        }

        .header-bottom .nav-link {
            color: #fff;
            margin-right: 20px;
            position: relative;
            display: flex;
            align-items: center;
        }

        .header-bottom .nav-link a {
            font-size: 120%;
            color: inherit;
            text-decoration: none;
        }

        .header-bottom .nav-link:hover {
            color: #00A4E4;
        }

        .header-top .logo img {
            height: 60px;
            /* Adjust logo size */
        }

        .header-top .contact-info {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            /* Expand contact-info to full width */
            flex-wrap: wrap;
            /* Wrap content on smaller screens */
        }

        .header-top .contact-info>div {
            display: flex;
            align-items: center;
            text-align: left;
            /* Align text to the left */
            margin: 10px 20px;
            /* Add space between contact items */
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
            /* Add space above social icons */
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

        @media (max-width: 768px) {

            .header-top .contact-info,
            .header-top .social-icons {
                display: none;
            }

            .header-top,
            .header-bottom {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-bottom .navbar-nav {
                flex-direction: column;
                width: 100%;
            }

            .header-bottom .nav-link {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 480px) {
            .header-top {
                padding: 10px 2%;
            }

            .header-top .logo img {
                height: 40px;
                /* Adjust logo size for small screens */
            }

            .header-bottom {
                padding: 5px 2%;
            }

            .header-bottom .navbar-nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-bottom .nav-link {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .language-selector {
                padding: 5px 5px;
            }
        }
    </style>
</head>

<body>
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