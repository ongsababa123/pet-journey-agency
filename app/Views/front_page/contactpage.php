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
            align-items: center;
            background-color: #043062;
            padding: 10px;
            color: #fff;
            margin-bottom: 30px;
            height: 100px;
        }

        .contact-title h2 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-left: 30px;
            flex: 1;
            text-align: left;
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
            display: ruby;
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
            <h1 class="d-flex p-2" style="color: #fff; font-weight: 600; font-size: 45pt; margin-left: 30px;">
                <div style="color: #FAD046; margin-right: 10px;">Contact</div>
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
                            <div class="col-6">
                                <p>
                                    <i class="fas fa-clock"></i>
                                    เวลาทำการ:<br>
                                    จันทร์ถึงศุกร์: 8:30 น. - 18:00 น.<br>
                                    หยุดทุกวันเสาร์อาทิตย์
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <i class="fab fa-facebook"></i>
                                    Facebook:<br>
                                    Pet Journey Agency<br>
                                    นำเข้าส่งออกสัตว์เลี้ยง
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <i class="fas fa-phone-alt"></i>
                                    โทรศัพท์:<br>
                                    081 615 5644<br>
                                    088 657 3099<br>
                                    082 519 2892
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <i class="fas fa-envelope"></i>
                                    Email:<br>
                                    petjourney.agency@gmail.com
                                </p>
                            </div>
                            <div class="col-6">
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>