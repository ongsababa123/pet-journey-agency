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
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet, consectetur adipiscing elit.")
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
    <style>
        body {
            font-family: 'Kanit', sans-serif;
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

        .review-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            justify-items: center;
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
            z-index: 10;
            width: 180px;
        }

        .feetpet-icon {
            position: absolute;
            top: 600px;
            left: 37px;
            z-index: 10;
            width: 100px;
        }


        @media (max-width: 1200px) {
            .review-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .review-box p {
                font-size: 12px;
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
                grid-template-columns: repeat(3, 1fr);
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
        }

        @media (max-width: 400px) {
            .review-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .review-box {
                max-width: 100%;
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
                <div style="color: #FFB629;">รีวิว</div>
                จากลูกค้าของเรา
            </h3>
            <div class="review-grid">
                <?php foreach ($reviews as $review) : ?>
                    <div class="review-box <?php echo $review->bgColor; ?>">
                        <img src="<?php echo base_url($review->image); ?>" alt="Review Image">
                        <p>
                            <i class="fas fa-quote-left icon-quote-left"></i>
                            <?php echo $review->text; ?>
                            <i class="fas fa-quote-right icon-quote-right"></i>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-3" style="display: flex; justify-content: center;">
                <button type="button" class="btn btn-warning"><i class="fas fa-search"></i>&nbsp; &nbsp; รีวิวเพิ่มเติม</button>&nbsp; &nbsp;
                <button type="button" class="btn btn-primary"><i class="fab fa-facebook"></i>&nbsp; &nbsp; รีวิวเพิ่มเติมบน Facebook</button>
            </div>
            <img class="dog-icon" src="<?= base_url('dist/img/dog1.png') ?>" width="200px" style="margin-left: 7px;">
            <img class="feetpet-icon" src="<?= base_url('dist/img/iconfeetpet.png') ?>" width="200px" style="margin-left: 7px;">
        </div>

    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>