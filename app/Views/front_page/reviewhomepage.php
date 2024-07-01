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
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet1, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet2, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet3, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet4, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet5, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet6, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet7, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet8, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet9, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet10, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet11, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet12, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet13, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet14, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet15, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet16, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet17, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet18, consectetur adipiscing elit."),
    new Review("dist/img/review_pic.png", "Lorem ipsum dolor sit amet19, consectetur adipiscing elit.")
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
            <div id="review-grid" class="review-grid" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0">
                <?php foreach ($reviews as $index => $review) : ?>
                    <div class="review-box <?php echo $review->bgColor; ?> review-item-desktop" style="display: <?php echo $index < 8 ? 'block' : 'none'; ?>;">
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
                <i class="fas fa-chevron-circle-left btn-left"></i>
                <i class="fas fa-chevron-circle-right btn-right"></i>
            </div>

            <!-- review-mobile -->
            <div id="review-grid-mobile" class="review-grid-mobile">
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
                <i class="fas fa-chevron-circle-left btn-left-mobile"></i>
                <i class="fas fa-chevron-circle-right btn-right-mobile"></i>
            </div>
    </section>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const base_url = '<?= base_url('') ?>';

        const doctors = [{
                name: 'หมอสมชาย นามวงศ์1',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอศศิธร พงษ์สุวรรณ2',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมออนุชา ตรีวิจิตร3',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอวาสนา ทองประเสริฐ4',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอสมชาย นามวงศ์5',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอศศิธร พงษ์สุวรรณ6',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมออนุชา ตรีวิจิตร7',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอวาสนา ทองประเสริฐ8',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอศศิธร พงษ์สุวรรณ9',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมออนุชา ตรีวิจิตร10',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอวาสนา ทองประเสริฐ11',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            }
        ];

        const slidesContainer = document.getElementById('slides-container');

        doctors.forEach(doctor => {
            const slide = document.createElement('div');
            slide.classList.add('slide');
            slide.innerHTML = `
        <img src="${base_url}${doctor.image}" alt="${doctor.name}">
        <p class="name">${doctor.name}</p>
        <p class="position">${doctor.position}</p>
    `;
            slidesContainer.appendChild(slide);
        });

        let slideIndex = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = doctors.length;
        const slidesPerView = 4;

        function nextSlide() {
            if (slideIndex < totalSlides - slidesPerView) {
                slideIndex++;
            } else {
                slideIndex = 0;
            }
            updateSlidePosition();
        }

        function prevSlide() {
            if (slideIndex > 0) {
                slideIndex--;
            } else {
                slideIndex = totalSlides - slidesPerView;
            }
            updateSlidePosition();
        }

        function updateSlidePosition() {
            slides.style.transform = 'translateX(' + (-slideIndex * 100 / slidesPerView) + '%)';
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateSlidePosition();
        });
    </script>
</body>

</html>