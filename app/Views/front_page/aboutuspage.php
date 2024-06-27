<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        * {
            font-family: 'Kanit', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* About Us Section */
        .about-us-section {
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        .aboutus-title {
            font-weight: 600;
        }

        .aboutus-text {
            color: #4A4A4A;
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <?php include 'app\Views\layout\slide.php'; ?>
    </section>

    <!-- sec about us -->
    <section class="about-us-section">
        <div class="row">
            <div class="col-7" style="padding: 5%;">
                <h1 class="aboutus-title d-flex">
                    <div>About</div>&nbsp;
                    <div style="color: #FAD046;">Us</div>
                </h1>
                <p class="aboutus-text">
                    Pet Journey Agency recognizes the importance of the bond and love between pets and their owners. In today's world, pets are akin to family members or even children for many people. Our team established Pet Journey Agency to make it easier and more convenient to import and export dogs and cats internationally, and to bring them back to Thailand for those who wish to travel with their beloved pets or relocate them.
                </p>
                <p class="aboutus-text">
                    We offer a range of comprehensive services, including blood tests, global travel preparations with documentation for both export and import into Thailand, as well as other countries. We provide pet passports or travel documents that bring smiles to owners' faces when they see them. Additionally, we collaborate with professionals in various fields:
                </p>
                <ul class="aboutus-text" style="padding-left: 20px;">
                    <li>Veterinary hospitals/clinics: Such as the reputable ABC Clinic</li>
                    <li>Pet-friendly hotels: Such as ABC Hotel</li>
                    <li>Accommodations specifically for pets: Named ABC</li>
                </ul>
                <p class="aboutus-text">
                    All of these services are available throughout Bangkok and its suburbs to serve everyone's needs.
                </p>
            </div>
            <div class="col-5 d-flex align-items-center">
                <div>
                    <img src="<?= base_url('dist/img/contact_pic.png') ?>" width="300px" alt="Pets">
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>