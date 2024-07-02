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

        .service-header {
            background-color: #003366;
            color: #ffffff;
            padding: 10px;
            height: 100px;
        }

        .service-main-content {
            background-color: chartreuse;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        .service-list {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
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
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <?php include 'app\Views\layout\slide.php'; ?>
    </section>

    <!-- sec service page -->
    <section>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-8 service-detail">
                <div class="service-header d-flex align-items-center">
                    <h3>บริการนำเข้าและส่งออก สัตว์เลี้ยงระหว่างประเทศ</h3>
                </div>
                <div class="service-main-content">
                    <div class="service-main-content-img">
                        <img src="<?= base_url('dist/img/pic_service_content.png') ?>" alt="Pet Service">
                    </div>

                    <p>บริการนำเข้า-ส่งออกสัตว์เลี้ยงระหว่างประเทศ เรามีเจ้าหน้าที่ดูแลการส่งสัตว์เลี้ยงเดินทางไปต่างประเทศหรือรับสัตว์เลี้ยงเดินทางเข้ามาในประเทศ เป็นสัตว์เลี้ยงทุกชนิด เช่น สุนัข แมว กระต่าย นก เป็นต้น ทางเรามี เจ้าหน้าที่ดูแลการจองตั๋วเครื่องบิน จัดทำเอกสาร นำสัตว์เลี้ยงไปขึ้นเครื่องที่สนามบิน ติดป้ายไว้ที่กรงของสัตว์เลี้ยงจนสัตว์เลี้ยงเดินทางถึงมือผู้รับ เจ้าของไม่ต้องเสียเวลา เราบริการนำเข้า-ส่งออกสัตว์เลี้ยงระหว่างประเทศ ด้วยความรักสัตว์ เหมือนสัตว์เลี้ยงเป็นหนึ่งในสมาชิกของครอบครัวของเรา</p>
                </div>
            </div>
            <div class="col-2 service-list">
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
            <div class="col-1"></div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>