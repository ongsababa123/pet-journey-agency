<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .footer {
            background-color: #FFD700;
            padding: 20px 0;
            text-align: center;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 280px;
        }

        .footer img {
            height: 70px;
        }

        .footer .social-icons {
            display: flex;
            align-items: center;
        }

        .footer .social-icons a {
            color: #000;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .footer .social-icons a:hover {
            color: #23456B;
        }

        .footer p {
            margin-top: 10px;
            font-size: 0.9rem;
            color: #000;
        }

        .footer .pic-footer {
            position: absolute;
            top: -370px;
            left: 50%;
            transform: translateX(-50%);
            height: 400px;
        }

        /* contact-info */
        /* contact-info */
        .contact-info {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            flex-wrap: wrap;
        }

        .info-item {
            display: flex;
            align-items: center;
            text-align: left;
            margin: 10px 20px;
        }

        .info-item i {
            margin-right: 10px;
            font-size: 24px;
            color: #00A4E4;
            border-radius: 50%;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
        }

        .info-item div {
            display: flex;
            flex-direction: column;
        }

        .contact-info>div {
            display: flex;
            align-items: center;
            text-align: left;
            margin: 10px 20px;
        }

        .contact-info>div i {
            margin-right: 10px;
            font-size: 24px;
            color: #fff;
            background-color: #00A4E4;
            border-radius: 50%;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 1200px) {
            .contact-info {
                display: none;
            }
        }

        @media (max-width: 768px) {

            .footer .container {
                flex-direction: column;
                text-align: center;
            }

            .footer .pic-footer {
                position: absolute;
                top: -179px;
                left: 50%;
                transform: translateX(-50%);
                height: 200px;
            }

            .footer {
                background-color: #FFD700;
                padding: 20px 0;
                text-align: center;
                position: relative;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 280px;
            }
        }

        @media (max-width: 500px) {
            .footer .social-icons {
                display: none;
            }

        }
    </style>
</head>
<?php
    $cut_url = explode('/', $uri_menu);
    ?>
<body>
    <footer class="footer">
        <img class="pic-footer" src="<?= base_url('dist/img/footerpic.png') ?>" alt="Logo">
        <div>
        <img src="<?= base_url('dist/img/logo/'). $contact_data['logo_image_path'] ?>" alt="Logo">
        </div>
        <div class="contact-info">
            <div class="info-item">
                <i class="fas fa-clock"></i>
                <div>
                    <span id="ft_open1"></span>
                    <?php if ($cut_url['0'] == 'th') echo $contact_data['open_time'];
                    else echo $contact_data['open_time_en']; ?>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <span id="ft_email1"></span>
                    <span><?= $contact_data['email'] ?></span>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <div>
                    <span id="ft_callus1"></span>
                    <span><?= $contact_data['phone_number'] ?></span>
                </div>
            </div>
        </div>
        <div class="social-icons">
            <?php if (!empty($contact_data['facebook_link'])) : ?>
                <a href="<?= $contact_data['facebook_link'] ?>"><i class="fab fa-facebook-f"></i></a>
            <?php endif; ?>
            <?php if (!empty($contact_data['instragram_link'])) : ?>
                <a href="<?= $contact_data['instragram_link'] ?>"><i class="fab fa-instagram"></i></a>
            <?php endif; ?>
        </div>
    </footer>
</body>

</html>