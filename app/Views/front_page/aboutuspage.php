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

        .veterinary-team-section {
            text-align: center;
            background-color: #0c2d6e;
            padding: 20px;
            color: white;
        }

        .veterinary-team-section h2 {
            color: #fff;
            font-size: 2em;
        }

        .veterinary-team-section h2 span {
            color: #fcd20f;
        }

        .slider {
            position: relative;
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .slides {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            box-sizing: border-box;
            padding: 10px;
        }

        .slide img {
            width: 100%;
            border-radius: 10px;
        }

        .slide p {
            margin: 10px 0 0;
        }

        .position {
            color: #00ffcc;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <?php include 'app/Views/layout/slide.php'; ?>
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
            <div class="col-5 d-flex align-items-center" style="padding: 5%;">
                <div>
                    <img src="<?= base_url('dist/img/pic_about_us.png') ?>" width="100%" alt="Pets">
                </div>
            </div>
        </div>
    </section>

    <!-- sec veterinary team -->
    <section class="veterinary-team-section">
        <h2>Veterinary <span>Team</span></h2>
        <div class="slider">
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <div class="slides" id="slides-container"></div>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const base_url = '<?= base_url('') ?>';

        const doctors = [
            {
                name: 'หมอสมชาย นามวงศ์',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอศศิธร พงษ์สุวรรณ',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมออนุชา ตรีวิจิตร',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอวาสนา ทองประเสริฐ',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอสมชาย นามวงศ์',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอศศิธร พงษ์สุวรรณ',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมออนุชา ตรีวิจิตร',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอวาสนา ทองประเสริฐ',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมออนุชา ตรีวิจิตร',
                position: 'สัตวแพทย์ทั่วไป',
                image: 'dist/img/pic_profile_about_us.png'
            },
            {
                name: 'หมอวาสนา ทองประเสริฐ',
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
                <p>${doctor.name}</p>
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
                slideIndex += slidesPerView;
            } else {
                slideIndex = 0;
            }
            updateSlidePosition();
        }

        function prevSlide() {
            if (slideIndex > 0) {
                slideIndex -= slidesPerView;
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
