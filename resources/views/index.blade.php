@extends('layouts.app')
@section('title', 'Index')
@section('konten')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="assets/img/world-dotted-map.png" alt="" class="hero-bg" data-aos="fade-in">

            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">Solusi Praktis untuk Kebutuhan Gadget Anda </h2>
                        <p data-aos="fade-up" data-aos-delay="100">Butuh HP dalam waktu singkat tanpa harus membeli? Metro
                            rental.ID hadir sebagai solusi cerdas — cepat, aman, dan tanpa ribet. Cocok untuk kebutuhan
                            harian, pekerjaan, atau event khusus.</p>

                        {{-- <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
              <input type="text" class="form-control" placeholder="Your ZIP code or City. e.g. New York">
              <button type="submit" class="btn btn-primary">Search</button>
            </form> --}}

                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="100"
                                        data-purecounter-duration="0" class="purecounter">100</span>
                                    <p>Pelanggan</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="0"
                                        class="purecounter">50</span>
                                    <p>Jumlah Handphone</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span class="display-6 fw-bold">24/7</span>
                                    <p>Layanan</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="0"
                                        class="purecounter">4</span>
                                    <p>Staf</p>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="assets/img/logoo.png" class="img-fluid mb-3 mb-lg-0" alt="">
                    </div>

                </div>
            </div>

        </section><!-- /Hero Section -->

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
                        <p style="text-align: justify">
                            Metrorental berjalan sejak tahun 2015 metro rental menawarkan, kebutuhan akan layanan sewa HP
                            harian dan bulanan semakin meningkat, terutama bagi perusahaan dan acara besar yang memerlukan
                            perangkat komunikasi yang andal. Namun, sayangnya, layanan sewa HP seperti ini masih jarang
                            ditemukan. MetroRental hadir untuk menjawab kebutuhan tersebut dengan menawarkan berbagai
                            pilihan handphone berkualitas untuk disewa, baik dalam jangka waktu harian, bulanan, maupun
                            tahunan, tanpa perlu membelinya.
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Services Section -->
       <main class="main">

        

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
                            <h3>Service</h3>
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
                            <h3><a href="#" class="stretched-link">Konsultasi</a></h3>
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
                            <h3><a href="/android" class="stretched-link">android</a></h3>
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
                                <h3><a href="/iphone" class="stretched-link">Iphone</a></h3>

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
                            <h3><a href="/gaming" class="stretched-link">Gaming</a></h3>
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
        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="assets/img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h4>Tertarik? Silahkan Klik Untuk Info Lebih Lanjut</h4>
                            <a class="cta-btn"
                                href="https://wa.me/6285609336061?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20Anda"
                                target="_blank">
                                Hubungi via WhatsApp
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">

            <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                        rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                        cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                        minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                        dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse
                                        veniam culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->


    </main>
@endsection
