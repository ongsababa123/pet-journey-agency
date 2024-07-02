<?php
class Review
{
    public $image;
    public $text;
    public $bgColor;

    public function __construct($image, $text)
    {
        $this->image = $image;
        $this->text = $text;
    }
}

$reviews = [
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit.")
];

$data = 
[
    [
        "box" => 1,
        "text" => "บริการตรวจสัตว์เลี้ยง",
        "image" => base_url("dist/img/review_work1.png"),
        "textColor" => "#ffffff"
    ],
    [
        "box" => 2,
        "text" => "ทำวัคซีนอย่างมืออาชีพ",
        "image" => "",
        "textColor" => "#ffffff",
        "backgroundColor" => "#FF8B00"
    ],
    [
        "box" => 3,
        "text" => "",
        "image" => base_url("dist/img/review_work3.png")
    ],
    [
        "box" => 4,
        "text" => "เบื่อแล้วน้ำพริกลงเรือ อยากดื่มน้ำเกลือโรงพยาบาล",
        "image" => base_url("dist/img/review_work3.png"),
        "textColor" => "#ffffff"
    ],
    [
        "box" => 5,
        "text" => "เบื่อแล้วน้ำพริกลงเรือ อยากดื่มน้ำเกลือโรงพยาบาล",
        "image" => base_url("dist/img/review_work3.png"),
        "textColor" => "#ffffff"
    ],
    [
        "box" => 6,
        "text" => "เบื่อแล้วน้ำพริกลงเรือ อยากดื่มน้ำเกลือโรงพยาบาล",
        "image" => base_url("dist/img/review_work3.png"),
        "textColor" => "#ffffff"
    ]
];
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <style>
        * {
            font-family: 'Kanit', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .review-section {
            padding: 50px 0;
            text-align: center;
        }

        .review-title {
            margin-bottom: 30px;
            color: #ffb629;
            font-size: 24px;
            font-weight: bold;
        }

        .review-grid,
        .review-grid-mobile {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            justify-items: center;
        }

        .review-grid-mobile {
            display: none;
        }

        .review-box {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            width: 100%;
            max-width: 250px;
            background-color: white;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .review-box img {
            width: 100%;
            height: auto;
            padding: 15px 15px 0;
            background-color: white;
            border-radius: 10px;
        }

        .review-box:hover {
            transform: scale(1.025);
        }

        .review-box p {
            margin: 0;
            color: #fff;
            padding: 10px;
            font-size: 13px;
            text-align: center;
            border-radius: 10px;
            background-color: #23456B;
            display: flex;
            align-items: center;
            height: 100px;
        }

        .icon-quote-left {
            margin-top: -55px;
        }

        .icon-quote-right {
            margin-bottom: -55px;
        }

        .dog-icon {
            position: absolute;
            top: 420px;
            right: 0px;
            z-index: 1;
            width: 180px;
        }

        .feetpet-icon1 {
            position: absolute;
            top: 600px;
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
            top: 2000px;
            left: 37px;
            z-index: 1;
            width: 100px;
        }

        .feetpet-icon4 {
            position: absolute;
            top: 2600px;
            right: 37px;
            z-index: 1;
            width: 100px;
        }

        .review-buttons {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: center;
        }

        .review-buttons-mobile {
            display: none;
        }

        @media (max-width: 1240px) {
            .review-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .review-box p {
                font-size: 12px;
            }

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
            .review-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .review-box {
                max-width: 200px;
            }

            .review-box p {
                font-size: 9px;
                height: 80px;
            }
        }

        @media (max-width: 767.98px) {
            .review-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .review-box {
                max-width: 150px;
            }

            .review-box img {
                padding: 9px 9px 0;
                border-radius: 8px;
            }

            .review-box p {
                font-size: 8px;
                height: 75px;
                border-radius: 8px;
            }

            .dog-icon {
                width: 140px;
            }
        }

        @media (max-width: 575.98px) {
            .review-grid {
                display: none;
            }

            .review-grid-mobile {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 15px;
                justify-items: center;
            }

            .review-box {
                max-width: 100%;
            }

            .review-box img {
                padding: 5px 5px 0;
                border-radius: 6px;
            }

            .review-box p {
                font-size: 9px;
                height: 80px;
                border-radius: 6px;
            }

            .dog-icon {
                width: 130px;
            }

            .review-buttons {
                display: none;
            }

            .review-buttons-mobile {
                display: flex;
                justify-content: center;
            }

            .rv-btn-mb1 .rv-btn-mb2 {
                display: block;
            }
        }

        @media (max-width: 400px) {
            .review-grid-mobile {
                grid-template-columns: repeat(3, 1fr);
            }

            .review-box img {
                padding: 5px 5px 0;
                border-radius: 5px;
            }

            .review-box p {
                font-size: 6px;
                height: 70px;
                border-radius: 5px;
            }

            .dog-icon {
                width: 110px;
            }
        }

        /* New layout style */
        .layout-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(7, 200px);
            gap: 10px;
            margin-top: 50px;
        }

        .layout-box {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            background-color: #ccc;
            position: relative;
        }

        .layout-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .layout-box .text-content {
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .layout-box .text-content-img {
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            display: flex;
            justify-content: space-around;
            align-items: end;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(27, 59, 93, 0.75) 100%);
            color: #ffffff;
        }

        .box1 {
            grid-column: span 2;
            grid-row: span 1;
        }

        .box2 {
            grid-column: span 1;
            grid-row: span 1;
        }

        .box3 {
            grid-column: span 1;
            grid-row: span 1;
        }

        .box4 {
            grid-column: span 1;
            grid-row: span 2;
        }

        .box5 {
            grid-column: span 1;
            grid-row: span 2;
        }

        .box6 {
            grid-column: span 2;
            grid-row: span 2;
        }

        .box7 {
            grid-column: span 1;
            grid-row: span 1;
        }

        .box8 {
            grid-column: span 1;
            grid-row: span 1;
        }

        .box9 {
            grid-column: span 1;
            grid-row: span 1;
        }

        .box10 {
            grid-column: span 1;
            grid-row: span 1;
        }

        .box11 {
            grid-column: span 2;
            grid-row: span 3;
        }

        .box12 {
            grid-column: span 2;
            grid-row: span 1;
        }

        .box13 {
            grid-column: span 1;
            grid-row: span 1;
        }

        .box14 {
            grid-column: span 1;
            grid-row: span 2;
        }

        .box15 {
            grid-column: span 1;
            grid-row: span 1;
        }

        @media (max-width: 991.98px) {
            .layout-grid {
                grid-template-columns: repeat(4, 1fr);
                grid-template-rows: repeat(7, 115px);
            }

            .box1 {
                grid-column: span 2;
                grid-row: span 1;
            }

            .box2 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box3 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box4 {
                grid-column: span 1;
                grid-row: span 2;
            }

            .box5 {
                grid-column: span 1;
                grid-row: span 2;
            }

            .box6 {
                grid-column: span 2;
                grid-row: span 2;
            }

            .box7 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box8 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box9 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box10 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box11 {
                grid-column: span 2;
                grid-row: span 3;
            }

            .box12 {
                grid-column: span 2;
                grid-row: span 1;
            }

            .box13 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box14 {
                grid-column: span 1;
                grid-row: span 2;
            }

            .box15 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .layout-box .text-content,
            .layout-box .text-content-img {
                font-size: 9pt;
            }
        }

        @media (max-width: 575.98px) {
            .layout-grid {
                grid-template-columns: repeat(4, 1fr);
                grid-template-rows: repeat(7, 70px);
            }

            .box1 {
                grid-column: span 2;
                grid-row: span 1;
            }

            .box2 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box3 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box4 {
                grid-column: span 1;
                grid-row: span 2;
            }

            .box5 {
                grid-column: span 1;
                grid-row: span 2;
            }

            .box6 {
                grid-column: span 2;
                grid-row: span 2;
            }

            .box7 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box8 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box9 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box10 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box11 {
                grid-column: span 2;
                grid-row: span 3;
            }

            .box12 {
                grid-column: span 2;
                grid-row: span 1;
            }

            .box13 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .box14 {
                grid-column: span 1;
                grid-row: span 2;
            }

            .box15 {
                grid-column: span 1;
                grid-row: span 1;
            }

            .layout-box .text-content,
            .layout-box .text-content-img {
                font-size: 6pt;
            }
        }

        hr.custom-hr {
            border: none;
            height: 2px;
            background-color: #002157;
            width: 50%;
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <?php include 'app\Views\layout\slide.php'; ?>
    </section>

    <!-- sec reviews our customers -->
    <section>
        <div class="container mt-5">
            <h3 class="d-flex p-2" style="color: #23456B; font-weight: 600;">
                <div id="rv_title_review1" style="color: #FFB629;">รีวิว</div>
                <div id="rv_title_review2">จากลูกค้าของเรา</div>
            </h3>
            <!-- review-grid -->
            <div id="review-grid" class="review-grid" data-aos="fade-up" data-aos-duration="3000">
                <?php foreach ($reviews as $index => $review) : ?>
                    <div class="review-box <?php echo $review->bgColor; ?> review-item" style="display: <?php echo $index < 8 ? 'block' : 'none'; ?>;">
                        <img src="<?php echo base_url($review->image); ?>" alt="Review Image">
                        <p>
                            <i class="fas fa-quote-left icon-quote-left"></i>
                            <?php echo $review->text; ?>
                            <i class="fas fa-quote-right icon-quote-right"></i>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-3 review-buttons">
                <button id="load-more" type="button" class="btn btn-warning" style="margin-right: 10px;">
                    <i class="fas fa-search"></i>&nbsp; &nbsp;
                    <span id="rv_btn_view_more_reviews">รีวิวเพิ่มเติม</span>
                </button>
                <a href="https://www.facebook.com/petjourney.agency" class="btn btn-primary">
                    <i class="fab fa-facebook"></i>&nbsp; &nbsp;
                    <span id="rv_btn_view_more_on_facebook">รีวิวเพิ่มเติมบน Facebook</span>
                </a>
            </div>
            <!-- review-grid-mobile -->
            <div id="review-grid-mobile" class="review-grid-mobile" data-aos="fade-up" data-aos-duration="3000">
                <?php foreach ($reviews as $index => $review) : ?>
                    <div class="review-box <?php echo $review->bgColor; ?> review-item-mobile" style="display: <?php echo $index < 6 ? 'block' : 'none'; ?>;">
                        <img src="<?php echo base_url($review->image); ?>" alt="Review Image">
                        <p>
                            <i class="fas fa-quote-left icon-quote-left"></i>
                            <?php echo $review->text; ?>
                            <i class="fas fa-quote-right icon-quote-right"></i>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-3 review-buttons-mobile">
                <button id="load-more-mobile" type="button" class="btn btn-warning btn-sm rv-btn-mb1" style="margin-right: 10px;"><i class="fas fa-search"></i>&nbsp; &nbsp; รีวิวเพิ่มเติม</button>
                <a href="https://www.facebook.com/petjourney.agency" class="btn btn-primary">
                    <i class="fab fa-facebook"></i>&nbsp; &nbsp; รีวิวเพิ่มเติมบน Facebook
                </a>
            </div>
            <img class="dog-icon" src="<?= base_url('dist/img/dog1.png') ?>" width="200px" style="margin-left: 7px;">
            <img class="feetpet-icon1" src="<?= base_url('dist/img/iconfeetpet.png') ?>" width="200px" style="margin-left: 7px;">
        </div>
    </section>

    <hr class="custom-hr">

    <!-- sec team's work -->
    <section>
        <div class="container mt-5">
            <h3 class="d-flex p-2" style="color: #23456B; font-weight: 600;">
                <div id="rv_team_work_results1" style="color: #0198B4;">ผลงาน</div>
                <div id="rv_team_work_results2">การทำงานของทีม</div>
            </h3>
            <div class="layout-grid">
                <div class="layout-box box1" id="box-1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box2" id="box-2" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box3" id="box-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box4" id="box-4" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box5" id="box-5" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box6" id="box-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box7" id="box-7" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box8" id="box-8" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box9" id="box-9" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box10" id="box-10" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box11" id="box-11" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box12" id="box-12" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box13" id="box-13" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box14" id="box-14" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box15" id="box-15" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
                <div class="layout-box box16" id="box-16" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>

            </div>
        </div>
        <img class="feetpet-icon2" src="<?= base_url('dist/img/iconfeetpet.png') ?>" width="200px" style="margin-left: 7px;">
        <img class="feetpet-icon3" src="<?= base_url('dist/img/iconfeetpet.png') ?>" width="200px" style="margin-left: 7px;">
        <img class="feetpet-icon4" src="<?= base_url('dist/img/iconfeetpet.png') ?>" width="200px" style="margin-left: 7px;">
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Animate On Scroll -->
    <script>
        AOS.init();
    </script>

    <!-- reviews our customers -->
    <script>
        $(document).ready(function() {
            const reviewsPerClick = 4;

            $('#load-more').click(function() {
                console.log('load more')
                let totalReviews = $('#review-grid .review-item').length;
                let currentlyVisible = $('#review-grid .review-item:visible').length;

                if (currentlyVisible < totalReviews) {
                    $('#review-grid .review-item:lt(' + (currentlyVisible + reviewsPerClick) + ')').slideDown();
                }

                if ((currentlyVisible + reviewsPerClick) >= totalReviews) {
                    $('#load-more').hide();
                }
            });

            const reviewsPerClickMobile = 3;

            $('#load-more-mobile').click(function() {
                console.log('load more mobile')
                let totalReviewsMobile = $('#review-grid-mobile .review-item-mobile').length;
                let currentlyVisibleMobile = $('#review-grid-mobile .review-item-mobile:visible').length;

                if (currentlyVisibleMobile < totalReviewsMobile) {
                    $('#review-grid-mobile .review-item-mobile:lt(' + (currentlyVisibleMobile + reviewsPerClickMobile) + ')').slideDown();
                }

                if ((currentlyVisibleMobile + reviewsPerClickMobile) >= totalReviewsMobile) {
                    $('#load-more-mobile').hide();
                }
            });
        });
    </script>

    <!-- reviews team work -->
    <script>
        const base_url = '<?= base_url(); ?>';
        const data = [{
                box: 1,
                text: "บริการตรวจสัตว์เลี้ยง",
                image: base_url + "dist/img/review_work1.png",
                textColor: "#ffffff",
            },
            {
                box: 2,
                text: "ทำวัคซีนอย่างมืออาชีพ",
                image: "",
                textColor: "#ffffff",
                backgroundColor: "#FFB629"
            },
            {
                box: 3,
                text: "",
                image: base_url + "dist/img/review_work3.png"
            },
            {
                box: 4,
                text: "เบื่อแล้วน้ำพริกลงเรือ อยากดื่มน้ำเกลือโรงพยาบาล",
                image: base_url + "dist/img/review_work3.png",
                textColor: "#ffffff",
            },
            {
                box: 5,
                text: "เบื่อแล้วน้ำพริกลงเรือ อยากดื่มน้ำเกลือโรงพยาบาล",
                image: base_url + "dist/img/review_work3.png",
                textColor: "#ffffff",
            },
            {
                box: 6,
                text: "เบื่อแล้วน้ำพริกลงเรือ อยากดื่มน้ำเกลือโรงพยาบาล",
                image: base_url + "dist/img/review_work3.png",
                textColor: "#ffffff",
            }
        ];
        data.forEach(item => {
            const box = document.getElementById(`box-${item.box}`);

            if (item.image) {
                const img = document.createElement('img');
                img.src = item.image;
                box.appendChild(img);
                box.classList.add('has-image');
            }

            const textClass = item.image ? 'text-content-img' : 'text-content';
            if (item.text) {
                const text = document.createElement('div');
                text.classList.add(textClass);
                text.textContent = `“${item.text}”`;

                if (item.textColor) {
                    text.style.color = item.textColor;
                }

                if (item.backgroundColor) {
                    text.style.backgroundColor = item.backgroundColor;
                }

                box.appendChild(text);
            }
        });
    </script>
</body>

</html>