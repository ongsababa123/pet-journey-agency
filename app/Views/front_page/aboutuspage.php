<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Journey Agency | About Us</title>
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

        .about-us-section {
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        .about-us {
            padding: 20px 150px 0 150px;
        }

        .aboutus-pic {
            max-width: 100%;
            display: flex;
            align-items: flex-start;
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
            position: relative;
            text-align: center;
            background-color: #0c2d6e;
            padding: 20px;
            color: white;
        }

        .slideboxr {
            position: relative;
            width: 70%;
            margin: auto;
            overflow: hidden;
        }

        .slideboxs {
            display: flex;
            transition: transform 0.5s ease-in-out;
            gap: 30px;
        }

        .slidebox {
            background-color: #fff;
            box-sizing: border-box;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            min-width: calc(25% - 30px);
        }

        .slidebox img {
            width: 100%;
            border-radius: 10px;
        }

        .slidebox p {
            margin: 10px 0 0;
        }

        .position {
            color: #0198B4;
        }

        .name {
            color: #0c2d6e;
            font-weight: 500;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: 40px;
            height: 40px;
            padding: 10px;
            margin-top: -20px;
            color: #0c2d6e;
            transition: 0.6s ease;
            user-select: none;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            z-index: 10;
        }

        .prev {
            left: 5%;
        }

        .next {
            right: 5%;
        }

        .prev:hover,
        .next:hover {
            background-color: #fcd20f;
        }

        .prev i,
        .next i {
            font-size: 18px;
        }

        @media (max-width: 1300px) {
            .name {
                font-size: 10pt;
            }

            .position {
                font-size: 8pt;
            }
        }

        @media (max-width: 1000px) {
            .slideboxs {
                gap: 20px;
            }

            .slidebox {
                min-width: calc(33.5% - 20px);
            }
        }

        @media (max-width: 780px) {
            .name {
                font-size: 8pt;
            }

            .position {
                font-size: 7pt;
            }

            .about-us {
                padding: 20px 100px 0 100px;
            }

            .aboutus-text {
                font-size: 13pt;
            }
        }

        @media (max-width: 600px) {
            .slideboxs {
                gap: 10px;
            }

            .slidebox {
                min-width: calc(50% - 10px);
                border-radius: 7px;
            }

            .prev,
            .next {
                width: 20px;
                height: 20px;
            }

            .prev i,
            .next i {
                font-size: 10pt;
            }
        }


        @media (max-width: 450px) {
            .veterinary-team-section h2 {
                font-size: 15pt;
            }

            .name {
                font-size: 7pt;
            }

            .position {
                font-size: 6pt;
            }

            .about-us {
                padding: 20px 50px 0 50px;
            }

            .aboutus-title {
                font-size: 20pt;
            }

            .aboutus-text {
                font-size: 10pt;
            }
        }

        @media (max-width: 450px) {
            .name {
                font-size: 5pt;
            }

            .position {
                font-size: 5pt;
            }

            .slidebox {
                border-radius: 5px;
            }
        }



        /* pet-story-section */
        .pet-story-section {
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        .petstorypic {
            width: 100px;
        }

        .content-container .section {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content-container .section img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
        }

        .content-container .section .content {
            flex: 1;
            margin-left: 20px;
        }

        .content-container .section:nth-child(even) .content {
            order: -1;
            margin-left: 0;
            margin-right: 20px;
        }

        .content-container .section h3 {
            color: #333;
        }

        .content-container .section p {
            color: #4A4A4A;
            font-size: 16px;
            line-height: 1.6;
        }

        .title-pet-story {
            font-size: 30pt;
            font-weight: 500;
        }

        @media (max-width: 780px) {
            .title-pet-story {
                font-size: 20pt;
            }
        }

        @media (max-width: 600px) {
            .title-pet-story {
                font-size: 15pt;
            }

            .title-story-pet-box {
                font-size: 13pt;
            }

            .text-story-pet-box {
                font-size: 10pt;
            }
        }

        @media (max-width: 450px) {
            .title-pet-story {
                font-size: 12pt;
            }

            .title-story-pet-box {
                font-size: 10pt;
            }

            .text-story-pet-box {
                font-size: 8pt;
            }
        }
    </style>
</head>
<?php
$cut_url = explode('/', $uri_menu);
?>

<body>
    <!-- sec slide page -->
    <section>
        <?php include 'app/Views/layout/slide.php'; ?>
    </section>

    <!-- sec about us -->
    <section class="about-us-section">
        <div class="row about-us" data-aos="fade-up" data-aos-duration="500">
            <div class="col-lg-7">
                <h1 class="aboutus-title d-flex">
                    <div id="ab_title1">About</div>&nbsp;
                    <div id="ab_title2" style="color: #FAD046;">Us</div>
                </h1>
                <p class="aboutus-text">
                    <?= $cut_url[0] == 'th' ? $about_page[0]['detail_page'] : $about_page[1]['detail_page']; ?>
                </p>
            </div>
            <div class="col-lg-5 aboutus-pic">
                <div>
                    <img src="<?= base_url('dist/img/about-team/') . ($cut_url[0] == 'th' ? $about_page[0]['image_page_path'] : $about_page[1]['image_page_path']); ?>" width="100%" alt="Pets">
                </div>
            </div>
        </div>
    </section>

    <!-- sec veterinary team -->
    <section class="veterinary-team-section">
        <div class="d-flex justify-content-center mb-4">
            <h2 id="ab_title_team1" style="color: #ffffff;">ทีม</h2>
            <h2 id="ab_title_team2" style="color: #FAD046;">ของเรา</h2>
        </div>
        <div class="slideboxr">
            <div class="slideboxs" id="slideboxs-container"></div>
        </div>
        <button class="prev" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></button>
        <button class="next" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></button>
    </section>

    <!-- sec pet story -->
    <section class="pet-story-section">
        <div class="row d-flex align-items-center justify-content-center mb-4">
            <img class="petstorypic" src="<?= base_url('dist/img/about_us_cat_dog.png') ?>" alt="PetStory">
            <span id="ab_title_story1" class="title-pet-story" style="color: #fcd20f; margin-right: 1%;">สร้างความสุข</span>
            <span id="ab_title_story2" class="title-pet-story" style="color: #4A4A4A;">สบายให้กับเพื่อนสัตว์ของคุณ</spa>
        </div>
        <div class="container" id="content-container">
            <!-- Sections will be added here by JavaScript -->
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
        var team_data = <?php echo json_encode($team); ?>;

        const slideboxsContainer = document.getElementById('slideboxs-container');

        team_data.forEach((doctor) => {
            const slidebox = document.createElement('div');
            slidebox.classList.add('slidebox');
            slidebox.innerHTML = `
            <img src="${base_url}/dist/img/team/${doctor.image_path}">
            <?php if ($cut_url[0] == 'th') : ?>
            <p class="name">${doctor.name_last_name_th}</p>
            <p class="position">${doctor.position_th}</p>
            <?php else : ?>
            <p class="name">${doctor.name_last_name_en}</p>
            <p class="position">${doctor.position_en}</p>
            <?php endif; ?>
        `;
            slideboxsContainer.appendChild(slidebox);
        });

        let slideboxIndex = 0;
        const slideboxs = document.querySelector('.slideboxs');
        const totalSlides = Math.ceil(team_data.length / 4);

        function nextSlide() {
            if (slideboxIndex < totalSlides - 1) {
                slideboxIndex++;
            } else {
                slideboxIndex = 0;
            }
            updateSlidePosition();
        }

        function prevSlide() {
            if (slideboxIndex > 0) {
                slideboxIndex--;
            } else {
                slideboxIndex = totalSlides - 1;
            }
            updateSlidePosition();
        }

        function updateSlidePosition() {
            slideboxs.style.transform = 'translateX(' + (-slideboxIndex * 100) + '%)';
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateSlidePosition();
        });
    </script>
    <script>
        var more_about = <?php echo json_encode($more_about); ?>;
        const container = document.getElementById('content-container');
        more_about.forEach((item, index) => {
            const section = document.createElement('div');
            section.className = 'section row align-items-start mb-4';

            const imgContainer = document.createElement('div');
            imgContainer.className = 'col-6';
            const img = document.createElement('img');
            img.src = `${base_url}/dist/img/about-more/${item.image_path}`;
            img.style.maxWidth = '100%';
            imgContainer.appendChild(img);

            const content = document.createElement('div');
            content.className = 'content col-6 text-start';

            const title = document.createElement('h4');
            <?php if ($cut_url[0] == 'th') : ?>
                title.textContent = item.topic_name_th;
            <?php else : ?>
                title.textContent = item.topic_name_en;
            <?php endif ?>
            title.style.color = '#002157';
            title.className = 'title-story-pet-box';

            const text = document.createElement('p');
            <?php if ($cut_url[0] == 'th') : ?>
                text.textContent = item.detail_th;
            <?php else : ?>
                text.textContent = item.detail_en;
            <?php endif ?>
            text.className = 'text-story-pet-box';

            content.appendChild(title);
            content.appendChild(text);

            if (index % 2 === 0) {
                section.appendChild(imgContainer);
                section.appendChild(content);
                section.setAttribute('data-aos', 'fade-right');
                section.setAttribute('data-aos-duration', '1500');

            } else {
                section.appendChild(content);
                section.appendChild(imgContainer);
                section.setAttribute('data-aos', 'fade-left');
                section.setAttribute('data-aos-duration', '1500');
            }

            container.appendChild(section);
        });
    </script>
</body>

</html>