<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Sell Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <style>
        /* Existing styles */
        :root {
            --swiper-navigation-size: 15px !important;
        }

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

        .service-main-content {
            padding: 20px;
            border-radius: 5px;
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

        .service-category {
            display: flex;
            justify-content: end;
        }

        .service-category-search {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 50%;
        }

        .service-category label {
            margin-bottom: 0;
            white-space: nowrap;
        }

        .select2-container--default .select2-selection--single {
            height: 38px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 150%;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
        }

        .male-icon {
            color: #1894e4;
            font-size: 30px;
        }

        .female-icon {
            color: #fc0464;
            font-size: 30px;
        }

        .service-sell-box {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-items: center;
            gap: 20px;
        }

        .pet-card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            width: 260px;
            height: 480px;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
        }

        .set-img {
            position: relative;
            padding: 35px 10px 0px 10px;
            border-radius: 10px;
            overflow: hidden;
        }

        .pet-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
        }

        .pet-card .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .pet-card .card-title {
            font-size: 14px;
            font-weight: 600;
            color: #003366;
            z-index: 2;
        }

        .pet-card .card-text {
            font-size: 14px;
            color: #646161;
        }

        .pet-card-icon {
            position: absolute;
            top: 55%;
            right: 7%;
        }

        .date-posted {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 12px;
            color: #646161;
        }

        .swiper-slide {
            width: 100% !important;
            padding: 0px 10px 0px 10px !important;
            box-sizing: border-box;
        }

        /* Small swiper buttons */
        .swiper-button-next,
        .swiper-button-prev {
            font-size: var(--swiper-navigation-size) !important;
            color: #002157 !important;
            position: absolute !important;
            top: 50% !important;
            width: 40px !important;
            height: 40px !important;
            margin-top: -20px;
            z-index: 10;
            cursor: pointer;
            background-color: #d1d1d13d !important;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .swiper-button-next {
            right: 5px;
        }

        .swiper-button-prev {
            left: 5px;
        }

        .swiper-button-next::before,
        .swiper-button-prev::before {
            font-size: 14px;
        }

        .small-primary-button {
            background-color: #FFDA56;
            border: none;
            color: white;
            width: 80px;
            padding: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            border-radius: 10px;
            cursor: pointer;
        }

        .small-primary-button:hover {
            background-color: #FFB629;
        }

        .btn-view-more {
            display: flex;
            justify-content: center;
        }

        .modal-header.bg-primary {
            background-color: #007bff;
        }

        .modal-header.text-white {
            color: #fff;
        }

        .close.text-white {
            color: #fff;
        }

        .modal-pic {
            width: 30%;
            border-radius: 10px;
        }

        .modal-content {
            border-radius: 15px !important;
        }

        .modal-header {
            border-radius: 15px 15px 0px 0px !important;
        }


        .modal-header {
            background-color: #0198B4;
            height: 50px;
            align-items: center !important;
        }

        .button-modal-container {
            display: flex;
            gap: 10px;
        }

        .button-modal {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            font-size: 13px;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
        }

        .button-modal-call {
            background-color: #1e3a66;
        }

        .button-modal-call:hover {
            background-color: #163152;
        }

        .button-modal-close {
            background-color: #d0021b;
        }

        .button-modal-close:hover {
            background-color: #a80015;
        }

        .button-modal i {
            margin-right: 10px;
        }

        @media (min-width: 2000px) {
            .service-sell-box {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                gap: 20px;
            }
        }

        @media (min-width: 1800px) {
            .service-sell-box {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
            }
        }

        @media (max-width: 1200px) {
            .service-header {
                padding: 0 20px;
            }

            .service-header h4 {
                font-size: 15pt;
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

            .service-sell-box {
                grid-template-columns: repeat(2, 1fr);
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

            .service-sell-box {
                grid-template-columns: 1fr;
            }

            .service-sell-box {
                grid-template-columns: repeat(2, 1fr);
            }

            .modal-pic {
                width: 50%;
            }

            .service-list {
                max-width: 100%;
                margin-left: 0px;
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

            .flex-container {
                margin-bottom: 300px;
            }

            .pet-card {
                width: 200px;
                height: 380px;
            }

            .date-posted {
                font-size: 8pt;
            }

            .set-img {
                padding: 27px 0px 0px 0px;
            }

            .pet-card img {
                height: 160px;
                border-radius: 7px;
            }

            .pet-card .card-title {
                font-size: 10pt;
                font-weight: 600;
            }

            .pet-card .card-text {
                font-size: 9pt;
                line-height: 1px;
            }

            .service-list {
                max-width: 100%;
                margin-left: 0px;
            }
        }

        @media (max-width: 480px) {
            .service-header {
                height: auto;
                padding: 20px;
                text-align: center;
            }

            .service-category-search {
                flex-direction: column;
                width: 100%;
            }

            .service-list {
                max-width: 100%;
                margin-left: 0px;
            }

            .service-category-search label,
            .select2-container {
                width: 100%;
            }

            .service-sell-box {
                grid-template-columns: repeat(2, 1fr);
            }

            .pet-card {
                width: 200px;
                height: 380px;
            }

            .date-posted {
                font-size: 8pt;
            }

            .set-img {
                padding: 27px 0px 0px 0px;
            }

            .pet-card img {
                height: 160px;
                border-radius: 7px;
            }

            .pet-card .card-title {
                font-size: 9pt;
                font-weight: 500;
            }

            .pet-card .card-text {
                font-size: 9pt;
                line-height: 1px;
            }
        }
    </style>
</head>
<?php
$cut_url = explode('/', $uri_menu);
?>
<?php
$pet = [
    "title" => "ลูกสุนัขที่ดูเป็นมิตร",
    "price" => "10000 บาท",
    "details" => [
        "breed" => "ชิสุ",
        "age" => "3 เดือน",
        "gender" => "ตัวเมีย",
        "color" => "ขาว",
        "temperament" => "เชื่อง, เป็นมิตร, ชอบขนม",
        "vaccination" => "ฉีดวัคซีนครบ"
    ],
    "datePosted" => "11 May 2022"
];
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
                    <div class="service-category">
                        <div class="service-category-search">
                            <label id="search_category" for="service-search-1" class="mr-2">ค้นหาหมวดหมู่:</label>
                            <select id="service-search" class="form-control" name="service" onchange="handleCategoryChange()">
                                <option value="select_category" id="select_category" selected>ทั้งหมด</option>
                                <option value="price_high_to_low" id="price_high_to_low">ราคาสูงไปต่ำ</option>
                                <option value="price_low_to_high" id="price_low_to_high">ราคาต่ำไปสูง</option>
                                <option value="latest_date" id="latest_date">วันที่เก่าสุด</option>
                                <option value="new_date" id="new_date">วันที่ใหม่</option>
                                <option value="sale_complete" id="sale_complete">ขายแล้ว</option>
                                <option value="not_sale" id="not_sale">รอเจ้าของใหม่</option>
                            </select>
                        </div>
                    </div>
                    <div class="service-sell-box mt-4"></div>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-sticky" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                    <ul class="service-list-item" id="service-list-item">
                        <span class="service-list-title" id="service_list_title">บริการของเรา</span>
                    </ul>
                    <div class="price-request" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                        <h5 id="title_price_request">ต้องการใบเสนอราคา</h5>
                        <span id="detail_price_request">หากต้องการใบเสนอราคาสามารถคลิกที่ปุ่มด้านล่างนี้ได้เลย!!!</span> <br>
                        <button type="button" class="btn btn-warning btn-sm mt-2" id="btn_price_request">ขอใบเสนอราคา</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-white">
                    <h5 class="modal-title" id="pet_detail">รายละเอียดสัตว์เลี้ยง</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center mb-3">
                        <img class="modal-pic" id="image_pet" src="">
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title-modal" style="font-weight: 600;" id="name_pet"></h4>
                            <p class="card-text" id="price_pet"></p>
                            <p class="card-text" id="pet_information"><strong>ข้อมูลสัตว์เลี้ยง</strong></p>
                            <ul class="list-unstyled" style="margin-left: 10px;">
                                <li><i class="fas fa-dog" style="color: #0198B4; margin-right: 10px;"></i><span id="breed_pet"></li>
                                <li><i class="fas fa-birthday-cake" style="color: #0198B4; margin-right: 14px;"></i><span id="age_pet"></span></li>
                                <li><i class="fas fa-venus-mars" style="color: #0198B4; margin-right: 10px;"></i><span id="gender_pet"></span></li>
                                <li><i class="fas fa-paw" style="color: #0198B4; margin-right: 13px;"></i><span id="color_pet"></span></li>
                                <li><i class="fas fa-bone" style="color: #0198B4; margin-right: 10px;"></i><span id="characteristic_pet"></span></li>
                                <li><i class="fas fa-notes-medical" style="color: #0198B4; margin-right: 16px;"></i><span id="vaccination_history_pet"></span></li>
                            </ul>
                            <p class="text-muted d-flex justify-content-end" id="sell_date"></p>
                        </div>
                    </div>
                    <div class="button-modal-container d-flex justify-content-center">
                        <a href="https://www.facebook.com/petjourney.agency" target="_blank" class="button-modal button-modal-call">
                            <i class="fas fa-phone-alt"></i>
                            <span id="contact_seller">ติดต่อผู้ขาย</span>
                        </a>
                        <span href="#" class="button-modal button-modal-close" data-dismiss="modal">
                            <i class="fas fa-times"></i>
                            <span id="close">Close</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        const base_url = '<?= base_url(); ?>';
        const service_header = <?php echo json_encode($service_header); ?>;
        const id_service_header = <?php echo json_encode($id_service_header); ?>;

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

    <script>
        $(document).ready(function() {
            handleCategoryChange();
        });
    </script>

    <script>
        const cut_url = <?php echo json_encode($cut_url); ?>;
        function handleCategoryChange() {
            const pets = <?php echo json_encode($service_content_buy_sale); ?>;
            const serviceSellBox = document.querySelector('.service-sell-box');
            const selected = document.getElementById('service-search');
            $('.service-sell-box').empty();

            let filteredPets = pets;

            if (selected.value == 'price_high_to_low') {
                filteredPets.sort(function(a, b) {
                    return b.price - a.price;
                });
            } else if (selected.value == 'price_low_to_high') {
                filteredPets.sort(function(a, b) {
                    return a.price - b.price;
                });
            } else if (selected.value == 'latest_date') {
                filteredPets.sort(function(a, b) {
                    return new Date(a.create_date) - new Date(b.create_date);
                });
            } else if (selected.value == 'new_date') {
                filteredPets.sort(function(a, b) {
                    return new Date(b.create_date) - new Date(a.create_date);
                });
            } else if (selected.value == 'sale_complete') {
                filteredPets = pets.filter(function(pet) {
                    return pet.status === '2';
                });
            } else if (selected.value == 'not_sale') {
                filteredPets = pets.filter(function(pet) {
                    return pet.status === '1';
                });
            }
            filteredPets.forEach(pet => {
                const encodedRowData = encodeURIComponent(JSON.stringify(pet));
                const petCard = `
                    <div class="pet-card" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="set-img swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="${base_url}/dist/img/animal/${pet.image_path}" alt="${cut_url[0] == 'th' ? pet.name_pet_th : pet.name_pet_en}"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="date-posted">วันที่ลง: ${pet.create_date}</div>
                            <h5 class="card-title">${cut_url[0] == 'th' ? pet.name_pet_th : pet.name_pet_en}</h5>
                            <p class="card-text"><i class="fas fa-paw" style="color: #0198B4; margin-right: 10px;"></i><span id="breed${pet.id_service_content_buy_sale}">พันธุ์:</span> ${cut_url[0] == 'th' ? pet.breed_th : pet.breed_en}</p>
                            <p class="card-text"><i class="fas fa-birthday-cake" style="color: #0198B4; margin-right: 10px;"></i><span id="age${pet.id_service_content_buy_sale}">อายุ:</span> ${pet.age}</p>
                            <p class="card-text"><i class="fas fa-hand-holding-usd" style="color: #0198B4; margin-right: 10px;"></i><span id="price${pet.id_service_content_buy_sale}">ราคา:</span> ${pet.price}<span id="price_unit_${pet.id_service_content_buy_sale}"></span> </p>
                            <p class="card-text"><i class="fas fa-star" style="color: #0198B4; margin-right: 10px;"></i><span id="status_pet_${pet.id_service_content_buy_sale}">สถานะ :</span> ${pet.status === '1' ? 'รอเจ้าของใหม่' : 'ขายแล้ว'}</p>
                            <span class="pet-card-icon ${pet.gender === 'male' ? 'fas fa-mars male-icon' : 'fas fa-venus female-icon'}"></span>
                        </div>
                        <div class="btn-view-more mb-2" data-toggle="modal" data-target="#exampleModal" onclick="load_modal('${encodedRowData}')"><button class="small-primary-button" id="btn_view_more${pet.id_service_content_buy_sale}">view more</button></div>
                    </div>`;
                serviceSellBox.innerHTML += petCard;
            });
        }




        function load_modal(data_pets) {
            const data = JSON.parse(decodeURIComponent(data_pets));
            $('#image_pet').attr('src', base_url + '/dist/img/animal/' + data.image_path);
            $('#name_pet').text(cut_url[0] == 'th' ? data.name_pet_th : data.name_pet_en);
            $('#price_pet').text('<?php echo $cut_url[0] == 'th' ? 'ราคา: ' : 'Price: '; ?>' + data.price);
            $('#breed_pet').text('<?php echo $cut_url[0] == 'th' ? 'พันธุ์: ' : 'Breed: '; ?>' + (cut_url[0] == 'th' ? data.breed_th : data.breed_en));
            $('#age_pet').text('<?php echo $cut_url[0] == 'th' ? 'อายุ: ' : 'Age: '; ?>' + data.age);
            $('#gender_pet').text('<?php echo $cut_url[0] == 'th' ? 'เพศ: ' : 'Gender: '; ?>' + (data.gender === 'male' ? 'ชาย' : 'หญิง'));
            $('#color_pet').text('<?php echo $cut_url[0] == 'th' ? 'สีขน: ' : 'Color: '; ?>' + (cut_url[0] == 'th' ? data.color_th : data.color_en));
            $('#characteristic_pet').text('<?php echo $cut_url[0] == 'th' ? 'ลักษณะนิสัย: ' : 'Characteristic: '; ?>' + (cut_url[0] == 'th' ? data.characteristics_th : data.characteristics_en));
            $('#vaccination_history_pet').text('<?php echo $cut_url[0] == 'th' ? 'ประวัติการฉีดวัคซีน: ' : 'Vaccination History: '; ?>' + (cut_url[0] == 'th' ? data.vaccination_history_th : data.vaccination_history_en));
        }

        // new Swiper('.swiper-container', {
        //     slidesPerView: 1,
        //     spaceBetween: 0,
        //     navigation: {
        //         nextEl: '.swiper-button-next',
        //         prevEl: '.swiper-button-prev',
        //     },
        //     loop: true,
        // });
        //         <div class="swiper-button-next"></div>
        // <div class="swiper-button-prev"></div>
    </script>

</body>

</html>