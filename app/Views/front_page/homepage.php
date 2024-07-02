<?php
$cut_url = explode('/', $uri_menu);
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="<?= base_url('public/js/language.js'); ?>"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
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

        .icon-spacing {
            margin-right: 10px;
        }

        .badge-pill {
            background-color: #FFD700;
            color: #333;
            font-size: 12px;
            font-weight: 600;
            padding: 3px 20px;
            border-radius: 25px;
            text-decoration: none;
            display: unset;
            width: 100px;
            align-self: center;
            margin-bottom: 15px;
            cursor: pointer;
        }

        /* Carousel Styles */
        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .carousel-indicators li {
            background-color: #fff;
        }

        .carousel-indicators .active {
            background-color: #000;
        }

        /* Navbar Styles */
        .navbar-custom {
            background-color: #ffffff;
            border-bottom: 1px solid #eaeaea;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #000000;
        }

        /* About Us Section */
        .about-us-section {
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        .about-us-section::before,
        .about-us-section::after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 50%;
            z-index: 1;
        }

        .about-us-section::before {
            top: 0;
            background-color: #fff;
        }

        .about-us-section::after {
            bottom: 0;
            background-color: #23456B;
        }

        .about-us-content {
            display: flex;
            align-items: stretch;
            justify-content: space-between;
            border-radius: 10px;
            overflow: hidden;
            height: auto;
            background-color: transparent;
            position: relative;
            z-index: 2;
        }

        .video-wrapper {
            background-color: #ffd700;
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .video-wrapper iframe {
            width: 80%;
            height: 80%;
            border-radius: 0;
        }

        .text-wrapper {
            width: 50%;
            padding: 30px;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #0198B4;
            position: relative;
        }

        .text-wrapper h2 {
            color: #FFD700;
            margin-bottom: 20px;
            font-size: 30pt;
            font-weight: 700;
        }

        .text-wrapper p {
            font-size: 19px;
            padding: 20px;
            line-height: 1.5;
        }

        .about-us-button {
            margin-top: auto;
        }

        .about-us-button a {
            background-color: #FFD700;
            padding: 10px 20px;
            color: #000;
            border-radius: 5px;
            text-decoration: none;
        }

        .paw-prints {
            position: absolute;
            top: 28%;
            right: 3%;
            width: 32%;
            transform: translateY(-50%);
            z-index: 2;
            padding: 20px;
        }

        .paw-prints i {
            display: block;
            margin-bottom: 10px;
        }

        /* Our Service Section */
        .our-service-section {
            padding: 50px 0;
            background-color: #fff;
            position: relative;
            overflow: hidden;
        }

        .our-service-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background-image: linear-gradient(to bottom, rgba(9, 18, 66, 0.5) 0%, rgba(9, 18, 66, 0) 100%), url('<?php echo base_url('dist/img/service.png'); ?>');
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        .our-service-section .container {
            position: relative;
            z-index: 2;
        }

        .our-service-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .our-service-title h2 {
            font-size: 50px;
            font-weight: 700;
            color: #57d0ff;
        }

        .our-service-title span {
            color: #FFD700;
        }

        .service-item {
            background-color: #24466C;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .service-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .service-item img {
            width: 100%;
            height: 212px;
            object-fit: cover;
        }

        .service-item::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(9, 18, 66, 0.6) 0%, rgba(9, 18, 66, 0) 70%);
            z-index: 1;
            transition: background 0.5s ease;
        }

        .service-item:hover::before {
            background: linear-gradient(to top, rgba(9, 18, 66, 0.8) 0%, rgba(9, 18, 66, 0) 70%);
        }

        .service-item h3,
        .service-item p,
        .service-item .badge-pill {
            position: relative;
            z-index: 2;
        }

        .service-item h3 {
            font-size: 17px;
            color: #fff;
            margin-top: 10px;
        }

        .service-item p {
            font-size: 14px;
            color: #fff;
            margin-bottom: 15px;
        }

        /* Our Service Section */
        /* Review Box Styles */
        .review-section {
            padding: 50px 0;
            background-color: #fff;
            text-align: center;
            position: relative;
        }

        .review-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #23456B;
            padding: 10px;
            color: #fff;
            margin-bottom: 30px;
            margin-top: 30px;
            position: relative;
            height: 100px;
        }

        .review-title h2 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-left: 30px;
            flex: 1;
            text-align: left;
        }

        .review-title img {
            max-width: 250px;
            height: auto;
            position: absolute;
            right: 0px;
            top: 40%;
            transform: translateY(-50%);
        }

        .paw-left,
        .paw-right {
            position: absolute;
            width: 50px;
            z-index: 1;
        }

        /* Partner Section */
        .line-partner {
            background-color: #24466C;
            width: 100%;
            height: 60px;
            margin-bottom: 30px;
        }

        .partner-section {
            padding: 50px 0;
            background-color: #fff;
            text-align: center;
        }

        .partner-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .partner-title h2 {
            font-size: 50px;
            font-weight: 700;
            color: #57d0ff;
        }

        .partner-title span {
            color: #FFD700;
        }

        .partner-category {
            margin-bottom: 50px;
            padding: 10px;
            border: 1px solid #23456B;
            border-radius: 10px;
            position: relative;
        }

        .title-animalclinic {
            color: #fff;
            position: absolute;
            top: -23px;
            left: 10px;
            background-color: #0198B4;
            border-radius: 30px;
            padding: 6px 16px;
            display: flex;
        }

        .title-petfriendly {
            font-size: 18px;
            color: #fff;
            position: absolute;
            top: -23px;
            left: 10px;
            background-color: #FFB629;
            border-radius: 30px;
            padding: 6px 16px;
            display: flex;
        }

        .title-pethotel {
            font-size: 18px;
            color: #fff;
            position: absolute;
            top: -23px;
            left: 10px;
            background-color: #23456B;
            border-radius: 30px;
            padding: 6px 16px;
            display: flex;
        }

        .partner-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding-top: 20px;
        }

        .partner-logo {
            margin: 10px;
        }

        .partner-logo img {
            max-width: 120px;
            height: auto;
        }

        /* Quote Section */
        .quote-section {
            padding: 50px 0;
            background-color: #fff;
            text-align: center;
        }

        .quote-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #0198B4;
            padding: 10px;
            color: #fff;
            margin-bottom: 30px;
            margin-top: 30px;
            position: relative;
            height: 80px;
        }

        .quote-title img {
            max-width: 350px;
            height: auto;
            position: absolute;
            right: 0px;
            top: -78%;
            transform: translateY(-50%);
        }

        .feetpet-icon1 {
            position: absolute;
            top: 650px;
            left: 37px;
            z-index: 1;
            width: 100px;
        }

        .feetpet-icon2 {
            position: absolute;
            top: 1420px;
            right: 37px;
            z-index: 1;
            width: 100px;
        }

        .feetpet-icon3 {
            position: absolute;
            top: 2300px;
            left: 37px;
            z-index: 1;
            width: 100px;
        }

        .feetpet-icon4 {
            position: absolute;
            top: 2750px;
            right: 37px;
            z-index: 1;
            width: 100px;
        }

        @media (max-width: 1300px) {

            .feetpet-icon1 {
                display: none;
            }

            .feetpet-icon2 {
                display: none;
            }

            .feetpet-icon3 {
                display: none;
            }

            .feetpet-icon4 {
                display: none;
            }
        }

        @media (max-width: 991.98px) {
            .our-service-title h2 {
                font-size: 40px;
            }

            .service-item {
                height: auto;
            }

            .service-item img {
                height: auto;
            }

            .service-item h3 {
                font-size: 14px;
                margin-top: 5px;
            }

            .service-item .badge-pill {
                margin-bottom: 10px;
                font-size: 10px;
            }
        }

        @media (max-width: 767.98px) {
            .about-us-content {
                flex-direction: column;
            }

            .video-wrapper,
            .text-wrapper {
                width: 100%;
                height: auto;
            }

            .header-bottom {
                display: none;
            }

            .our-service-title h2 {
                font-size: 30px;
            }

            .service-item {
                height: auto;
            }

            .service-item img {
                height: auto;
            }

            .service-item h3 {
                font-size: 10px;
                margin-top: 3px;
            }

            .service-item .badge-pill {
                margin-bottom: 10px;
                font-size: 8px;
            }

            .text-wrapper h2 {
                font-size: 20px;
            }

            .text-wrapper p {
                font-size: 14px;
                padding: 10px;
            }

            .icontitle_partner {
                display: none;
            }

            .title-animalclinic {
                justify-content: center;
            }

            .img_pic_title {
                display: none;
            }

            .pagination {
                display: none;
            }
        }

        @media (max-width: 767.98px) {
            .review-title h2 {
                font-size: 2.0rem;
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
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $count_cover = 0;
                foreach ($cover_page as $key => $value) {
                    if ($value['language'] == $cut_url[0]) {
                        if ($count_cover == 0) {
                            $count_cover = $count_cover + 1;
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
                        } else {
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $key . '"></li>';
                        }
                    }
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                $count_cover_image = 0;
                foreach ($cover_page as $key => $value) {
                    if ($value['language'] == $cut_url[0]) {
                        var_dump($value);
                        if ($count_cover_image == 0) {
                            $count_cover_image = $count_cover_image + 1;
                            echo '<div class="carousel-item active">';
                        } else {
                            echo '<div class="carousel-item">';
                        }
                        echo '<img src="' . base_url('dist/img/cover/' . $value['path_image']) . '" class="d-block w-100" alt="Slide ' . $key . '">';
                        echo '</div>';
                    }
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- sec about us -->
    <section>
        <div class="about-us-section">
            <div class="container">
                <div class="about-us-content" data-aos="zoom-in">
                    <div class="video-wrapper">
                        <video width="500" controls id="video_about">
                            <source src="<?php
                                            if ($cut_url['0'] == 'th') echo base_url('dist/video/about_video/') . $about_home[0]['path_video'];
                                            else echo base_url('dist/video/about_video/') . $about_home[1]['path_video']; ?>" type="video/mp4">
                        </video>
                    </div>
                    <div class="text-wrapper">
                        <h2 id="title_about_us">ABOUT US</h2>
                        <p><?php if ($cut_url['0'] == 'th') echo $about_home[0]['detail'];
                            else echo $about_home[1]['detail']; ?></p>
                        <div class="about-us-button">
                            <a id="btn_view_more1" href="<?= base_url($cut_url[0] . '/about') ?>">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec our service -->
    <section class="our-service-section">
        <div class="container fade-in">
            <div class="our-service-title">
                <h2>
                    <span id="title_our_service_part1" style="color: #57d0ff;">OUR</span>
                    <span id="title_our_service_part2" style="color: #FFD700;">SERVICE</span>
                </h2>
            </div>
            <div class="row">
                <?php foreach ($service_header as $index => $service) { ?>
                    <div class="col-lg-3 col-md-4 col-6 mb-3">
                        <div class="service-item fade-in">
                            <img src="<?php echo base_url('dist/img/service/' . $service['image_path']); ?>">
                            <h3 class="p-2"><?php
                                            if ($cut_url['0'] == 'th') echo $service['header_service_name_th'];
                                            else echo $service['header_service_name_en'];
                                            ?></h3>
                            <a href="<?= base_url($cut_url[0] . '/servicepage/' . $service['id_service_header']) ?>" class="badge badge-pill badge-primary btn_view_more2"></a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>

    <!-- sec review -->
    <section class="review-section">
        <div class="review-title">
            <h2 id="title_review" style="margin-left: 10%;">REVIEW</h2>
            <img class="img_pic_title" src="<?php echo base_url('dist/img/review_title.png'); ?>" alt="Review Image">
        </div>
        <?php
        include 'app/Views/front_page/reviewhomepage.php';
        ?>
    </section>

    <!-- sec partner -->
    <section class="partner-section">
        <div class="line-partner"></div>
        <div class="container">
            <div class="partner-title" style="text-align: center; margin-bottom: 30px;">
                <div style="display: flex; align-items: center; justify-content: flex-start;">
                    <h2 id="title_partner" style="font-size: 50px; font-weight: 700; color: #23456B; display: flex; align-items: center; justify-content: flex-start;">
                        OUR PARTNER
                    </h2>
                    <img class="icontitle_partner" src="<?= base_url('dist/svg/icontitle_partner.svg') ?>" width="80" height="80" style="margin-left: 7px;">
                </div>
                <span style="font-size: 15pt; color: #424141;">
                    Pet Journey Agency เข้าใจถึงความสำคัญของความรักและความผูกพันระหว่างสัตว์เลี้ยงกับเจ้าของเสมือนสมาชิกครอบครัว ดังนั้น เราได้รวบรวมพันธมิตรที่มีความเชี่ยวชาญและมืออาชีพเพื่อให้บริการที่ดีที่สุดแก่ลูกค้าของเรา
                </span>
            </div>
            <div data-aos="fade-up">
                <div class="partner-category">
                    <div class="title-animalclinic">
                        <span id="sub_title_animal_clinic" style="font-size: 12pt;">
                            Animal clinic
                        </span>
                        <img src="<?= base_url('dist/svg/partnericon1.svg') ?>" width="20" height="20" style="margin-left: 7px;">
                    </div>

                    <div class="partner-logos">
                        <?php foreach ($partner_data as $partner_element) { ?>
                            <?php if ($partner_element['type_partner'] == 1) : ?>
                                <div class="partner-logo">
                                    <img src="<?= base_url('dist/img/partner/' . $partner_element['logo_partner_path']) ?>" alt="partnerlogo">
                                </div>
                            <?php endif; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="partner-category">
                <div class="title-petfriendly">
                    <span id="sub_title_pet_friendly" style="font-size: 12pt;">
                        Pet friendly hotel
                    </span>
                    <img src="<?= base_url('dist/svg/partnericon2.svg') ?>" width="20" height="20" style="margin-left: 7px;">
                </div>
                <div class="partner-logos">
                    <?php foreach ($partner_data as $partner_element) { ?>
                        <?php if ($partner_element['type_partner'] == 2) : ?>
                            <div class="partner-logo">
                                <img src="<?= base_url('dist/img/partner/' . $partner_element['logo_partner_path']) ?>" alt="partnerlogo">
                            </div>
                        <?php endif; ?>
                    <?php } ?>
                </div>
            </div>
            <div class="partner-category">
                <div class="title-pethotel">
                    <span id="sub_title_pet_hotel" style="font-size: 12pt;">
                        Pet hotel
                    </span>
                    <img src="<?= base_url('dist/svg/partnericon3.svg') ?>" width="20" height="20" style="margin-left: 7px;">
                </div>
                <div class="partner-logos">
                    <?php foreach ($partner_data as $partner_element) { ?>
                        <?php if ($partner_element['type_partner'] == 3) : ?>
                            <div class="partner-logo">
                                <img src="<?= base_url('dist/img/partner/' . $partner_element['logo_partner_path']) ?>" alt="partnerlogo">
                            </div>
                        <?php endif; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- sec quote -->
    <section class="quote-section">
        <div class="quote-title">
            <img src="<?= base_url('dist/img/pet_quote.png') ?>" alt="Quote Image">
        </div>
        <div class="quote-content">
            <h3 class="d-flex justify-content-center flex-wrap p-2">
                <span id="title_quote_part1">รับใบเสนอราคาของคุณได้ที่นี่</span>
                <div class="text-success mx-2" id="title_quote_part2">ฟรี</div>
                <span id="title_quote_part3">ไม่มีค่าใช้จ่าย!</span>
            </h3>
            <form class="mb-3" id="form_quotation" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="container mt-3">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name_last" id="label_name" class="d-flex">ชื่อ<div style="color: red;">*</div></label>
                            <input class="form-control" type="text" id="ph_name" name="name_last" placeholder="ระบุชื่อผู้ติดต่อ">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone" id="label_phone" class="d-flex">หมายเลขโทรศัพท์<div style="color: red;">*</div></label>
                            <input class="form-control" type="text" id="ph_phone" name="phone_number" placeholder="ระบุผู้ติดต่อหมายเลขโทรศัพท์">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" id="label_email" class="d-flex">อีเมล<div style="color: red;">*</div></label>
                            <input class="form-control" type="email" id="ph_email" name="email" placeholder="ระบุอีเมล">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="travel-date" id="label_date" class="d-flex">วันเดินทาง</label>
                            <input class="form-control" type="date" id="ph_date" name="travel_date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="origin-country" id="label_country" class="d-flex">ประเทศต้นทาง</label>
                            <select class="form-control select2" id="ph_origin_country" name="country_of_origin" oninput="get_airport_of_origin(this.value)">
                                <option value="null" selected>
                                    <?php if ($cut_url['0'] == 'th') echo 'เลือกประเทศต้นทาง';
                                    else echo 'Choose origin country'; ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="origin-airport" id="label_origin_airport" class="d-flex">สนามบินต้นทาง</label>
                            <select class="form-control select2" id="ph_origin_airport" name="airport_of_origin">
                            </select>
                        </div>
                        <div class="form-group col-md-4 coltest"></div>
                        <div class="form-group col-md-4">
                            <label for="destination-country" id="label_destination_country" class="d-flex">ประเทศปลายทาง</label>
                            <select class="form-control select2" id="ph_destination_country" name="destination_country" oninput="get_airport_of_destination(this.value)">
                                <option value="null" selected>
                                    <?php if ($cut_url['0'] == 'th') echo 'เลือกประเทศปลายทาง';
                                    else echo 'Choose destination country'; ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="destination-airport" id="label_destination_airport" class="d-flex">สนามบินปลายทาง</label>
                            <select class="form-control select2" id="ph_destination_airport" name="destination_airport">
                                <option id="option_destination_airport" value="destination_airport"></option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="travel-type" id="label_travel_type" class="d-flex">ประเภทการเดินทาง</label>
                            <select class="form-control" id="ph_travel_type" name="travel_type">

                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="pet-transport" id="label_pet_transport" class="d-flex">รูปแบบขนส่งสัตว์เลี้ยง</label>
                            <select class="form-control" id="ph_pet_transport" name="transport_format">
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <label for="services" id="label_services">กรุณาเลือกบริการที่ท่านต้องการ:</label><br>
                        <div id="services-container">
                            <?php foreach ($service_header as $key => $value) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_<?= $key ?>" name="service_<?= $key ?>" value="<?= $value['id_service_header'] ?>">
                                    <label class="form-check-label" for="service1"> <?php if ($cut_url['0'] == 'th') echo $value['header_service_name_th'];
                                                                                    else echo $value['header_service_name_en']; ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="pet-type" id="label_pet_type" class="d-flex">ชนิดสัตว์</label>
                            <input type="text" class="form-control" id="ph_pet_type" name="animal_type" placeholder="ระบุชนิดสัตว์">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="breed" id="label_breed" class="d-flex">สายพันธุ์</label>
                            <input type="text" class="form-control" id="ph_breed" name="breed" placeholder="ระบุสายพันธุ์">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="age" id="label_age" class="d-flex">อายุ</label>
                            <input type="text" class="form-control" id="ph_age" name="age" placeholder="ระบุอายุ">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="weight" id="label_weight" class="d-flex">น้ำหนัก</label>
                            <input type="text" class="form-control" id="ph_weight" name="weight" placeholder="ระบุน้ำหนัก">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="reason" id="label_reason" class="d-flex">หมายเหตุ</label>
                            <input type="text" class="form-control" id="ph_reason" name="note" placeholder="ระบุหมายเหตุ">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;<span id="btn_submit_quote">ส่งใบเสนอราคา</span></button>
                </div>
            </form>
        </div>
    </section>
    <br>
    <img class="feetpet-icon1" src="<?= base_url('dist/img/iconfeetpet.png') ?>" width="200px" style="margin-left: 7px;">
    <img class="feetpet-icon2" src="<?= base_url('dist/img/iconfeetpet.png') ?>" width="200px" style="margin-left: 7px;">
    <img class="feetpet-icon3" src="<?= base_url('dist/img/iconfeetpet.png') ?>" width="200px" style="margin-left: 7px;">
    <img class="feetpet-icon4" src="<?= base_url('dist/img/iconfeetpet.png') ?>" width="200px" style="margin-left: 7px;">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap'
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observerOptions = {
                threshold: 0.3
            };

            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        observer.unobserve(entry.target);
                    }
                });
            };

            const observer = new IntersectionObserver(observerCallback, observerOptions);

            document.querySelectorAll(".fade-in").forEach(item => {
                observer.observe(item);
            });

            const swiper = new Swiper('.swiper-container', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });
        });
    </script>

    <script>
        let currentPagePoint = 1;
        const totalPages = 3;
        let xDown = null;

        function updatePageIndicators() {
            const indicators = document.getElementById('page-indicators');
            indicators.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const indicator = document.createElement('span');
                indicator.className = i === currentPagePoint ? 'active' : '';
                indicators.appendChild(indicator);
            }
        }

        function changePage(direction) {
            currentPagePoint += direction;
            if (currentPagePoint < 1) currentPagePoint = 1;
            if (currentPagePoint > totalPages) currentPagePoint = totalPages;

            document.getElementById('prev-btn').style.visibility = currentPagePoint === 1 ? 'hidden' : 'visible';
            document.getElementById('next-btn').style.visibility = currentPagePoint === totalPages ? 'hidden' : 'visible';

            updatePageIndicators();
        }

        document.getElementById('prev-btn').style.visibility = 'hidden';
        updatePageIndicators();
    </script>

    <!-- ดึงข้อมูลแต่ละประเทศ -->
    <script>
        fetchCountries();
        // ดึงข้อมูลประเทศ
        async function fetchCountries() {
            const response_countries = await fetch('<?= base_url('public/data/countries.json'); ?>');
            if (!response_countries.ok) {
                throw new Error('Network response_countries was not ok ' + response_countries.statusText);
            }
            const countries = await response_countries.json();

            countries.forEach(element => {
                $("#ph_origin_country").append('<option value="' + element.code + '">' + element.name_en + ' (' + element.code + ')</option>');
                $("#ph_destination_country").append('<option value="' + element.code + '">' + element.name_en + ' (' + element.code + ')</option>');
            });
        }
    </script>

    <!-- get_airport_of_origin // get_airport_of_destination -->
    <script>
        async function get_airport_of_origin(country) {
            const response_airport = await fetch('<?= base_url('public/data/airports.json'); ?>');
            if (!response_airport.ok) {
                throw new Error('Network response_airport was not ok ' + response_airport.statusText);
            }
            const airports = await response_airport.json();
            $("#ph_origin_airport").empty();
            $("#ph_origin_airport").append('<option selected="selected" value="0">' +
                <?php echo ($cut_url['0'] == 'th') ? '"กรุณาเลือกสนามบินต้นทาง"' : '"Choose origin airport"'; ?> +
                '</option>');

            for (const key in airports) {
                if (airports.hasOwnProperty(key)) {
                    const element = airports[key];
                    if (element.country === country) {
                        $("#ph_origin_airport").append('<option value="' + element.name + '">' + element.name + ' (' + element.state + ')</option>');
                    }
                }
            }
        }

        async function get_airport_of_destination(country) {
            const response_airport = await fetch('<?= base_url('public/data/airports.json'); ?>');
            if (!response_airport.ok) {
                throw new Error('Network response_airport was not ok ' + response_airport.statusText);
            }
            const airports = await response_airport.json();
            $("#ph_destination_airport").empty();
            $("#ph_destination_airport").append('<option selected="selected" value="0">' +
                <?php if ($cut_url['0'] == 'th') echo '"กรุณาเลือกสนามบินต้นทาง"';
                else echo '"Choose origin airport"'; ?> +
                '</option>');

            for (const key in airports) {
                if (airports.hasOwnProperty(key)) {
                    const element = airports[key];
                    if (element.country === country) {
                        $("#ph_destination_airport").append('<option value="' + element.name + '">' + element.name + ' (' + element.state + ')</option>');
                    }
                }
            }
        }
    </script>

    <script>
        $("#form_quotation").on('submit', function(event) {
            event.preventDefault();

            action_('dashboard/quotation/create/withuser/<?= count($service_header) ?>', 'form_quotation');
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
</body>

</html>