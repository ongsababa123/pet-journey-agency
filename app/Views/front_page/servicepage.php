<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page</title>
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
            position: relative;
            z-index: 1;
        }

        .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 0 120px;
            margin: 0;
            position: relative;
            z-index: 1;

        }

        .service-detail {
            background-color: #F5F5F5;
            flex: 2;
            padding-bottom: 500px;
        }

        .service-list {
            flex: 1;
            max-width: 300px;
            margin-left: 40px;
        }

        .service-header {
            background-color: #003366;
            color: #ffffff;
            padding: 0 40px;
            height: 90px;
            margin-top: 30px;
        }

        .service-header-partner {
            background-color: #003366;
            padding: 10px;
            height: 100px;
            margin-top: 30px;
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

        .service-list-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 80px;
        }

        .service-list-item {
            margin-top: 30px;
            list-style: none;
            padding: 20px;
            background-color: #FFDA56;
            border-radius: 10px;
        }

        .service-list-title {
            padding: 5px;
            font-size: 16pt;
            color: #1C1F35;
            font-weight: 600;
        }

        .service-list li {
            padding: 5px;
            font-size: 14px;
            margin-top: 10px;
            color: #003366;
            border-bottom: 1px solid #646161;
        }

        .service-list li:last-child {
            border-bottom: none;
        }

        .service-list li:hover {
            background-color: #fff;
            border-radius: 15px;
            border-bottom: none;
            cursor: pointer;
        }

        .service-list-active {
            background-color: #fff;
            border-radius: 15px;
            border-bottom: none;
        }

        .price-request {
            background-color: #003366;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-top: 20px;
        }

        .price-request span {
            font-weight: 200;
        }

        .partner-section {
            padding: 40px;
            text-align: center;
        }

        .partner-section h2 {
            color: #003366;
            margin-bottom: 50%;
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
            box-sizing: border-box;
        }

        .service-header-partner {
            position: relative;
            padding: 0 40px;
            height: 90px;
        }

        .partner-img {
            position: absolute;
            max-width: 180px;
            top: -75px;
            right: 0;
        }

        @media (max-width: 1200px) {
            .service-header {
                padding: 0 20px;
            }

            .service-header h4 {
                font-size: 15pt;
            }

            .service-main-content p {
                font-size: 11pt;
            }

            .service-header-partner {
                padding: 0 20px;
            }

            .partner-logos img {
                max-width: 100px;
                margin: 10px;
            }

            .service-detail {
                padding-bottom: 300px;
            }
        }

        @media (max-width: 1024px) {
            .price-request h5 {
                font-size: 13pt;
            }

            .price-request span {
                font-size: 10pt;
            }

            .service-detail {
                padding-bottom: 200px;
            }
        }

        @media (max-width: 900px) {
            .flex-container {
                padding: 0 50px;
            }

            .service-header {
                padding: 0 18px;
            }

            .service-header h4 {
                font-size: 13pt;
            }

            .service-main-content p {
                font-size: 10pt;
            }

            .service-list {
                margin-left: 20px;
            }
        }

        @media (max-width: 750px) {
            .flex-container {
                padding: 0 20px;
            }

            .service-list-item {
                padding: 15px;
                border-radius: 7px;
            }

            .service-list-title {
                font-size: 13pt;
            }

            .service-list li {
                font-size: 10pt;
            }

            .partner-logos img {
                max-width: 80px;
            }

        }

        @media (max-width: 600px) {
            .service-detail {
                flex: auto;
            }

            .service-list {
                max-width: 100%;
                margin-left: 0px;
            }

            .partner-img {
                width: 160px;
            }

            .flex-container {
                margin-bottom: 300px;
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
        <?php include 'app\Views\layout\slide.php'; ?>
    </section>

    <!-- sec service page -->
    <section>
        <div class="flex-container">
            <div class="service-detail" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1500">
                <div class="service-header d-flex align-items-center">
                    <h4 id="service_header_title">
                        <?php foreach ($service_header as $key => $value) {
                            if ($value['id_service_header'] == $id_service_header) {
                                echo $cut_url[0] == 'th' ? $value['header_service_name_th'] : $value['header_service_name_en'];
                            }
                        } ?>
                    </h4>
                </div>
                <div class="service-main-content">
                    <?= $service_content['content'] ?>
                </div>
                <?php if ($service_content['type_partner'] != 0) : ?>
                    <div class="service-header-partner d-flex align-items-center">
                        <h3 id="title_partner1" style="color: #ffcc00;">Our</h3>
                        <h3 id="title_partner2" style="color: #ffffff;">Partner</h3>
                        <img class="partner-img" src="<?= base_url('dist/img/service_partner.png') ?>" alt="Pet Service">
                    </div>
                    <div class="partner-section">
                        <div class="partner-logos" id="partner-logos" data-aos="fade-up" data-aos-duration="1500">
                            <!-- Logo images will be inserted here by JavaScript -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="service-list">
                <div class="service-list-sticky">
                    <ul class="service-list-item" id="service-list-item">
                        <span class="service-list-title" id="service_list_title">
                            บริการของเรา
                        </span>
                    </ul>
                    <div class="price-request">
                        <h5 id="title_price_request">ต้องการใบเสนอราคา</h5>
                        <span id="detail_price_request">หากต้องการใบเสนอราคาสามารถคลิกที่ปุ่มด้านล่างนี้ได้เลย!!!</span> <br>
                        <a type="button" class="btn btn-warning btn-sm mt-2" id="btn_price_request" href="<?= base_url($cut_url[0] . '/contactpage') ?>">ขอใบเสนอราคา</a>
                    </div>
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
        AOS.init();
    </script>
    <script>
        const base_url = '<?= base_url(); ?>';
        const service_header = <?php echo json_encode($service_header); ?>;
        const id_service_header = <?php echo json_encode($id_service_header); ?>;
        const service_content = <?php echo json_encode($service_content); ?>;
        console.log(service_content);

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

        if (service_content['type_partner'] != 0) {
            const partnerLogosContainer = document.getElementById('partner-logos');
            service_content['data_partners'].forEach(partner => {
                const img = document.createElement('img');
                img.src = '<?= base_url('dist/img/partner/'); ?>' + partner.logo_partner_path;
                img.alt = partner.name_partner;
                partnerLogosContainer.appendChild(img);
            });
        }

        //services list
        const serviceListContainer = document.getElementById('service-list-item');
        service_header.forEach(service => {
            const li = document.createElement('li');
            <?php if ($cut_url[0] == 'th') : ?>
                li.textContent = service.header_service_name_th;
            <?php else : ?>
                li.textContent = service.header_service_name_en;
            <?php endif; ?>

            if (service.id_service_header == id_service_header) {
                li.classList.add('service-list-active'); // Ensure this adds the class as intended
            }

            li.addEventListener('click', () => {
                if (service.id_service_header == 1) {
                    window.location.href = `<?= base_url('' . $cut_url[0]); ?>/servicepage/buysale/${service.id_service_header}`;
                } else {
                    window.location.href = `<?= base_url('' . $cut_url[0]); ?>/servicepage/${service.id_service_header}`;
                }
            });
            serviceListContainer.appendChild(li);
        });
    </script>
</body>

</html>