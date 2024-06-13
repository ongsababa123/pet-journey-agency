<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .icon-spacing {
            margin-right: 10px;
        }

        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
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
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .about-us-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-radius: 10px;
            overflow: hidden;
            height: 400px; /* Fix the height */
        }

        .video-wrapper {
            background-color: #ffd700;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0; /* Remove padding */
        }

        .video-wrapper iframe {
            width: 80%;
            height: 80%; /* Ensure it takes the full height */
            border-radius: 0;
        }

        .text-wrapper {
            width: 50%;
            background-color: #0198B4;
            padding: 30px;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: start;
            height: 100%;
        }

        .text-wrapper p {
            font-size: 19px;
            margin-bottom: 20px;
            line-height: 200%;
        }

        .about-us-button a {
            background-color: #FFD700;
            padding: 10px 20px;
            color: #000;
            border-radius: 5px;
            text-decoration: none;
            align-self: start;
        }
    </style>
</head>

<body>
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <!-- sec slide -->
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
                                    <span style="color: #FFD700; font-size: 30pt; font-weight: 700;">ABOUT US</span>
                                    <p>เราเข้าใจถึงความรักและความผูกพันระหว่างสัตว์เลี้ยงกับเจ้าของ ซึ่งในปัจจุบันสัตว์เลี้ยงเปรียบเสมือนสมาชิกในครอบครัว ด้วยเหตุนี้ผู้เชี่ยวชาญของเราจึงก่อตั้ง Pet Journey Agency ขึ้นมา เพื่อทำให้การนำเข้า-ส่งออกสัตว์เลี้ยงเป็นเรื่องง่ายและสะดวกมากขึ้น ไม่ว่าจะเป็นการพาน้องหมาน้องแมวไปยังต่างประเทศหรือกลับมาประเทศไทยสำหรับเจ้าของที่ต้องการใหสัตว์เลี้ยงเดินทางไปด้วย </p>
                                    <div class="about-us-button">
                                        <a href="#">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
