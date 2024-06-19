<?php
class Service
{
    public $image;
    public $title;
    public $description;

    public function __construct($image, $title, $description)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
    }
}

class Review
{
    public $image;
    public $text;
    public $bgColor;

    public function __construct($image, $text, $bgColor)
    {
        $this->image = $image;
        $this->text = $text;
        $this->bgColor = $bgColor;
    }
}

$services = [
    new Service("dist/img/service1.png", "Pet import and export", "Support for importing and exporting pets"),
    new Service("dist/img/service2.png", "Pet blood test services", "Medical boarding services for pets"),
    new Service("dist/img/service3.png", "Veterinary services", "Professional pet grooming"),
    new Service("dist/img/service4.png", "Pet vaccination services", "Expert pet training"),
    new Service("dist/img/service5.png", "Airline ticket booking services", "Safe and fun pet daycare"),
    new Service("dist/img/service6.png", "Pet hotels", "Find the perfect pet accommodation"),
    new Service("dist/img/service7.png", "Pet-friendly hotels", "Regular pet walking services"),
    new Service("dist/img/service8.png", "International pet trading", "Reliable pet sitting services")
];

$partners = [
    "animal_clinic" => [
        "dist/img/logopartner.png",
        "dist/img/logopartner.png",
        "dist/img/logopartner.png",
        "dist/img/logopartner.png"
    ],
    "pet_friendly_hotel" => [
        "dist/img/logopartner.png",
        "dist/img/logopartner.png",
    ],
    "pet_hotel" => [
        "dist/img/logopartner.png",
        "dist/img/logopartner.png",
    ]
];

