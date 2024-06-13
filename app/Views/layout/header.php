<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .header-top {
            background-color: #ffffff;
            padding: 10px 0;
            border-bottom: 1px solid #eaeaea;
        }

        .header-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-top .logo img {
            height: 50px;
        }

        .header-top .contact-info {
            display: flex;
            align-items: center;
        }

        .header-top .contact-info > div {
            margin-right: 20px;
            display: flex;
            align-items: center;
        }

        .header-top .contact-info > div i {
            margin-right: 10px;
            font-size: 20px;
            color: #00A4E4;
        }

        .header-top .social-icons a {
            color: #000;
            margin-right: 10px;
            font-size: 20px;
        }

        .header-bottom {
            background-color: rgba(12, 20, 70, 0.1);
            padding: 10px 0;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            position: relative; /* Make sure header-bottom is positioned */
            z-index: 1000; /* Adjust z-index to make sure it is on top */
        }

        .header-bottom .nav-link {
            color: #fff;
            margin-right: 20px;
        }

        .header-bottom .nav-link:hover {
            color: #00A4E4;
        }

        .language-selector {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="logo">
                    <img src="<?= base_url('dist/img/logo.png') ?>" alt="Logo">
                </div>
                <div class="contact-info">
                    <div><i class="fas fa-clock"></i> Mon - Sat 9.00 - 18.00 <br> Sunday Closed</div>
                    <div><i class="fas fa-envelope"></i> Email <br> contact@logistics.com</div>
                    <div><i class="fas fa-phone"></i> Call Us <br> (00) 112 365 489</div>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <div class="language-selector">
                        <select>
                            <option>English</option>
                            <option>Thai</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="navbar-nav">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="#">Our Service</a>
                        <a class="nav-link" href="#">Review</a>
                        <a class="nav-link" href="#">Contact</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>
