@extends('layouts.app')
@section('title', 'Kontak')
@section('konten')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
            <div class="container position-relative">
                <h1>Kontak</h1>
                <p>Hubungi kami untuk informasi lebih lanjut, kerja sama, atau pertanyaan mengenai layanan kami.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Kontak</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.9068343476183!2d105.32703787476991!3d-5.118714151824228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40bc1d176fd9af%3A0x804b3b4145837ec4!2sSMK%20Negeri%203%20Metro!5e0!3m2!1sid!2sid!4v1742349452887!5m2!1sid!2sid"
                        width="100%" height="400" style="border:0;border-radius: 10px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jl. Kemiri, 15 A, Iringmulyo, Metro Timur, Banjar Rejo, Batanghari, Kota Metro, Lampung
                                    34111, Indonesia</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Kontak Tim</h3>
                                <p><a href="https://wa.me/6285609336061?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20Anda"
                                target="_blank">+62818612381</a></p>

                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Kami</h3>
                                <p>Metrorental.ID@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Anda"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email Anda"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                    

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

@endsection
