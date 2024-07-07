<!-- email_template.php -->
<!DOCTYPE html>
<html lang="en">

<body style="font-family: 'Kanit', sans-serif; background-color: #F5F5F5; padding: 20px;">
    <div style="width: 100%; max-width: 700px; margin: 0 auto; padding: 20px; background-color: #F5F5F5;">
        <div style="background-color: #FFE072; border-radius: 20px 20px 0 0; padding: 20px; text-align: left;">
            <img src="https://petjourneyagency.com/dist/img/logo.jpg" alt="Pet Journey Agency" style="float: right; width: 50px; height: 50px; border-radius: 50%;">
            <h1 style="margin: 0; padding: 0; color: #002157;"><strong>Pet Journey Agency</strong></h1>
            <h2 style="margin: 0; padding: 0; color: #0198B4;">รายละเอียดการติดต่อ</h2>
            <h3 style="margin: 0; padding: 0; color: #0198B4">จากคุณ <?= $data['name'] . ' ' . $data['lastname'] ?></h3>
        </div>
        <div style="background-color: white; border-radius: 0 0 20px 20px; text-align: left; color: #002157; padding: 20px;">
            <table style="width: 100%; margin-top: 20px;">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">ชื่อผู้ติดต่อ</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;">
                        <?= !empty($data['name']) ? $data['name'] : ' ' ?>
                        <?= $data['name'] . ' ' . $data['lastname'] ?>
                    </td>
                </tr>
            </table>
            <table style="width: 100%;">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">อีเมล์</td>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">เบอร์โทรศัพท์</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;"><?= !empty($data['email']) ? $data['email'] : 'ไม่ระบุ' ?></td>
                    <td style="font-size: 16px;"><?= !empty($data['phone_number']) ? $data['phone_number'] : 'ไม่ระบุ' ?></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">รายละเอียดข้อความ</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;">
                        <?= !empty($data['message']) ? $data['message'] : 'ไม่ระบุ' ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>