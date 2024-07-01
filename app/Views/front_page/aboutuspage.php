<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
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

        .veterinary-team-section h2 {
            color: #fff;
            font-size: 2em;
        }

        .veterinary-team-section h2 span {
            color: #fcd20f;
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
            .slidebox {
                min-width: calc(33.5% - 30px);
            }
        }

        @media (max-width: 780px) {
            .name {
                font-size: 8pt;
            }

            .position {
                font-size: 7pt;
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
        }

        @media (max-width: 450px) {
            .title-pet-story {
                font-size: 12pt;
            }
            .content-container .section h3 {
                color: #002157;
                font-size: 10pt;
            }

            .content-container .section p {
                color: #4A4A4A;
                font-size: 18px;
                line-height: 1.6;
            }
        }
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <?php include 'app\Views\layout\slide.php'; ?>
    </section>

    <!-- sec about us -->
    <section class="about-us-section">
        <div class="row about-us">
            <div class="col-lg-7">
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
            <div class="col-lg-5 aboutus-pic">
                <div>
                    <img src="<?= base_url('dist/img/pic_about_us.png') ?>" width="100%" alt="Pets">
                </div>
            </div>
        </div>
    </section>

    <!-- sec veterinary team -->
    <section class="veterinary-team-section">
        <h2>Veterinary <span>Team</span></h2>
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
            <span class="title-pet-story" style="color: #4A4A4A;"><span style="color: #fcd20f;">สร้างความสุข</span>สบายให้กับเพื่อนสัตว์ของคุณ</spa>
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

        // Veterinary Team Data
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

        const slideboxsContainer = document.getElementById('slideboxs-container');

        doctors.forEach((doctor) => {
            const slidebox = document.createElement('div');
            slidebox.classList.add('slidebox');
            slidebox.innerHTML = `
            <img src="${base_url}/${doctor.image}" alt="${doctor.name}">
            <p class="name">${doctor.name}</p>
            <p class="position">${doctor.position}</p>
        `;
            slideboxsContainer.appendChild(slidebox);
        });

        let slideboxIndex = 0;
        const slideboxs = document.querySelector('.slideboxs');
        const totalSlides = Math.ceil(doctors.length / 4);

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
        const data = [{
                image: 'dist/img/storypet1.png',
                title: 'ความรักที่ไม่ต้องการคำพูด',
                text: 'แมวตัวน้อยไม่จำเป็นต้องพูดอะไร แต่การนั่งข้างๆ เวลามีเจ้าของรู้สึกพอใจคือสัญญาณที่ทำให้รู้ว่าเป็นความรัก ความอบอุ่นในใจพวกเขา แต่การเล่นกับแมวและการดูแลเป็นสิ่งที่ทำให้รู้ว่าคุณรักเขามากแค่ไหน แมวจะมีการสัมผัสและรับรู้รู้สึกที่เจ้าของอยู่ด้วยตลอดเวลา'
            },
            {
                image: 'dist/img/storypet2.png',
                title: 'การดูแลอย่างใส่ใจ',
                text: 'การดูแลแมวไม่ใช่แค่การให้อาหารที่ดี ความสะอาดแต่เป็นการให้การดูแลทุกๆ รายละเอียด ตั้งแต่การเลือกอาหารที่มีคุณค่าทางโภชนาการ การจัดการการดูแลฟัน และการตรวจสุขภาพอย่างสม่ำเสมอ ทั้งนี้เพื่อสุขภาพและความสุขที่ดีต่อแมวตัวน้อยของคุณ'
            },
            {
                image: 'dist/img/storypet3.png',
                title: 'สุขภาพและความสุขเพื่อนสัตว์เลี้ยง',
                text: 'การดูแลสุขภาพสัตว์เลี้ยงเป็นสิ่งสำคัญที่คุณต้องทำเป็นประจำ สำคัญมากคือการพาไปพบสัตวแพทย์อย่างสม่ำเสมอเพื่อการตรวจร่างกายและการฉีดวัคซีน นอกจากนี้การเล่นและการออกกำลังกายกับสัตว์เลี้ยงก็เป็นสิ่งที่ทำให้พวกเขามีความสุข'
            }
        ];

        const container = document.getElementById('content-container');

        data.forEach((item, index) => {
            const section = document.createElement('div');
            section.className = 'section row align-items-start mb-4';

            const imgContainer = document.createElement('div');
            imgContainer.className = 'col-6';
            const img = document.createElement('img');
            img.src = `${base_url}/${item.image}`;
            img.alt = item.title;
            img.style.maxWidth = '100%';
            imgContainer.appendChild(img);

            const content = document.createElement('div');
            content.className = 'content col-6 text-start';

            const title = document.createElement('h4');
            title.textContent = item.title;
            title.style.color = '#002157';

            const text = document.createElement('p');
            text.textContent = item.text;
            text.style.fontSize = '16px';
            content.appendChild(title);
            content.appendChild(text);

            if (index % 2 === 0) {
                section.appendChild(imgContainer);
                section.appendChild(content);
            } else {
                section.appendChild(content);
                section.appendChild(imgContainer);
            }

            container.appendChild(section);
        });
    </script>
</body>

</html>