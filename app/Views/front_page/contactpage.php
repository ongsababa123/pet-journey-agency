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

        .contact-title {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #043062;
            padding: 20px;
            color: #fff;
            margin-bottom: 30px;
        }

        .contact-title-h1 {
            font-size: 3.5rem;
            font-weight: 600;
            display: flex;
            flex-wrap: wrap;
            text-align: center;
            margin-bottom: 0;
        }

        .contact-title-h1 div {
            color: #FAD046;
            margin-right: 10px;
        }

        @media (max-width: 1200px) {
            .contact-title-h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 992px) {
            .contact-title-h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .contact-title-h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .contact-title-h1 {
                font-size: 1.5rem;
            }
        }

        .contact-form {
            background-color: #23456B;
            background-size: cover;
            padding: 30px;
            border-radius: 10px;
        }

        .contact-form h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-form p {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-form .form-control {
            margin-bottom: 15px;
        }

        .contact-details {
            padding: 30px;
        }

        .contact-details-title {
            font-size: 14pt;
            margin-bottom: 20px;
        }

        .contact-details p {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .contact-details p i {
            margin-right: 20px;
            font-size: 2.3rem;
        }

        .contact-details img {
            display: block;
            margin: 20px auto;
        }

        /* Quote Section */
        .quote-section {
            padding: 50px 0;
            background-color: #fff;
            text-align: center;
        }

        .quote-title {
            position: relative;
            height: 100px;
            margin-bottom: 30px;
            margin-top: 30px;
        }

        .quote-title:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border-left: 100vw solid #0198B4;
            border-bottom: 250px solid transparent;
        }

        .quote-title img {
            width: 400px;
            height: auto;
            position: absolute;
            left: 0px;
            top: 10%;
            transform: translateY(-50%);
            z-index: 3;
        }

        @media (max-width: 800px) {
            .contact-details p {
                font-size: 9pt;
            }

            .quote-title:after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 0;
                height: 0;
                border-left: 100vw solid #0198B4;
                border-bottom: 190px solid transparent;
            }

            .quote-title img {
                width: 280px;
                height: auto;
                position: absolute;
                left: 0px;
                top: 10%;
                transform: translateY(-50%);
                z-index: 3;
            }

        }

        @media (max-width: 400px) {
            .contact-details p {
                font-size: 9pt;
            }

            .quote-title:after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 0;
                height: 0;
                border-left: 100vw solid #0198B4;
                border-bottom: 120px solid transparent;
            }

            .quote-title img {
                width: 180px;
                height: auto;
                position: absolute;
                left: 0px;
                top: 40%;
                transform: translateY(-50%);
                z-index: 3;
            }

        }
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <?php include 'app\Views\layout\slide.php'; ?>
    </section>

    <!-- sec contact -->
    <section>
        <div class="contact-title">
            <h1 class="contact-title-h1">
                <div>Contact</div>
                ติดต่อเรา
            </h1>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-6" style="padding: 70px;">
                    <div class="contact-form">
                        <h2>ติดต่อเรา</h2>
                        <p>โปรดกรอกข้อมูลด้านล่างเพื่อให้เราสามารถตอบกลับคุณได้อย่างถูกต้องและรวดเร็ว</p>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your name*">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your last name*">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" placeholder="Phone Number*">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <textarea class="form-control" placeholder="Message*" rows="3"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block" style="color: #fff;"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Send</button>
                    </div>
                </div>
                <div class="col-lg-6" style="padding: 70px;">
                    <div class="contact-details">
                        <div class="contact-details-title">
                            <p>เรายินดีรับฟังจากคุณ! หากคุณมีคำถาม ข้อเสนอแนะ หรือความคิดเห็นใด ๆ</p>
                            <p>กรุณาติดต่อเราตามข้อมูลด้านล่าง</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>
                                    <i class="fas fa-clock"></i>
                                    เวลาทำการ:<br>
                                    จันทร์ถึงศุกร์: 8:30 น. - 18:00 น.<br>
                                    หยุดทุกวันเสาร์อาทิตย์
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <i class="fab fa-facebook"></i>
                                    Facebook:<br>
                                    Pet Journey Agency<br>
                                    นำเข้าส่งออกสัตว์เลี้ยง
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <i class="fas fa-phone-alt"></i>
                                    โทรศัพท์:<br>
                                    081 615 5644<br>
                                    088 657 3099<br>
                                    082 519 2892
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <i class="fas fa-envelope"></i>
                                    Email:<br>
                                    petjourney.agency@gmail.com
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p>
                                    <i class="fab fa-whatsapp"></i>
                                    WhatsApp:<br>
                                    081 615 5644
                                </p>
                            </div>
                        </div>
                        <img src="<?= base_url('dist/img/contact_pic.png') ?>" width="300px" alt="Pets">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec contact quote -->
    <section class="quote-section">
        <div class="quote-title">
            <img src="<?= base_url('dist/img/contact_pic1.png') ?>" alt="Quote Image">
        </div>
        <div class="quote-content">
            <h3 class="d-flex justify-content-center flex-wrap p-2">
                รับใบเสนอราคาของคุณได้ที่นี่
                <div class="text-success mx-2">ฟรี</div>
                ไม่มีค่าใช้จ่าย!
            </h3>
            <div class="container mt-3">
                <div class="row">
                    <div class="form-group col-md-4">
                        <div class="d-flex">ชื่อ<div style="color: red;">*</div>
                        </div>
                        <input class="form-control" type="text" id="name" name="name" placeholder="ระบุชื่อผู้ติดต่อ">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">หมายเลขโทรศัพท์<div style="color: red;">*</div>
                        </div>
                        <input class="form-control" type="text" id="phone" name="phone" placeholder="ระบุชื่อผู้ติดต่อหมายเลขโทรศัพท์">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">อีเมล<div style="color: red;">*</div>
                        </div>
                        <input class="form-control" type="email" id="email" name="email" placeholder="ระบุอีเมล">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">วันเดินทาง</div>
                        <input class="form-control" type="date" id="travel-date" name="travel-date">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">ประเทศต้นทาง</div>
                        <select class="form-control" id="origin-country" name="origin-country">
                            <option value="">เช่น ไทย (TH)</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">ประเทศปลายทาง</div>
                        <select class="form-control" id="destination-country" name="destination-country">
                            <option value="">เช่น เกาหลี (KR)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">ประเภทการเดินทาง</div>
                        <select class="form-control" id="travel-type" name="travel-type">
                            <option value="">เลือกประเภทการเดินทาง</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">รูปแบบขนส่งสัตว์เลี้ยง</div>
                        <select class="form-control" id="pet-transport" name="pet-transport">
                            <option value="">เลือกรูปแบบขนส่งสัตว์เลี้ยง</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>
                <div class="form-group text-left">
                    <label for="services">กรุณาเลือกบริการที่ท่านต้องการ:</label><br>
                    <div id="services-container"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group col-md-4">
                        <div class="d-flex">ชนิดสัตว์</div>
                        <input type="text" class="form-control" id="pet-type" name="pet-type" placeholder="ระบุชนิดสัตว์">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">สายพันธุ์</div>
                        <input type="text" class="form-control" id="breed" name="breed" placeholder="ระบุสายพันธุ์">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">อายุ</div>
                        <input type="text" class="form-control" id="age" name="age" placeholder="ระบุอายุ">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">น้ำหนัก</div>
                        <input type="text" class="form-control" id="weight" name="weight" placeholder="ระบุน้ำหนัก">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="d-flex">หมายเหตุ</div>
                        <input type="text" class="form-control" id="reason" name="reason" placeholder="ระบุหมายเหตุ">
                    </div>
                </div>
                <button type="button" class="btn btn-dark"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;ส่งใบเสนอราคา</button>
            </div>
        </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- ดึงข้อมูลแต่ละประเทศ -->
    <script>
        async function fetchCountries() {
            const response = await fetch('<?= base_url('public/data/countries.json'); ?>');
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            const countries = await response.json();
            return countries;
        }

        function populateSelect(elementId, countries, language) {
            const select = document.getElementById(elementId);
            countries.forEach(country => {
                const option = document.createElement('option');
                option.value = country.code;
                option.text = language === 'en' ? `${country.name_en} (${country.code})` : `${country.name_th} (${country.code})`;
                select.appendChild(option);
            });
        }

        fetchCountries().then(countries => {
            populateSelect('origin-country', countries, 'th');
            populateSelect('destination-country', countries, 'th');
        }).catch(error => {
            console.error('Failed to fetch countries:', error);
        });
    </script>
</body>

</html>
