<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* General Styles */
        * {
            font-family: 'Kanit', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding-top: 100px;
        }

        .icon-spacing {
            margin-right: 10px;
        }

        .badge-pill {
            background-color: #FFD700;
            color: #333;
            font-size: 12px;
            font-weight: 600;
            padding: 3px 20px;
            border-radius: 25px;
            text-decoration: none;
            display: unset;
            width: 100px;
            align-self: center;
            margin-bottom: 15px;
            cursor: pointer;
        }

        /* Carousel Styles */
        .carousel-item img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .carousel-indicators li {
            background-color: #fff;
        }

        .carousel-indicators .active {
            background-color: #000;
        }

        /* Navbar Styles */
        .navbar-custom {
            background-color: #ffffff;
            border-bottom: 1px solid #eaeaea;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #000000;
        }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            top: 500px;
            width: 80%;
            transform: translateY(-50%);
            left: 10%;
        }

        .pagination i {
            font-size: 2em;
            cursor: pointer;
            background-color: white;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .pagination i#prev-btn {
            margin-left: -50px;
            /* Negative margin to position correctly */
        }

        .pagination i#next-btn {
            margin-right: -50px;
            /* Negative margin to position correctly */
        }

        .page-indicators {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .page-indicators span {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ddd;
            margin: 0 5px;
            display: inline-block;
        }

        .page-indicators .active {
            background-color: #23456B;
        }

        @media (max-width: 1200px) {
            .carousel-item img {
                height: 300px;
            }
        }

        @media (max-width: 991.98px) {
            .carousel-item img {
                height: 250px;
            }
        }

        @media (max-width: 767.98px) {
            .carousel-item img {
                height: 200px;
            }

            .pagination {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- sec slide page -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $count_cover = 0;
                foreach ($cover_page as $key => $value) {
                    if ($value['language'] == $cut_url[0]) {
                        if ($count_cover == 0) {
                            $count_cover = $count_cover + 1;
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
                        } else {
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $key . '"></li>';
                        }
                    }
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                $count_cover_image = 0;
                foreach ($cover_page as $key => $value) {
                    if ($value['language'] == $cut_url[0]) {
                        var_dump($value);
                        if ($count_cover_image == 0) {
                            $count_cover_image = $count_cover_image + 1;
                            echo '<div class="carousel-item active">';
                        } else {
                            echo '<div class="carousel-item">';
                        }
                        echo '<img src="' . base_url('dist/img/cover/' . $value['path_image']) . '" class="d-block w-100" alt="Slide ' . $key . '">';
                        echo '</div>';
                    }
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>