<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล ติดต่อ</title>
</head>

<body style="font-family: 'Kanit', sans-serif; background-color: #F5F5F5; padding: 20px;">
    <div style="width: 100%; max-width: 700px; margin: 0 auto; padding: 20px; background-color: #F5F5F5;">
        <div style="background-color: #FFE072; border-radius: 20px 20px 0 0; padding: 20px; text-align: left;">
            <img src="https://petjourneyagency.com/dist/img/logo.jpg" alt="Pet Journey Agency" style="float: right; width: 50px; height: 50px; border-radius: 50%;">
            <h1 style="margin: 0; padding: 0; color: #002157;"><strong>Pet Journey Agency</strong></h1>
            <h2 style="margin: 0; padding: 0; color: #0198B4;">รายละเอียดคำขอใบเสนอราคา</h2>
            <h3 style="margin: 0; padding: 0; color: #0198B4">คุณ <?= $data['name_last'] ?></h3>
        </div>
        <div style="background-color: white; border-radius: 0 0 20px 20px; text-align: left; color: #002157; padding: 20px;">
            <table style="width: 100%; margin-top: 20px;">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">ชื่อ</td>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">อีเมล์</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;"><?= !empty($data['name_last']) ? $data['name_last'] : 'ไม่ระบุ' ?></td>
                    <td style="font-size: 16px;"><?= !empty($data['email']) ? $data['email'] : 'ไม่ระบุ' ?></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">หมายเลขโทรศัพท์</td>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">วันเดินทาง</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;"><?= !empty($data['phone_number']) ? $data['phone_number'] : 'ไม่ระบุ' ?></td>
                    <td style="font-size: 16px;"><?= !empty($data['travel_date']) ? $data['travel_date'] : 'ไม่ระบุ' ?></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">ประเทศต้นทาง</td>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">สนามบินต้นทาง</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;"><?= !empty($data['country_of_origin_name']) ? $data['country_of_origin_name'] : 'ไม่ระบุ' ?></td>
                    <td style="font-size: 16px;"><?= !empty($data['airport_of_origin']) ? $data['airport_of_origin'] : 'ไม่ระบุ' ?></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">ประเทศปลายทาง</td>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">สนามบินปลายทาง</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;"><?= !empty($data['destination_country_name']) ? $data['destination_country_name'] : 'ไม่ระบุ' ?></td>
                    <td style="font-size: 16px;"><?= !empty($data['destination_airport']) ? $data['destination_airport'] : 'ไม่ระบุ' ?></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">รูปแบบการเดินทาง</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;"><?php if (!empty($data['travel_type'])) {
                                                        if ($data['travel_type'] == 1) {
                                                            echo 'เดินทางพร้อมผู้โดยสาร (โหลดใต้ท้องเครื่อง)';
                                                        } elseif ($data['travel_type'] == 2) {
                                                            echo 'เดินทางพร้อมผู้โดยสาร (บนเคบิน)';
                                                        } elseif ($data['travel_type'] == 3) {
                                                            echo 'คาร์โก้ (ไม่มีผู้เดินทางด้วย)';
                                                        }
                                                    }else{
                                                        echo 'ไม่ระบุ';
                                                    } ?></td>
                </tr>
            </table>
            <hr>
            <table style="width: 100%;">
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">บริการที่เลือก</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;">
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
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">ชนิดสัตว์</td>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">สายพันธุ์</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;"><?= !empty($data['animal_type']) ? $data['animal_type'] : 'ไม่ระบุ' ?></td>
                    <td style="font-size: 16px;"><?= !empty($data['breed']) ? $data['breed'] : 'ไม่ระบุ' ?></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">อายุ</td>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">น้ำหนัก</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;"><?= !empty($data['age']) ? $data['age'] : 'ไม่ระบุ' ?></td>
                    <td style="font-size: 16px;"><?= !empty($data['weight']) ? $data['weight'] : 'ไม่ระบุ' ?></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td style="font-weight: bold; font-size: 16px; color: #002157;">หมายเหตุ</td>
                </tr>
                <tr>
                    <td style="font-size: 16px;"><?= !empty($data['note']) ? $data['note'] : 'ไม่ระบุ' ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>