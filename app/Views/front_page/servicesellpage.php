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
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .pet-card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            width: 260px;
            height: 550px;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
        }

        .set-img {
            padding: 35px 10px 0px 10px;
        }

        .pet-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 7px;
        }

        .pet-card .card-body {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .pet-card .card-title {
            font-size: 18px;
            font-weight: 700;
            color: #003366;
        }

        .pet-card .card-text {
            font-size: 14px;
            color: #646161;
        }

        .pet-card .btn {
            background-color: #FFDA56;
            color: #003366;
            font-weight: 700;
            border-radius: 5px;
            padding: 10px 20px;
            text-transform: uppercase;
        }

        .pet-card .btn:hover {
            background-color: #FFC107;
        }

        .pet-card-icon {
            position: absolute;
            top: 50%;
            right: 7%;
        } 

        .date-posted {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 12px;
            color: #646161;
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
            <div class="service-detail" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1500">
                <div class="service-header d-flex align-items-center">
                    <h4 id="service_header_title">ซื้อขายสัตว์เลี้ยงจากต่างประเทศ</h4>
                </div>
                <div class="service-main-content">
                    <div class="service-category">
                        <div class="service-category-search">
                            <label for="service-search" class="mr-2">ค้นหาสัตว์เลี้ยง:</label>
                            <select id="service-search" class="form-control">
                                <option value="">เลือกสัตว์เลี้ยง</option>
                                <option value="สุนัข">สุนัข</option>
                                <option value="แมว">แมว</option>
                                <option value="นก">นก</option>
                                <option value="ปลา">ปลา</option>
                                <option value="กระต่าย">กระต่าย</option>
                                <option value="หนูแฮมสเตอร์">หนูแฮมสเตอร์</option>
                                <option value="เต่า">เต่า</option>
                                <option value="สัตว์เลี้ยงแปลกๆ">สัตว์เลี้ยงแปลกๆ</option>
                            </select>
                        </div>
                    </div>
                    <div class="service-sell-box mt-4"></div>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-sticky">
                    <ul class="service-list-item" id="service-list-item">
                        <span class="service-list-title" id="service_list_title">บริการของเรา</span>
                    </ul>
                    <div class="price-request">
                        <h5 id="title_price_request">ต้องการใบเสนอราคา</h5>
                        <span id="detail_price_request">หากต้องการใบเสนอราคาสามารถคลิกที่ปุ่มด้านล่างนี้ได้เลย!!!</span> <br>
                        <button type="button" class="btn btn-warning btn-sm mt-2" id="btn_price_request">ขอใบเสนอราคา</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const base_url = '<?= base_url(); ?>';

        const services = [
            'นำเข้าและส่งออกสัตว์เลี้ยง',
            'บริการตรวจสัตว์เลี้ยง',
            'บริการขึ้นทะเบียนสัตว์เลี้ยง',
            'บริการจองตั๋วเครื่องบิน',
            'บริการจัดทำเอกสาร',
            'โรงแรมสำหรับสัตว์เลี้ยง',
            'โรงแรม Pet Friendly',
            'จำหน่ายสัตว์เลี้ยงต่างประเทศ'
        ];

        const serviceListContainer = document.getElementById('service-list-item');
        services.forEach(service => {
            const li = document.createElement('li');
            li.textContent = service;
            serviceListContainer.appendChild(li);
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#service-search').select2();

            $('#service-search').on('change', function() {
                const selectedService = $(this).val();
                const listItems = $('#service-list-item li');
                listItems.each(function() {
                    if (selectedService === '' || $(this).text() === selectedService) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>

    <script>
        const pets = [{
                title: "text title",
                species: "พันธุ์ เปอร์เซีย",
                age: "3 เดือน",
                weight: "3 กิโล",
                price: "12000 บาท",
                image: "dist/img/pic_service_1.png",
                gender: "male"
            },
            {
                title: "text title",
                species: "พันธุ์ เปอร์เซีย",
                age: "3 เดือน",
                weight: "3 กิโล",
                price: "12000 บาท",
                image: "dist/img/pic_service_2.png",
                gender: "female"
            },
            {
                title: "text title",
                species: "พันธุ์ เปอร์เซีย",
                age: "3 เดือน",
                weight: "3 กิโล",
                price: "12000 บาท",
                image: "dist/img/pic_service_3.png",
                gender: "male"
            },
            {
                title: "text title",
                species: "พันธุ์ เปอร์เซีย",
                age: "3 เดือน",
                weight: "3 กิโล",
                price: "12000 บาท",
                image: "dist/img/pic_service_4.png",
                gender: "male"
            },
            {
                title: "text title",
                species: "พันธุ์ เปอร์เซีย",
                age: "3 เดือน",
                weight: "3 กิโล",
                price: "12000 บาท",
                image: "dist/img/pic_service_5.png",
                gender: "female"
            },
            {
                title: "text title",
                species: "พันธุ์ เปอร์เซีย",
                age: "3 เดือน",
                weight: "3 กิโล",
                price: "12000 บาท",
                image: "dist/img/pic_service_6.png",
                gender: "female"
            }
        ];

        const serviceSellBox = document.querySelector('.service-sell-box');

        pets.forEach(pet => {
            const petCard = `
        <div class="pet-card">
            <div class="set-img">
              <img src="${base_url}/${pet.image}" alt="${pet.title}">
            </div>            
            <div class="card-body">
                <div class="date-posted">Date Posted: 11 May 2022</div>
                <h5 class="card-title">${pet.title}</h5>
                <p class="card-text"><i class="fas fa-paw"></i> ${pet.species}</p>
                <p class="card-text"><i class="fas fa-birthday-cake"></i> ${pet.age}</p>
                <p class="card-text"><i class="fas fa-weight"></i> ${pet.weight}</p>
                <p class="card-text"><strong>ราคา: ${pet.price}</strong></p>
                <button href="#" class="btn btn-warning">view more</button>
                <span class="pet-card-icon ${pet.gender === 'male' ? 'fas fa-mars male-icon' : 'fas fa-venus female-icon'}"></span>
            </div>
        </div>
    `;
            serviceSellBox.innerHTML += petCard;
        });
    </script>
</body>

</html>
