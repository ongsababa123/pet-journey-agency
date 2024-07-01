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
<?php
$cut_url = explode('/', $uri_menu);
?>

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
                <div class="col-lg-6 mt-4" style="padding: 5%;">
                    <div class="contact-form">
                        <form class="mb-3" id="form_message_contact" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                            <h2 id="contact_us">ติดต่อเรา</h2>
                            <p id="contact_us_desc">โปรดกรอกข้อมูลด้านล่างเพื่อให้เราสามารถตอบกลับคุณได้อย่างถูกต้องและรวดเร็ว</p>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" class="form-control" id="ph_contact_name" placeholder="Your name*" name="name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="text" class="form-control" id="ph_contact_surname" placeholder="Your last name*" name="lastname">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="email" class="form-control" id="ph_contact_email" placeholder="Email*" name="email">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="text" class="form-control" id="ph_contact_phone" placeholder="Phone Number*" name="phone_number">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <textarea class="form-control" id="ph_contact_message" placeholder="Message*" rows="3" name="message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block" style="color: #fff;"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" style="padding: 5%;">
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
                                    <?php if ($cut_url['0'] == 'th') echo $contact_data['open_time'];
                                    else echo $contact_data['open_time_en']; ?>

                                </div>
                                </p>
                            </div>
                            <?php if (!empty($contact_data['facebook_name'])) : ?>
                                <div class="col-lg-6 d-flex mb-4">
                                    <p>
                                        <i class="fab fa-facebook contact-details-icon"></i>
                                    <div class="contact-details-text">
                                        <span>Facebook:</span><br>
                                        <span><?= $contact_data['facebook_name'] ?></span>
                                    </div>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <div class="col-lg-6 d-flex mb-4">
                                <p>
                                    <i class="fas fa-phone-alt contact-details-icon"></i>
                                <div class="contact-details-text">
                                    <span id="contact_phone">โทรศัพท์:</span><br>
                                    <span><?= $contact_data['phone_number'] ?></span>

                                </div>
                                </p>
                            </div>
                            <div class="col-lg-6 d-flex mb-4">
                                <p>
                                    <i class="fas fa-envelope contact-details-icon"></i>
                                <div class="contact-details-text">
                                    <span id="contact_email">Email:</span><br>
                                    <span><?= $contact_data['email'] ?></span>
                                </div>
                                </p>
                            </div>
                            <div class="col-lg-6 d-flex mb-4">
                                <p>
                                    <i class="fab fa-whatsapp contact-details-icon"></i>
                                <div class="contact-details-text">
                                    <span>WhatsApp:</span><br>
                                    <span><?= $contact_data['whatsapp'] ?></span>

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
            <h3 class="d-flex justify-content-center flex-wrap p-2">
                <span id="title_quote_part1">รับใบเสนอราคาของคุณได้ที่นี่</span>
                <div class="text-success mx-2" id="title_quote_part2">ฟรี</div>
                <span id="title_quote_part3">ไม่มีค่าใช้จ่าย!</span>
            </h3>
            <form class="mb-3" id="form_quotation" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <div class="container mt-3">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name_last" id="label_name" class="d-flex">ชื่อ<div style="color: red;">*</div></label>
                            <input class="form-control" type="text" id="ph_name" name="name_last" placeholder="ระบุชื่อผู้ติดต่อ">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone" id="label_phone" class="d-flex">หมายเลขโทรศัพท์<div style="color: red;">*</div></label>
                            <input class="form-control" type="text" id="ph_phone" name="phone_number" placeholder="ระบุผู้ติดต่อหมายเลขโทรศัพท์">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" id="label_email" class="d-flex">อีเมล<div style="color: red;">*</div></label>
                            <input class="form-control" type="email" id="ph_email" name="email" placeholder="ระบุอีเมล">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="travel-date" id="label_date" class="d-flex">วันเดินทาง</label>
                            <input class="form-control" type="date" id="ph_date" name="travel_date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="origin-country" id="label_country" class="d-flex">ประเทศต้นทาง</label>
                            <select class="form-control select2" id="ph_origin_country" name="country_of_origin" oninput="get_airport_of_origin(this.value)">
                                <option value="null" selected>
                                    <?php if ($cut_url['0'] == 'th') echo 'เลือกประเทศต้นทาง';
                                    else echo 'Choose origin country'; ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="origin-airport" id="label_origin_airport" class="d-flex">สนามบินต้นทาง</label>
                            <select class="form-control select2" id="ph_origin_airport" name="airport_of_origin">

                            </select>
                        </div>
                        <div class="form-group col-md-4 coltest"></div>
                        <div class="form-group col-md-4">
                            <label for="destination-country" id="label_destination_country" class="d-flex">ประเทศปลายทาง</label>
                            <select class="form-control select2" id="ph_destination_country" name="destination_country" oninput="get_airport_of_destination(this.value)">
                                <option value="null" selected>
                                    <?php if ($cut_url['0'] == 'th') echo 'เลือกประเทศปลายทาง';
                                    else echo 'Choose destination country'; ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="destination-airport" id="label_destination_airport" class="d-flex">สนามบินปลายทาง</label>
                            <select class="form-control select2" id="ph_destination_airport" name="destination_airport">
                                <option id="option_destination_airport" value="destination_airport"></option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="travel-type" id="label_travel_type" class="d-flex">ประเภทการเดินทาง</label>
                            <select class="form-control" id="ph_travel_type" name="travel_type">

                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="pet-transport" id="label_pet_transport" class="d-flex">รูปแบบขนส่งสัตว์เลี้ยง</label>
                            <select class="form-control" id="ph_pet_transport" name="transport_format">
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <label for="services" id="label_services">กรุณาเลือกบริการที่ท่านต้องการ:</label><br>
                        <div id="services-container">
                            <?php foreach ($service_header as $key => $value) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_<?= $key ?>" name="service_<?= $key ?>" value="<?= $value['id_service_header'] ?>">
                                    <label class="form-check-label" for="service1"> <?php if ($cut_url['0'] == 'th') echo $value['header_service_name_th'];
                                                                                    else echo $value['header_service_name_en']; ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="pet-type" id="label_pet_type" class="d-flex">ชนิดสัตว์</label>
                            <input type="text" class="form-control" id="ph_pet_type" name="animal_type" placeholder="ระบุชนิดสัตว์">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="breed" id="label_breed" class="d-flex">สายพันธุ์</label>
                            <input type="text" class="form-control" id="ph_breed" name="breed" placeholder="ระบุสายพันธุ์">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="age" id="label_age" class="d-flex">อายุ</label>
                            <input type="text" class="form-control" id="ph_age" name="age" placeholder="ระบุอายุ">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="weight" id="label_weight" class="d-flex">น้ำหนัก</label>
                            <input type="text" class="form-control" id="ph_weight" name="weight" placeholder="ระบุน้ำหนัก">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="reason" id="label_reason" class="d-flex">หมายเหตุ</label>
                            <input type="text" class="form-control" id="ph_reason" name="note" placeholder="ระบุหมายเหตุ">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;<span id="btn_submit_quote">ส่งใบเสนอราคา</span></button>
                </div>
            </form>
        </div>
    </section>
    <br>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap'
            });
        });
    </script>

    <!-- ดึงข้อมูลแต่ละประเทศ -->
    <script>
        fetchCountries();
        // ดึงข้อมูลประเทศ
        async function fetchCountries() {
            const response_countries = await fetch('<?= base_url('public/data/countries.json'); ?>');
            if (!response_countries.ok) {
                throw new Error('Network response_countries was not ok ' + response_countries.statusText);
            }
            const countries = await response_countries.json();

            countries.forEach(element => {
                $("#ph_origin_country").append('<option value="' + element.code + '">' + element.name_en + ' (' + element.code + ')</option>');
                $("#ph_destination_country").append('<option value="' + element.code + '">' + element.name_en + ' (' + element.code + ')</option>');
            });
        }
    </script>

    <!-- get_airport_of_origin // get_airport_of_destination -->
    <script>
        async function get_airport_of_origin(country) {
            const response_airport = await fetch('<?= base_url('public/data/airports.json'); ?>');
            if (!response_airport.ok) {
                throw new Error('Network response_airport was not ok ' + response_airport.statusText);
            }
            const airports = await response_airport.json();
            $("#ph_origin_airport").empty();
            $("#ph_origin_airport").append('<option selected="selected" value="0">' +
                <?php echo ($cut_url['0'] == 'th') ? '"กรุณาเลือกสนามบินต้นทาง"' : '"Choose origin airport"'; ?> +
                '</option>');

            for (const key in airports) {
                if (airports.hasOwnProperty(key)) {
                    const element = airports[key];
                    if (element.country === country) {
                        $("#ph_origin_airport").append('<option value="' + element.name + '">' + element.name + ' (' + element.state + ')</option>');
                    }
                }
            }
        }

        async function get_airport_of_destination(country) {
            const response_airport = await fetch('<?= base_url('public/data/airports.json'); ?>');
            if (!response_airport.ok) {
                throw new Error('Network response_airport was not ok ' + response_airport.statusText);
            }
            const airports = await response_airport.json();
            $("#ph_destination_airport").empty();
            $("#ph_destination_airport").append('<option selected="selected" value="0">' +
                <?php if ($cut_url['0'] == 'th') echo '"กรุณาเลือกสนามบินต้นทาง"';
                else echo '"Choose origin airport"'; ?> +
                '</option>');

            for (const key in airports) {
                if (airports.hasOwnProperty(key)) {
                    const element = airports[key];
                    if (element.country === country) {
                        $("#ph_destination_airport").append('<option value="' + element.name + '">' + element.name + ' (' + element.state + ')</option>');
                    }
                }
            }
        }
    </script>

    <!-- form submit ajax request -->
    <script>
        $("#form_quotation").on('submit', function(event) {
            event.preventDefault();

            action_('dashboard/quotation/create/withuser/<?= count($service_header) ?>', 'form_quotation');
        });

        $("#form_message_contact").on('submit', function(event) {
            event.preventDefault();

            action_('dashboard/message_contact/create', 'form_message_contact');
        });
    </script>

    <!-- function action ajax request -->
    <script>
        function action_(url, form) {
            var formData = new FormData(document.getElementById(form));
            $.ajax({
                url: '<?= base_url() ?>' + url,
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                beforeSend: function() {
                    Swal.fire({
                        title: 'กําลังดําเนินการ...',
                        allowEscapeKey: false,
                        allowOutsideClick: false,
                        showConfirmButton: false,
                    });
                },
                success: function(response) {
                    Swal.close();
                    if (response.success) {
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            allowOutsideClick: false,
                        });
                        if (response.reload) {
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    } else {
                        Swal.fire({
                            title: response.message,
                            icon: 'error',
                            showConfirmButton: true,
                            confirmButtonText: 'ตกลง',
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: "เกิดข้อผิดพลาด",
                        icon: 'error',
                        showConfirmButton: true,
                        confirmButtonText: 'ตกลง',
                    });
                }
            });
        }
    </script>
</body>

</html>