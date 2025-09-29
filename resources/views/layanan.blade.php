@extends('layouts.app')
@section('title', 'Layanan')
@section('konten')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
            <div class="container position-relative">
                <h1>Layanan & Produk</h1>
                <p>Kami Akan Melayani Anda Dengan Senang Hati</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Layanan & Produk</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Layanan<br></span>
                <h2>Layanan</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-hp.png" alt="" class="img-fluid">
                            </div>
                            <h3><a href="/service"class="stretched-link">Service</a></h3>
                            <p> Perbaikan dan perawatan perangkat IT dengan profesional, memastikan perangkat Anda selalu
                                dalam kondisi baik.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/sewa.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="#" class="stretched-link">sewa HP</a></h3>
                            <p>Harga kompetitif, pilihan produk luas, dan fleksibilitas durasi sewa, memungkinkan Anda untuk
                                memiliki perangkat IT yang sesuai dengan kebutuhan Anda tanpa harus membeli.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/konsull.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="https://wa.me/6285609336061?text=Halo,%20saya%20ingin%20konsultasi%20mengenai%20layanan%20sewa%20perangkat" target="_blank"    class="stretched-link">Konsultasi</a></h3>
                            <p>Membantu memilih perangkat yang sesuai kebutuhan, memberikan rekomendasi produk yang tepat
                                untuk kebutuhan Anda.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up" style="padding-top: 100px">
                        <span>Produk<br></span>
                        <h2>Produk</h2>
                    </div><!-- End Section Title -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card d-flex flex-column justify-content-between h-100 p-3">
                            <div class="card-img">
                                <img src="assets/img/samsung.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="/produk/android" class="stretched-link">android</a></h3>
                            <p>Sewa Smartphone Populer dari MetroRental

                                Sewa smartphone dengan harga kompetitif dan fleksibilitas durasi sewa. Tersedia model
                                seperti:

                                - Samsung Galaxy S22, S23, A54
                                - Xiaomi Redmi Note 12, Poco X5 Pro
                                - Oppo Reno 8, A57
                                - Vivo V25, Y21
                                - Realme C35, GT 2

                                Dengan dukungan teknis profesional dan harga terjangkau. Percayakan kebutuhan smartphone
                                Anda kepada MetroRental!</p>
                            <div class="mt-auto text-end">
                                <a href="#" class="btn btn-primary" style="width: 40%; color:white;">Selengkapnya...</a>
                            </div>

                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card d-flex flex-column justify-content-between h-100 p-3">
                            <div>
                                <div class="card-img">
                                    <img src="assets/img/ip.jpg" alt="" class="img-fluid">
                                </div>
                                <h3><a href="/produk/iphone" class="stretched-link">Iphone</a></h3>

                                <p>
                                    Sewa iPhone dari MetroRentalSewa iPhone dengan harga kompetitif dan fleksibilitas durasi
                                    sewa. Tersedia model iPhone terbaru seperti:
                                    - iPhone 13
                                    - iPhone 14
                                    - iPhone 15 Pro
                                    - iPhone 15 Pro Max
                                    Dengan dukungan teknis profesional dan harga terjangkau. Percayakan kebutuhan iPhone
                                    Anda kepada MetroRental!
                                </p>
                            </div>
                            <div class="mt-auto text-end">
                                <a href="#" class="btn btn-primary" style="width: 40%; color:white;">Selengkapnya...</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card d-flex flex-column justify-content-between h-100 p-3">
                            <div class="card-img">
                                <img src="assets/img/rog.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="/produk/gaming" class="stretched-link">Gaming</a></h3>
                            <p>Sewa Smartphone Gaming dari MetroRental

                                Sewa smartphone gaming dengan harga kompetitif dan fleksibilitas durasi sewa. Tersedia model
                                seperti:

                                - Asus ROG Phone 5
                                - Xiaomi Poco F4 GT
                                - Samsung Galaxy S22 Ultra
                                - Realme GT 2 Pro
                                - Infinix GT 10 Pro

                                Dengan dukungan teknis profesional dan harga terjangkau. Cocok untuk gaming, editing, dan
                                kebutuhan performa tinggi lainnya. Percayakan kebutuhan smartphone gaming Anda kepada
                                MetroRental!</p>
                            <div class="mt-auto text-end">
                                <a href="#" class="btn btn-primary" style="width: 40%; color:white;">Selengkapnya...</a>
                            </div>

                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

    @endsection
