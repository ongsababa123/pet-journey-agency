<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script>
        var BASE_URL = '<?= base_url(); ?>';
    </script>
    <script src="<?= base_url('public/js/language.js'); ?>"></script>
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

        .contact1 {
            padding: 70px;
        }

        .contact2 {
            padding: 70px;
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
                font-size: 11pt;
            }

            .contact1 {
                padding: 50px;
            }

            .contact2 {
                padding: 50px;
            }

            .contact-details-text span {
                font-size: 10pt;
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

        .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
            line-height: 34px;
            text-align: left;
            padding-left: 20px;
        }

        .select2-container--bootstrap .select2-selection--single .select2-selection__arrow {
            height: 34px;
        }

        .select2-container .select2-selection--single {
            height: 38px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            text-align: left;
        }

        .contact-details-icon {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .contact-details-text {
            font-size: 1rem;
            line-height: 1.5;
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
                <div class="col-lg-6 mt-4" style="padding: 5%;" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="contact-form">
                        <h2 id="contact_us">ติดต่อเรา</h2>
                        <p id="contact_us_desc">โปรดกรอกข้อมูลด้านล่างเพื่อให้เราสามารถตอบกลับคุณได้อย่างถูกต้องและรวดเร็ว</p>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" id="ph_contact_name" placeholder="Your name*">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" id="ph_contact_surname" placeholder="Your last name*">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control" id="ph_contact_email" placeholder="Email*">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" id="ph_contact_phone" placeholder="Phone Number*">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <textarea class="form-control" id="ph_contact_message" placeholder="Message*" rows="3"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block" style="color: #fff;"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Send</button>
                    </div>
                </div>
                <div class="col-lg-6" style="padding: 5%;" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="contact-details">
                        <div class="contact-details-title">
                            <p id="contact_greeting"></p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 d-flex mb-4 ">
                                <p>
                                    <i class="fas fa-clock contact-details-icon"></i>
                                <div class="contact-details-text">
                                    <span id="contact_opening_hours">เวลาทำการ:</span><br>
                                    <span id="contact_weekdays_hours">จันทร์ถึงศุกร์: 8:30 น. - 18:00 น.</span><br>
                                    <span id="contact_closed_sundays">หยุดทุกวันอาทิตย์</span>
                                </div>
                                </p>
                            </div>
                            <div class="col-lg-6 d-flex mb-4">
                                <p>
                                    <i class="fab fa-facebook contact-details-icon"></i>
                                <div class="contact-details-text">
                                    <span>Facebook:</span><br>
                                    <span>Pet Journey Agency</span><br>
                                    <span>นำเข้าส่งออกสัตว์เลี้ยง</span>
                                </div>
                                </p>
                            </div>
                            <div class="col-lg-6 d-flex mb-4">
                                <p>
                                    <i class="fas fa-phone-alt contact-details-icon"></i>
                                <div class="contact-details-text">
                                    <span id="contact_phone">โทรศัพท์:</span><br>
                                    <span>081 615 5644</span><br>
                                    <span>088 657 3099</span><br>
                                    <span>082 519 2892</span>
                                </div>
                                </p>
                            </div>
                            <div class="col-lg-6 d-flex mb-4">
                                <p>
                                    <i class="fas fa-envelope contact-details-icon"></i>
                                <div class="contact-details-text">
                                    <span id="contact_email">Email:</span><br>
                                    <span>petjourney.agency@gmail.com</span>
                                </div>
                                </p>
                            </div>
                            <div class="col-lg-6 d-flex mb-4">
                                <p>
                                    <i class="fab fa-whatsapp contact-details-icon"></i>
                                <div class="contact-details-text">
                                    <span>WhatsApp:</span><br>
                                    <span>081 615 5644</span>
                                </div>
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
            <h3 class="d-flex justify-content-center flex-wrap p-2" data-aos="zoom-in">
                <span id="title_quote_part1">รับใบเสนอราคาของคุณได้ที่นี่</span>
                <div class="text-success mx-2" id="title_quote_part2">ฟรี</div>
                <span id="title_quote_part3">ไม่มีค่าใช้จ่าย!</span>
            </h3>
            <div class="container mt-3">
                <div class="row">
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="name" id="label_name" class="d-flex">ชื่อ<div style="color: red;">*</div></label>
                        <input class="form-control" type="text" id="ph_name" name="name" placeholder="ระบุชื่อผู้ติดต่อ">
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="phone" id="label_phone" class="d-flex">หมายเลขโทรศัพท์<div style="color: red;">*</div></label>
                        <input class="form-control" type="text" id="ph_phone" name="phone" placeholder="ระบุผู้ติดต่อหมายเลขโทรศัพท์">
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="email" id="label_email" class="d-flex">อีเมล<div style="color: red;">*</div></label>
                        <input class="form-control" type="email" id="ph_email" name="email" placeholder="ระบุอีเมล">
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="travel-date" id="label_date" class="d-flex">วันเดินทาง</label>
                        <input class="form-control" type="date" id="ph_date" name="travel-date">
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="origin-country" id="label_country" class="d-flex">ประเทศต้นทาง</label>
                        <select class="form-control select2" id="ph_origin_country" name="origin-country">
                            <option id="option_origin_country" value="origin_country"></option>
                        </select>
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="origin-airport" id="label_origin_airport" class="d-flex">สนามบินต้นทาง</label>
                        <select class="form-control select2" id="ph_origin_airport" name="origin-airport">
                        </select>
                    </div>
                    <div class="form-group col-md-4 coltest"></div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="destination-country" id="label_destination_country" class="d-flex">ประเทศปลายทาง</label>
                        <select class="form-control select2" id="ph_destination_country" name="destination-country">
                        </select>
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="destination-airport" id="label_destination_airport" class="d-flex">สนามบินปลายทาง</label>
                        <select class="form-control select2" id="ph_destination_airport" name="destination-airport">
                            <option id="option_destination_airport" value="destination_airport"></option>
                        </select>
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="travel-type" id="label_travel_type" class="d-flex">ประเภทการเดินทาง</label>
                        <select class="form-control" id="ph_travel_type" name="travel-type">
                        </select>
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="pet-transport" id="label_pet_transport" class="d-flex">รูปแบบขนส่งสัตว์เลี้ยง</label>
                        <select class="form-control" id="ph_pet_transport" name="pet-transport">
                        </select>
                    </div>
                </div>
                <div class="form-group text-left" data-aos="fade-up" data-aos-duration="700">
                    <label for="services" id="label_services">กรุณาเลือกบริการที่ท่านต้องการ:</label><br>
                    <div id="services-container" data-aos="fade-up" data-aos-duration="700"></div>
                </div>
                <hr data-aos="fade-up" data-aos-duration="700">
                <div class="row">
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="pet-type" id="label_pet_type" class="d-flex">ชนิดสัตว์</label>
                        <input type="text" class="form-control" id="ph_pet_type" name="pet-type" placeholder="ระบุชนิดสัตว์">
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="breed" id="label_breed" class="d-flex">สายพันธุ์</label>
                        <input type="text" class="form-control" id="ph_breed" name="breed" placeholder="ระบุสายพันธุ์">
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="age" id="label_age" class="d-flex">อายุ</label>
                        <input type="text" class="form-control" id="ph_age" name="age" placeholder="ระบุอายุ">
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="weight" id="label_weight" class="d-flex">น้ำหนัก</label>
                        <input type="text" class="form-control" id="ph_weight" name="weight" placeholder="ระบุน้ำหนัก">
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up" data-aos-duration="700">
                        <label for="reason" id="label_reason" class="d-flex">หมายเหตุ</label>
                        <input type="text" class="form-control" id="ph_reason" name="reason" placeholder="ระบุหมายเหตุ">
                    </div>
                </div>
                <button type="button" class="btn btn-dark"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;<span id="btn_submit_quote">ส่งใบเสนอราคา</span></button>
            </div>

        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap'
            });
        });
    </script>
</body>

</html>