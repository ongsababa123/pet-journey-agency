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
            margin-top: 150px;
        }

        .footer img {
            height: 70px;
        }

        .footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer .contact-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
        }

        .footer .contact-info div {
            margin: 5px 0;
            display: flex;
            align-items: center;
            font-size: 1rem;
        }

        .footer .contact-info div i {
            margin-right: 10px;
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
    top: -152px;
    left: 50%;
    transform: translateX(-50%);
    height: 200px;
        }

        @media (max-width: 768px) {
            .footer {
                flex-direction: column;
            }

            .footer .container {
                flex-direction: column;
                text-align: center;
            }

            .footer .contact-info {
                align-items: center;
                text-align: center;
            }

            .footer .contact-info div {
                justify-content: center;
            }

            .footer .social-icons {
                display: none;
            }
        }
    </style>
</head>

<body>
    <footer class="footer">
        <img class="pic-footer" src="<?= base_url('dist/img/footer.png') ?>" alt="Logo">
            <div>
                <img src="<?= base_url('dist/img/logo_pet_journey.png') ?>" alt="Logo">
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
    </footer>
</body>

</html>
