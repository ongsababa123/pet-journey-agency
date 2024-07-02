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
                <h2>รายละเอียดการติดต่อ</h2>
                <h2 style="padding-bottom: 20px;">จากคุณ <?= $data['name'] . ' ' . $data['lastname']?></h2>
            </div>
        </div>
        <br>
        <div style="background-color: white; border-radius: 20px; text-align: left; color: rgb(0, 0, 0); padding: 20px;">
            <div style="margin: 10px 30px;">
                <table style="width: 100%;">
                    <tr>
                        <td style="font-weight: bold; font-size: 16px;color: black;">ชื่อผู้ติดต่อ</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 16px;color: #002157;">
                            <?= !empty($data['name']) ? $data['name'] : ' ' ?>
                            <?= $data['name'] . ' ' . $data['lastname']?>
                        </td>
                        <td style="font-weight: bold; font-size: 16px;color: #002157;">
                    </tr>
                </table>
                <br>
                <table style="width: 100%;">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <tr>
                        <td style="font-weight: bold; font-size: 16px;color: black;">อีเมล์</td>
                        <td style="font-weight: bold; font-size: 16px;color: black;">เบอร์โทรศัพท์</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 16px;color: #002157;">
                            <?= !empty($data['email']) ? $data['email'] : 'ไม่ระบุ' ?>
                        </td>

                        <td style="font-weight: bold; font-size: 16px;color: #002157;">
                            <?= !empty($data['phone_number']) ? $data['phone_number'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
                <br>
                <table style="width: 100%;">
                    <tr>
                        <td style="font-weight: bold; font-size: 16px;color: black;">รายละเอียดข้อความ</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; font-size: 16px;color: #002157;">
                            <?= !empty($data['message']) ? $data['message'] : 'ไม่ระบุ' ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>