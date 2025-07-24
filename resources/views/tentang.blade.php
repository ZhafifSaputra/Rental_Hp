@extends('layouts.app')
@section('title', 'Tentang')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@section('konten')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
            <div class="container position-relative">
                <h1>Tentang</h1>
                <p>Sebuah Perusahaan yang Bergerak Di Bidang Rental Handphone</p>
                
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Tentang</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <img src="assets/img/perusahaan.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang Kami</h3>
                        <p>
                            Metro rental berjalan sejak tahun 2015 metro rental menawarkan, kebutuhan akan layanan sewa HP harian dan bulanan semakin meningkat, terutama bagi perusahaan dan acara besar yang memerlukan perangkat komunikasi yang andal. Namun, sayangnya, layanan sewa HP seperti ini masih jarang ditemukan. MetroRental hadir untuk menjawab kebutuhan tersebut dengan menawarkan berbagai pilihan handphone berkualitas untuk disewa, baik dalam jangka waktu harian, bulanan, maupun tahunan, tanpa perlu membelinya.
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pelanggan</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Jumlah Handphone</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span class="display-6 fw-bold">24/7</span>
                            <p>Pelayanan</p>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Staf</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Team Kami<br></span>
                <h2>Team Kami</h2>
                <p>
                <p>Didukung oleh tim handal dan berpengalaman, kami siap memberikan pelayanan terbaik untuk memenuhi
                    kebutuhan Anda.</p>
                </p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="swiper team-slider">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="member text-center">
                                <img src="assets/img/team/img_zhafif.jpg" class="img-fluid" alt="">
                                <div class="member-content">
                                    <h4>Zhafif</h4>
                                    <span>Web Development</span>
                                    <p>Membangun website yang fungsional dan responsif untuk mendukung kebutuhan digital Anda.</p>
                                    <div class="social">
                                        <a href="https://www.instagram.com/zhafiif_/"><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="member text-center">
                                <img src="assets/img/nurr.jpg" class="img-fluid" alt="">
                                <div class="member-content">
                                    <h4>Nurfadilla</h4>
                                    <span>Marketing</span>
                                    <p>Merancang strategi pemasaran yang tepat sasaran untuk menjangkau lebih banyak audiens.</p>
                                    <div class="social">
                                        <a href="https://www.instagram.com/HYINIDILLAA/"><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="member text-center">
                                <img src="assets/img/danangg.jpg" class="img-fluid" alt="">
                                <div class="member-content">
                                    <h4>Danang</h4>
                                    <span>Content</span>
                                    <p>Menyusun konten menarik dan informatif untuk memperkuat brand dan komunikasi Anda.</p>
                                    <div class="social">
                                        <a href="https://www.instagram.com/_TY.OOOO/"><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="member text-center">
                                <img src="assets/img/memit.jpg" class="img-fluid" alt="">
                                <div class="member-content">
                                    <h4>Ismed</h4>
                                    <span>Promotions</span>
                                    <p>Mengoptimalkan promosi agar produk dan layanan Anda dikenal lebih luas oleh masyarakat.</p>
                                    <div class="social">
                                        <a href="https://www.instagram.com/ISMEDALI_/"><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </section><!-- /Team Section -->

    </main>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.team-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                reverseDirection: false // geser ke kiri otomatis
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>


@endsection