$reviews = [
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-blue"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-yellow"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-blue"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-yellow"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-blue"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-yellow"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-blue"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-yellow"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-blue"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-yellow"),
    new Review("dist/img/review_pic.png", "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว", "bg-blue"),
];
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
            font-size: 18px;
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

        .review-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            justify-items: center;
        }

        .review-box {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            width: cover;
            height: 300px;
            background-color: white;
        }

        .review-box img {
            width: 100%;
            height: 80%;
            object-fit: cover;
        }

        .review-box p {
            margin: 0;
            padding: 10px;
            font-size: 14px;
            text-align: center;
        }

        .review-box:hover {
            transform: scale(1.05);
        }

        .bg-yellow {
            background-color: #FFD700 !important;
        }

        .bg-blue {
            background-color: #23456B !important;
            color: #fff;
        }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            top: 500px;
            width: 80%;
            transform: translateY(-50%);
            left: 10%;
        }

        .pagination i {
            font-size: 2em;
            cursor: pointer;
            background-color: white;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .pagination i#prev-btn {
            margin-left: -50px;
            /* Negative margin to position correctly */
        }

        .pagination i#next-btn {
            margin-right: -50px;
            /* Negative margin to position correctly */
        }

        .page-indicators {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .page-indicators span {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ddd;
            margin: 0 5px;
            display: inline-block;
        }

        .page-indicators .active {
            background-color: #23456B;
        }

        @media (max-width: 1200px) {
            .review-content .col-md-3 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .review-box {
                width: 100%;
                height: auto;
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

            .review-box {
                border: 1px solid #eaeaea;
                border-radius: 5px;
                overflow: hidden;
                transition: all 0.3s ease;
                width: 250px;
                height: 280px;
                margin: 15px;
            }

            .review-box img {
                width: 100%;
                height: 80%;
                object-fit: cover;
            }

            .review-box p {
                font-size: 12px;
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

            .review-grid {
                grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            }

            .review-box {
                width: 100%;
                height: 150px;
            }

            .review-box img {
                height: 70%;
            }

            .review-box p {
                font-size: 9px;
            }

            .review-content .col-md-3 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .img_pic_title {
                display: none;
            }

            .pagination {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('dist/img/slide_home_page/1.png') ?>" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('dist/img/slide_home_page/2.png') ?>" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('dist/img/slide_home_page/3.png') ?>" class="d-block w-100" alt="Slide 3">
                </div>
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
                <div class="about-us-content">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/Yovlj-mSGrM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="text-wrapper">
                        <h2>ABOUT US</h2>
                        <p>เราเข้าใจถึงความรักและความผูกพันระหว่างสัตว์เลี้ยงกับเจ้าของ ซึ่งในปัจจุบันสัตว์เลี้ยงเปรียบเสมือนสมาชิกในครอบครัว ด้วยเหตุนี้ผู้เชี่ยวชาญของเราจึงก่อตั้ง Pet Journey Agency ขึ้นมา เพื่อทำให้การนำเข้า-ส่งออกสัตว์เลี้ยงเป็นเรื่องง่ายและสะดวกมากขึ้น ไม่ว่าจะเป็นการพาน้องหมาน้องแมวไปยังต่างประเทศหรือกลับมาประเทศไทยสำหรับเจ้าของที่ต้องการใหสัตว์เลี้ยงเดินทางไปด้วย</p>
                        <div class="about-us-button">
                            <a href="#">View More</a>
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
                <h2>OUR <span>SERVICE</span></h2>
            </div>
            <div class="row">
                <?php foreach ($services as $service) { ?>
                    <div class="col-lg-3 col-md-4 col-6 mb-3">
                        <div class="service-item fade-in">
                            <img src="<?php echo base_url($service->image); ?>" alt="<?php echo $service->title; ?>">
                            <h3 class="p-2"><?php echo $service->title; ?></h3>
                            <span class="badge badge-pill badge-primary">View More</span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- sec review -->
    <section class="review-section">
        <div class="review-title">
            <h2>REVIEW</h2>
            <img class="img_pic_title" src="<?php echo base_url('dist/img/review_title.png'); ?>" alt="Review Image">
        </div>
        <div class="container">
            <div id="review-grid" class="review-grid">
                <!-- Reviews will be inserted here -->
            </div>
            <div class="pagination">
                <i class="fas fa-arrow-circle-left" id="prev-btn" onclick="changePage(-1)"></i>
                <i class="fas fa-arrow-circle-right" id="next-btn" onclick="changePage(1)"></i>
            </div>
            <div class="page-indicators" id="page-indicators">
                <!-- Page indicators will be inserted here -->
            </div>
        </div>
    </section>

    <!-- sec partner -->
    <section class="partner-section">
        <div class="line-partner"></div>
        <div class="container">
            <div class="partner-title" style="text-align: center; margin-bottom: 30px;">
                <h2 style="font-size: 50px; font-weight: 700; color: #23456B; display: flex; align-items: center; justify-content: flex-start;">
                    OUR PARTNER
                    <img class="icontitle_partner" src="<?= base_url('dist/svg/icontitle_partner.svg') ?>" width="80" height="80" style="margin-left: 7px;">
                </h2>
                <span style="font-size: 15pt; color: #424141;">
                    Pet Journey Agency เข้าใจถึงความสำคัญของความรักและความผูกพันระหว่างสัตว์เลี้ยงกับเจ้าของเสมือนสมาชิกครอบครัว ดังนั้น เราได้รวบรวมพันธมิตรที่มีความเชี่ยวชาญและมืออาชีพเพื่อให้บริการที่ดีที่สุดแก่ลูกค้าของเรา
                </span>
            </div>
            <div class="partner-category">
                <h3 class="title-animalclinic">
                    Animal clinic
                    <img src="<?= base_url('dist/svg/partnericon1.svg') ?>" width="20" height="20" style="margin-left: 7px;">
                </h3>
                <div class="partner-logos">
                    <?php foreach ($partners['animal_clinic'] as $partner) { ?>
                        <div class="partner-logo">
                            <img src="<?php echo base_url($partner); ?>" alt="partnerlogo">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="partner-category">
                <h3 class="title-petfriendly">
                    Pet friendly hotel
                    <img src="<?= base_url('dist/svg/partnericon2.svg') ?>" width="20" height="20" style="margin-left: 7px;">
                </h3>
                <div class="partner-logos">
                    <?php foreach ($partners['pet_friendly_hotel'] as $partner) { ?>
                        <div class="partner-logo">
                            <img src="<?php echo base_url($partner); ?>" alt="partnerlogo">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="partner-category">
                <h3 class="title-pethotel">
                    Pet hotel
                    <img src="<?= base_url('dist/svg/partnericon3.svg') ?>" width="20" height="20" style="margin-left: 7px;">
                </h3>
                <div class="partner-logos">
                    <?php foreach ($partners['pet_hotel'] as $partner) { ?>
                        <div class="partner-logo">
                            <img src="<?php echo base_url($partner); ?>" alt="partnerlogo">
                        </div>
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
                รับใบเสนอราคาของคุณได้ที่นี่
                <div class="text-success mx-2">ฟรี</div>
                ไม่มีค่าใช้จ่าย!
            </h3>
            <div class="container mt-3">
                <div class="row">
                    <div class="form-group col-md-4">
                        <div class="d-flex">ชื่อ<div style="color: red;">*</div>
                        </div>
                        <input class="form-control" type="text" id="name" name="name" placeholder="ระบุชื่อผู้ติดต่อ">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">หมายเลขโทรศัพท์<div style="color: red;">*</div>
                        </div>
                        <input class="form-control" type="text" id="phone" name="phone" placeholder="ระบุชื่อผู้ติดต่อหมายเลขโทรศัพท์">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">อีเมล<div style="color: red;">*</div>
                        </div>
                        <input class="form-control" type="email" id="email" name="email" placeholder="ระบุอีเมล">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">วันเดินทาง</div>
                        <input class="form-control" type="date" id="travel-date" name="travel-date">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">ประเทศต้นทาง</div>
                        <select class="form-control" id="origin-country" name="origin-country">
                            <option value="">เช่น ไทย (TH)</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">ประเทศปลายทาง</div>
                        <select class="form-control" id="destination-country" name="destination-country">
                            <option value="">เช่น เกาหลี (KR)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">รูปแบบขนส่งสัตว์เลี้ยง</div>
                        <select class="form-control" id="pet-transport" name="pet-transport">
                            <option value="">เลือกรูปแบบขนส่งสัตว์เลี้ยง</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>
                <div class="form-group text-left">
                    <label for="services">กรุณาเลือกบริการที่ท่านต้องการ:</label><br>
                    <div id="services-container"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group col-md-4">
                        <div class="d-flex">ชนิดสัตว์</div>
                        <input type="text" class="form-control" id="pet-type" name="pet-type" placeholder="ระบุชนิดสัตว์">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">สายพันธุ์</div>
                        <input type="text" class="form-control" id="breed" name="breed" placeholder="ระบุสายพันธุ์">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">อายุ</div>
                        <input type="text" class="form-control" id="age" name="age" placeholder="ระบุอายุ">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">น้ำหนัก</div>
                        <input type="text" class="form-control" id="weight" name="weight" placeholder="ระบุน้ำหนัก">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">หมายเหตุ</div>
                        <input type="text" class="form-control" id="reason" name="reason" placeholder="ระบุหมายเหตุ">
                    </div>
                </div>
                <button type="button" class="btn btn-dark"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;ส่งใบเสนอราคา</button>
            </div>
        </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observerOptions = {
                threshold: 0.1
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

        // Object containing service data
        const services = [{
                id: 'service1',
                value: 'import-export',
                label: 'บริการนำเข้าและส่งออกสัตว์เลี้ยง'
            },
            {
                id: 'service2',
                value: 'checkup',
                label: 'บริการตรวจสัตว์เลี้ยง'
            },
            {
                id: 'service3',
                value: 'vet',
                label: 'บริการด้านสัตวแพทย์'
            },
            {
                id: 'service4',
                value: 'transport',
                label: 'บริการรับส่งสัตว์เลี้ยง'
            },
            {
                id: 'service5',
                value: 'booking',
                label: 'บริการจองตั๋วเครื่องบินสำหรับสัตว์เลี้ยง'
            },
            {
                id: 'service6',
                value: 'hotel',
                label: 'โรงแรมสำหรับสัตว์เลี้ยง'
            },
            {
                id: 'service7',
                value: 'pet-friendly-hotel',
                label: 'โรงแรมที่เป็นมิตรกับสัตว์เลี้ยง (Pet Friendly)'
            },
            {
                id: 'service8',
                value: 'international-transport',
                label: 'บริการขนส่งสัตว์เลี้ยงข้ามต่างประเทศ'
            },
            {
                id: 'service9',
                value: 'other',
                label: 'อื่น ๆ'
            }
        ];

        // Function to generate checkboxes
        function generateCheckboxes() {
            const container = document.getElementById('services-container');
            services.forEach(service => {
                const div = document.createElement('div');
                div.className = 'form-check';

                const input = document.createElement('input');
                input.className = 'form-check-input';
                input.type = 'checkbox';
                input.id = service.id;
                input.name = 'services';
                input.value = service.value;

                const label = document.createElement('label');
                label.className = 'form-check-label';
                label.htmlFor = service.id;
                label.textContent = service.label;

                div.appendChild(input);
                div.appendChild(label);
                container.appendChild(div);
            });
        }

        generateCheckboxes();
    </script>
    <script>
        const reviews = [{
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-blue"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-yellow"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-blue"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-yellow"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-blue"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-yellow"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-blue"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-yellow"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-blue"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-yellow"
            },
            {
                image: "dist/img/review_pic.png",
                text: "ข้อความตัวอย่างรีวิวสั้น ๆ ข้อความตัวอย่างรีวิว",
                bgColor: "bg-blue"
            }
        ];

        let currentPage = 1;
        let reviewsPerPage = 8; // Default for desktop

        function setReviewsPerPage() {
            if (window.innerWidth < 768) {
                reviewsPerPage = 6; // Mobile
            } else if (window.innerWidth < 1150) {
                reviewsPerPage = 6; // Tablet
            } else {
                reviewsPerPage = 8; // Desktop
            }
        }

        function displayReviews(page) {
            setReviewsPerPage();
            const startIndex = (page - 1) * reviewsPerPage;
            const endIndex = page * reviewsPerPage;
            const reviewsToShow = reviews.slice(startIndex, endIndex);

            const reviewGrid = document.getElementById('review-grid');
            reviewGrid.innerHTML = '';
            reviewsToShow.forEach(review => {
                const reviewBox = document.createElement('div');
                reviewBox.classList.add('review-box', review.bgColor);
                reviewBox.innerHTML = `
                    <img src="<?= base_url('dist/img/review_pic.png') ?>">
                    <p>${review.text}</p>
                `;
                reviewGrid.appendChild(reviewBox);
            });

            document.getElementById('prev-btn').disabled = page === 1;
            document.getElementById('next-btn').disabled = endIndex >= reviews.length;
        }

        function changePage(direction) {
            currentPage += direction;
            displayReviews(currentPage);
        }

        window.addEventListener('resize', () => {
            displayReviews(currentPage);
        });

        document.addEventListener('DOMContentLoaded', function() {
            displayReviews(currentPage);
        });
    </script>
    <script>
        let currentPagePoint = 1;
        const totalPages = 3; // ตั้งค่าจำนวนหน้าทั้งหมดที่นี่
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

            // เพิ่มตรรกะในการดึงและแสดงเนื้อหาหน้าใหม่ที่นี่
            console.log('หน้าปัจจุบัน:', currentPagePoint);

            updatePageIndicators();
        }

        document.getElementById('prev-btn').style.visibility = 'hidden';
        updatePageIndicators();
    </script>
    <script>
        async function fetchCountries() {
            const response = await fetch('<?= base_url('public/data/countries.json'); ?>');
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            const countries = await response.json();
            return countries;
        }

        function populateSelect(elementId, countries, language) {
            const select = document.getElementById(elementId);
            countries.forEach(country => {
                const option = document.createElement('option');
                option.value = country.code;
                option.text = language === 'en' ? `${country.name_en} (${country.code})` : `${country.name_th} (${country.code})`;
                select.appendChild(option);
            });
        }

        fetchCountries().then(countries => {
            populateSelect('origin-country', countries, 'th');
            populateSelect('destination-country', countries, 'th');
        }).catch(error => {
            console.error('Failed to fetch countries:', error);
        });
    </script>
</body>

</html>