<!DOCTYPE html>
<html lang="en">

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

        body {
            background-color: #f8f9fa;
        }


        .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 0 120px;
            margin: 0;
        }

        .service-detail {
            background-color: #F5F5F5;
        }

        .service-list {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .service-header {
            background-color: #003366;
            color: #ffffff;
            padding: 10px;
            height: 100px;
            margin-top: 30px;
        }

        .service-header-partner {
            background-color: #003366;
            padding: 10px;
            height: 100px;
            margin-top: 30px;
        }

        .service-detail {
            flex: 2;
        }

        .service-list {
            flex: 1;
            max-width: 300px;
        }

        .service-main-content {
            padding: 20px;
            border-radius: 5px;
        }

        .service-main-content-img {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .service-main-content-img img {
            max-width: 50%;
            height: auto;
            display: block;
        }

        .service-list ul {
            list-style: none;
            padding: 0;
        }

        .service-list li {
            background-color: #f0f0f0;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .price-request {
            background-color: #003366;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }

        .price-request button {
            background-color: #ffcc00;
            color: #003366;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .partner-section {
            background-color: #ffffff;
            padding: 40px;
            text-align: center;
        }

        .partner-section h2 {
            color: #003366;
            margin-bottom: 20px;
        }

        .partner-logos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .partner-logos img {
            max-width: 150px;
            margin: 10px;
        }

        .partner-logos .logo {
            max-width: 150px;
            margin: 10px;
            flex: 1 1 20%;
            /* Adjust this value as needed */
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <?php include 'app\Views\layout\slide.php'; ?>
    </section>

    <!-- sec service page -->
    <section>
        <div class="flex-container">
            <div class="service-detail">
                <div class="service-header d-flex align-items-center">
                    <h4>บริการนำเข้าและส่งออก สัตว์เลี้ยงระหว่างประเทศ</h4>
                </div>
                <div class="service-main-content">
                    <div class="service-main-content-img">
                        <img src="<?= base_url('dist/img/pic_service_content.png') ?>" alt="Pet Service">
                    </div>
                    <p>บริการนำเข้า-ส่งออกสัตว์เลี้ยงระหว่างประเทศ เรามีเจ้าหน้าที่ดูแลการส่งสัตว์เลี้ยงเดินทางไปต่างประเทศหรือรับสัตว์เลี้ยงเดินทางเข้ามาในประเทศ เป็นสัตว์เลี้ยงทุกชนิด เช่น สุนัข แมว กระต่าย นก เป็นต้น ทางเรามี เจ้าหน้าที่ดูแลการจองตั๋วเครื่องบิน จัดทำเอกสาร นำสัตว์เลี้ยงไปขึ้นเครื่องที่สนามบิน ติดป้ายไว้ที่กรงของสัตว์เลี้ยงจนสัตว์เลี้ยงเดินทางถึงมือผู้รับ เจ้าของไม่ต้องเสียเวลา เราบริการนำเข้า-ส่งออกสัตว์เลี้ยงระหว่างประเทศ ด้วยความรักสัตว์ เหมือนสัตว์เลี้ยงเป็นหนึ่งในสมาชิกของครอบครัวของเรา</p>
                </div>
                <div class="service-header-partner d-flex align-items-center">
                    <h4 style="color: #ffcc00;">Our</h4>
                    <h4 style="color: #ffffff;">Partner</h4>
                </div>
                <div class="partner-section">
                    <div class="partner-logos" id="partner-logos">
                        <!-- Logo images will be inserted here by JavaScript -->
                    </div>
                </div>
            </div>
            <div class="service-list">
                <ul>
                    <li>นำเข้าและส่งออกสัตว์เลี้ยง</li>
                    <li>บริการตรวจสัตว์เลี้ยง</li>
                    <li>บริการขึ้นทะเบียนสัตว์เลี้ยง</li>
                    <li>บริการจองตั๋วเครื่องบิน</li>
                    <li>บริการจัดทำเอกสาร</li>
                    <li>โรงแรมสำหรับสัตว์เลี้ยง</li>
                    <li>โรงแรม Pet Friendly</li>
                    <li>จำหน่ายสัตว์เลี้ยงต่างประเทศ</li>
                </ul>
                <div class="price-request">
                    <p>ต้องการใบเสนอราคา</p>
                    <button>ขอใบเสนอราคา</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Define base URL
        const base_url = '<?= base_url(); ?>';

        // Partner logos object
        const partners = [{
                src: `${base_url}/dist/img/logo_mobile.png`,
                alt: 'Partner 1'
            },
            {
                src: `${base_url}/dist/img/logo_mobile.png`,
                alt: 'Partner 2'
            },
            {
                src: `${base_url}/dist/img/logo_mobile.png`,
                alt: 'Partner 3'
            },
            {
                src: `${base_url}/dist/img/logo_mobile.png`,
                alt: 'Partner 4'
            },
            {
                src: `${base_url}/dist/img/logo_mobile.png`,
                alt: 'Partner 5'
            },
            {
                src: `${base_url}/dist/img/logo_mobile.png`,
                alt: 'Partner 6'
            },
            {
                src: `${base_url}/dist/img/logo_mobile.png`,
                alt: 'Partner 7'
            }
        ];

        // Function to insert partner logos
        const partnerLogosContainer = document.getElementById('partner-logos');
        partners.forEach(partner => {
            const img = document.createElement('img');
            img.src = partner.src;
            img.alt = partner.alt;
            partnerLogosContainer.appendChild(img);
        });
    </script>
</body>

</html>