<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
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
            justify-content: center;
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

        .feetpet-icon {
            position: absolute;
            top: 600px;
            left: 37px;
            z-index: 1;
            width: 100px;
        }

        .review-buttons {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            /* Adjust as needed */
        }

        .review-buttons-mobile {
            display: none;
        }

        .btn-right {
            position: absolute;
            top: -350px;
            right: -50px;
            z-index: 1;
            font-size: 30px;
            color: #FFD700;
            cursor: pointer;
        }

        .btn-left {
            position: absolute;
            top: -350px;
            left: -50px;
            z-index: 1;
            font-size: 30px;
            color: #FFD700;
            cursor: pointer;
        }

        @media (max-width: 1240px) {
            .review-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .review-box p {
                font-size: 12px;
            }

            .feetpet-icon {
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

            .btn-right {
                position: absolute;
                top: -250px;
                right: -50px;
                z-index: 1;
                font-size: 30px;
                color: #FFD700;
                cursor: pointer;
            }

            .btn-left {
                position: absolute;
                top: -250px;
                left: -50px;
                z-index: 1;
                font-size: 30px;
                color: #FFD700;
                cursor: pointer;
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
                padding: 0px 40px;
            }

            .review-box {
                max-width: 100%;
            }

            .review-box img {
                padding: 5px 5px 0;
                border-radius: 6px;
            }

            .review-box p {
                font-size: 6px;
                height: 70px;
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
                color: #FFD700;
                font-size: 20px;
            }

            .btn-right-mobile {
                position: absolute;
                top: 420px;
                right: 8px;
                z-index: 1;
                font-size: 25px;
                color: #FFD700;
                cursor: pointer;
            }

            .btn-left-mobile {
                position: absolute;
                top: 420px;
                left: 8px;
                z-index: 1;
                font-size: 25px;
                color: #FFD700;
                cursor: pointer;
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
                font-size: 5px;
                height: 68px;
                border-radius: 5px;
            }

            .dog-icon {
                width: 110px;
            }

            .btn-right-mobile {
                position: absolute;
                top: 360px;
                right: 8px;
                z-index: 1;
                font-size: 25px;
                color: #FFD700;
                cursor: pointer;
            }

            .btn-left-mobile {
                position: absolute;
                top: 360px;
                left: 8px;
                z-index: 1;
                font-size: 25px;
                color: #FFD700;
                cursor: pointer;
            }
        }
    </style>
</head>

<body>
    <!-- sec reviews our customers -->
    <section>
        <div class="container mt-5">
            <!-- review-grid -->
            <div id="review-grid" class="review-grid">
                <?php foreach ($review_data as $index => $review) : ?>
                    <div class="review-box review-item-desktop" style="display: <?php echo $index < 8 ? 'block' : 'none'; ?>;">
                        <img src="<?= base_url('dist/img/review/' . $review['image_path']); ?>" alt="Review Image">
                        <p>
                            <i class="fas fa-quote-left icon-quote-left"></i>
                            <?php if ($cut_url['0'] == 'th') echo $review['detail_comment_th'];
                            else echo $review['detail_comment_en'] ?> 
                            <i class="fas fa-quote-right icon-quote-right"></i>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-3 review-buttons">
                <i class="fas fa-chevron-circle-left btn-left"></i>
                <i class="fas fa-chevron-circle-right btn-right"></i>
            </div>

            <!-- review-mobile -->
            <div id="review-grid-mobile" class="review-grid-mobile">
                <?php foreach ($review_data as $index => $review) : ?>
                    <div class="review-box review-item-mobile" style="display: <?php echo $index < 6 ? 'block' : 'none'; ?>;">
                        <img src="<?= base_url('dist/img/review/' . $review['image_path']); ?>" alt="Review Image">
                        <p>
                            <i class="fas fa-quote-left icon-quote-left"></i>
                            <?php if ($cut_url['0'] == 'th') echo $review['detail_comment_th'];
                            else echo $review['detail_comment_en'] ?>
                            <i class="fas fa-quote-right icon-quote-right"></i>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-3 review-buttons-mobile">
                <i class="fas fa-chevron-circle-left btn-left-mobile"></i>
                <i class="fas fa-chevron-circle-right btn-right-mobile"></i>
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentStartIndexDesktop = 0;
            var itemsPerPageDesktop = 8;
            var totalItemsDesktop = $(".review-item-desktop").length;

            function updateGridDesktop() {
                $(".review-item-desktop").hide();
                for (var i = currentStartIndexDesktop; i < currentStartIndexDesktop + itemsPerPageDesktop; i++) {
                    $(".review-item-desktop").eq(i).show();
                }
            }

            $(".btn-right").click(function() {
                if (currentStartIndexDesktop + itemsPerPageDesktop < totalItemsDesktop) {
                    currentStartIndexDesktop += itemsPerPageDesktop;
                    updateGridDesktop();
                }
            });

            $(".btn-left").click(function() {
                if (currentStartIndexDesktop - itemsPerPageDesktop >= 0) {
                    currentStartIndexDesktop -= itemsPerPageDesktop;
                    updateGridDesktop();
                }
            });

            updateGridDesktop();

            // Mobile
            var currentStartIndexMobile = 0;
            var itemsPerPageMobile = 6;
            var totalItemsMobile = $(".review-item-mobile").length;

            function updateGridMobile() {
                $(".review-item-mobile").hide();
                for (var i = currentStartIndexMobile; i < currentStartIndexMobile + itemsPerPageMobile; i++) {
                    $(".review-item-mobile").eq(i).show();
                }
            }

            $(".btn-right-mobile").click(function() {
                if (currentStartIndexMobile + itemsPerPageMobile < totalItemsMobile) {
                    currentStartIndexMobile += itemsPerPageMobile;
                    updateGridMobile();
                }
            });

            $(".btn-left-mobile").click(function() {
                if (currentStartIndexMobile - itemsPerPageMobile >= 0) {
                    currentStartIndexMobile -= itemsPerPageMobile;
                    updateGridMobile();
                }
            });

            updateGridMobile();
        });
    </script>
</body>

</html>