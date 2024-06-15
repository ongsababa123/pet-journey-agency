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
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .icon-spacing {
            margin-right: 10px;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .navbar-custom {
            background-color: #ffffff;
            border-bottom: 1px solid #eaeaea;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #000000;
        }

        .carousel-indicators li {
            background-color: #fff;
            border-radius: 50%;
            width: 12px;
            height: 12px;
        }

        .carousel-indicators .active {
            background-color: #000;
        }

        .about-us-section {
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        .about-us-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background-color: #fff;
            z-index: 1;
        }

        .about-us-section::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background-color: #23456B;
            z-index: 1;
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
            background-color: #00A4E4;
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

        @media (max-width: 768px) {
            .about-us-content {
                flex-direction: column;
            }

            .video-wrapper,
            .text-wrapper {
                width: 100%;
                height: auto;
            }

            .video-wrapper {
                margin-bottom: 20px;
            }

            .header-bottom {
                display: none;
            }
        }

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

        .service-item .badge-pill {
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

        .paw-left,
        .paw-right {
            position: absolute;
            width: 50px;
            z-index: 1;
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
                font-size: 13px;
                margin-top: 5px;
            }

            .service-item .badge-pill {
                margin-bottom: 10px;
                font-size: 8px;
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
                <div class="paw-prints">
                    <img src="<?= base_url('dist/img/iconfeetpet.png') ?>" alt="Paw Prints" class="paw-prints">
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
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <div class="service-item fade-in">
                            <img src="<?php echo base_url($service->image); ?>" alt="<?php echo $service->title; ?>">
                            <h3 class="p-2"><?php echo $service->title; ?></h3>
                            <span class="badge badge-pill badge-primary">View More</span>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- <img src="<?= base_url('dist/img/iconfeetpet.png') ?>" class="paw-left" alt="Paw Print">
            <img src="<?= base_url('dist/img/iconfeetpet.png') ?>" class="paw-right" alt="Paw Print"> -->
        </div>
    </section>
    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        });
    </script>
</body>

</html>