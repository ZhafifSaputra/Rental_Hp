<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="/assetts/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assetts/img/favicon.ico">

    <link rel="stylesheet" href="/assetts/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assetts/css/templatemo.css">
    <link rel="stylesheet" href="/assetts/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/assetts/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="/assetts/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="/assetts/css/slick-theme.css">
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

</head>

<body>

    @yield('konten');

    <!-- Start Script -->
    <script src="/assetts/js/jquery-1.11.0.min.js"></script>
    <script src="/assetts/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assetts/js/bootstrap.bundle.min.js"></script>
    <script src="/assetts/js/templatemo.js"></script>
    <script src="/assetts/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="/assetts/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
        // Saat halaman selesai dimuat, tambahkan class 'show' agar animasi dimulai
        document.addEventListener("DOMContentLoaded", function() {
            const fadeTarget = document.querySelector('.fade-in');
            if (fadeTarget) {
                setTimeout(() => {
                    fadeTarget.classList.add('show');
                }, 100); // Delay sedikit agar terlihat smooth
            }
        });
    </script>
    <!-- End Slider Script -->
</body>

</html>
