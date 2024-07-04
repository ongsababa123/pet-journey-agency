<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script>
        var BASE_URL = '<?= base_url(); ?>';
    </script>
    <script src="<?= base_url('public/js/language.js'); ?>"></script>
    <style>
        * {
            font-family: 'Kanit', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .contact-title {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #043062;
            padding: 20px;
            color: #fff;
            margin-bottom: 30px;
        }

        .contact-title-h1 {
            font-size: 3.5rem;
            font-weight: 600;
            display: flex;
            flex-wrap: wrap;
            text-align: center;
            margin-bottom: 0;
        }

        .contact-title-h1 div {
            color: #FAD046;
            margin-right: 10px;
        }

        @media (max-width: 1200px) {
            .contact-title-h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 992px) {
            .contact-title-h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .contact-title-h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .contact-title-h1 {
                font-size: 1.5rem;
            }
        }

        .contact-form {
            background-color: #23456B;
            background-size: cover;
            padding: 30px;
            border-radius: 10px;
        }

        .contact-form h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-form p {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-form .form-control {
            margin-bottom: 15px;
        }

        .contact-details {
            padding: 30px;
        }

        .contact-details-title {
            font-size: 14pt;
            margin-bottom: 20px;
        }

        .contact-details p {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .contact-details p i {
            margin-right: 20px;
            font-size: 2.3rem;
        }

        .contact-details img {
            display: block;
            margin: 20px auto;
        }

        .contact1 {
            padding: 70px;
        }

        .contact2 {
            padding: 70px;
        }

        /* Quote Section */
        .quote-section {
            padding: 50px 0;
            background-color: #fff;
            text-align: center;
        }

        .quote-title {
            position: relative;
            height: 100px;
            margin-bottom: 30px;
            margin-top: 30px;
        }

        .quote-title:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border-left: 100vw solid #0198B4;
            border-bottom: 250px solid transparent;
        }

        .quote-title img {
            width: 400px;
            height: auto;
            position: absolute;
            left: 0px;
            top: 10%;
            transform: translateY(-50%);
            z-index: 3;
        }

        @media (max-width: 800px) {
            .contact-details p {
                font-size: 11pt;
            }

            .contact1 {
                padding: 50px;
            }

            .contact2 {
                padding: 50px;
            }

            .contact-details-text span {
                font-size: 10pt;
            }

            .quote-title:after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 0;
                height: 0;
                border-left: 100vw solid #0198B4;
                border-bottom: 190px solid transparent;
            }

            .quote-title img {
                width: 280px;
                height: auto;
                position: absolute;
                left: 0px;
                top: 10%;
                transform: translateY(-50%);
                z-index: 3;
            }

        }

        @media (max-width: 400px) {
            .contact-details p {
                font-size: 9pt;
            }

            .quote-title:after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 0;
                height: 0;
                border-left: 100vw solid #0198B4;
                border-bottom: 120px solid transparent;
            }

            .quote-title img {
                width: 180px;
                height: auto;
                position: absolute;
                left: 0px;
                top: 40%;
                transform: translateY(-50%);
                z-index: 3;
            }

        }

        .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
            line-height: 34px;
            text-align: left;
            padding-left: 20px;
        }

        .select2-container--bootstrap .select2-selection--single .select2-selection__arrow {
            height: 34px;
        }

        .select2-container .select2-selection--single {
            height: 38px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            text-align: left;
        }

        .contact-details-icon {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .contact-details-text {
            font-size: 1rem;
            line-height: 1.5;
        }
    </style>
</head>
<?php
$cut_url = explode('/', $uri_menu);
?>

<body>
    <!-- sec slide page -->
    <section>
        <?php include 'app\Views\layout\slide.php'; ?>
    </section>

    <!-- sec contact -->
    <section>
        <div class="contact-title">
            <h1 class="contact-title-h1">
                <!-- <div>Contact</div>
                ติดต่อเรา -->
            </h1>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-12 mt-4" style="padding: 5%;">
                    <h1 class="text-center" style="font-size: 5rem;"><?= $cut_url[0] == 'th' ? 'ไม่พบหน้าที่คุณต้องการ' : 'The page you were looking for was not found.'  ?></h1>
                </div>
            </div>
    </section>
</body>

</html>