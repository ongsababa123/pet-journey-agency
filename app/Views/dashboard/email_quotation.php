<!-- email_template.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* กำหนดค่าพื้นฐานสำหรับคอนเทนเนอร์ */
        .container {
            width: 100%;
            max-width: 700px;
            /* กำหนดความกว้างสูงสุด */
            margin: 0 auto;
            /* กำหนดการจัดศูนย์กลาง */
            padding: 15px;
            /* กำหนดระยะห่างภายใน */
            box-sizing: border-box;
            /* รวมขอบและระยะห่างภายในในความกว้าง/ความสูง */
        }

        /* ตัวอย่างสำหรับขนาดหน้าจอที่เล็ก */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
                /* ลดระยะห่างภายใน */
            }
        }

        .img {
            width: 200px;
            /* กำหนดความกว้างของรูปภาพ */
            height: 200px;
            /* กำหนดความสูงของรูปภาพ */
            border-radius: 50%;
            /* กำหนดให้รูปภาพมีขอบโค้งเป็นวงกลม */
            overflow: hidden;
            /* เพื่อให้ส่วนที่เกินของรูปภาพถูกซ่อน */
        }
    </style>
</head>

<body>
    <div class="container" style="text-align: center;background-color: #F5F5F5;">
        <div>
            <div>
                <img class="img" src="https://scontent.fbkk6-2.fna.fbcdn.net/v/t39.30808-6/439282521_755721613383839_1251049117654634332_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=kOgKxWHrig8Q7kNvgEA-FbI&_nc_ht=scontent.fbkk6-2.fna&oh=00_AYB7zhBLhoDtj20APylo1PtxBKSSL7E_zgGCv7SsKHuR_w&oe=668834E3">
            </div>
        </div>
        <div>
            <div style="background-color: #EACC52;border-radius: 20px;">
                <h1 style="margin-top: 20px;padding-top: 20px;"><strong>Pet Journey Agency</strong></h1>
                <h2>รายละเอียดคำขอใบเสนอราคา</h2>
                <h2 style="padding-bottom: 20px;">คุณ <?= $data['name_last'] ?></h2>
            </div>
        </div>
        <br>
        <div style="background-color: white; border-radius: 20px; text-align: left; color: rgb(0, 0, 0); padding: 20px;">
            <div style="margin: 10px 30px;">
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <tr>
                        <td style="font-weight: bold; font-size: 16px;color: black;">ชื่อ</td>
                        <td style="font-weight: bold; font-size: 16px;color: black;">อีเมล์</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 16px;color: #002157;">
                            <?= !empty($data['name_last']) ? $data['name_last'] : 'ไม่ระบุ' ?>
                        </td>

                        <td style="font-weight: bold; font-size: 16px;color: #002157;">
                            <?= !empty($data['email']) ? $data['email'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: black;">หมายเลขโทรศัพท์</td>
                        <td style="font-weight: bold;font-size: 16px;color: black;">วันเดินทาง</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['phone_number']) ? $data['phone_number'] : 'ไม่ระบุ' ?>
                        </td>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['travel_date']) ? $data['travel_date'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: black;">ประเทศต้นทาง</td>
                        <td style="font-weight: bold;font-size: 16px;color: black;">สนามบินต้นทาง</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['country_of_origin_name']) ? $data['country_of_origin_name'] : 'ไม่ระบุ' ?>
                        </td>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['airport_of_origin']) ? $data['airport_of_origin'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: black;">ประเทศปลายทาง</td>
                        <td style="font-weight: bold;font-size: 16px;color: black;">สนามบินปลายทาง</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['destination_country_name']) ? $data['destination_country_name'] : 'ไม่ระบุ' ?>
                        </td>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['destination_airport']) ? $data['destination_airport'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: black;">ประเภทการเดินทาง</td>
                        <td style="font-weight: bold;font-size: 16px;color: black;">รูปแบบขนส่งสัตว์เลี้ยง</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['travel_type']) ? $data['travel_type'] : 'ไม่ระบุ' ?>
                        </td>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['transport_format']) ? $data['transport_format'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style="width: 100%;">
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: black;">บริการที่เลือก</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?php if (!empty($data['data_service_full'])) : ?>
                                <?php foreach ($data['data_service_full'] as $service) : ?>
                                    <?= '- ' . $service['header_service_name_th'] . '<br>' ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                ไม่ระบุ
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: black;">ชนิดสัตว์</td>
                        <td style="font-weight: bold;font-size: 16px;color: black;">สายพันธ์</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['animal_type']) ? $data['animal_type'] : 'ไม่ระบุ' ?>
                        </td>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['breed']) ? $data['breed'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: black;">อายุ</td>
                        <td style="font-weight: bold;font-size: 16px;color: black;">น้ำหนัก</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['age']) ? $data['age'] : 'ไม่ระบุ' ?>
                        </td>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['weight']) ? $data['weight'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style="width: 100%;">
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: black;">หมายเหตุ</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 16px;color: #002157;">
                            <?= !empty($data['note']) ? $data['note'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>