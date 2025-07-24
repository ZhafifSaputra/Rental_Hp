@extends('layouts.detail')
@section('title', 'Xiaomi')
@section('konten')
    <!-- Open Content -->
    <section class="bg-light fade-in">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg" alt="Card image cap"
                            id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item"
                            data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg"
                                                    alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg"
                                                    alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg"
                                                    alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg"
                                                    alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg"
                                                    alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg"
                                                    alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg"
                                                    alt="Product Image 7">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg"
                                                    alt="Product Image 8">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="/assetts/img/android/xiomi/xiomi.jpg"
                                                    alt="Product Image 9">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Third slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">Xiaomi – Redmi Note 13 Pro</h1>
                            <p class="h3 py-2">$25.00</p>
                            <br>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Xiaomi</strong></p>
                                </li>
                            </ul>

                            <h6>Deskripsi:</h6>
                            <p> Xiaomi Redmi Note 13 Pro 5G hadir dengan desain elegan, performa kencang, dan kamera super
                                tajam. Ditenagai oleh chipset Snapdragon 7s Gen 2, layar AMOLED 6,67 inci dengan refresh
                                rate 120 Hz, serta kamera utama 200MP, smartphone ini cocok untuk kamu yang butuh performa,
                                tampilan visual memukau, dan hasil foto yang detail.
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul>

                            <h6>Spesifikasi:</h6>
                            <ul class="list-unstyled pb-3">
                                <li><i class="fas fa-mobile-alt me-2 text-primary"></i>Layar AMOLED 6,67" FHD+ • 120Hz •
                                    Dolby Vision</li>
                                <li><i class="fas fa-microchip me-2 text-primary"></i>Chipset Snapdragon 7s Gen 2 (4nm) +
                                    GPU Adreno 710</li>
                                <li><i class="fas fa-memory me-2 text-primary"></i>RAM hingga 12GB • Memori internal hingga
                                    512GB</li>
                                <li><i class="fas fa-camera me-2 text-primary"></i>Kamera belakang 200MP (OIS) + 8MP
                                    (ultrawide) + 2MP (makro)</li>
                                <li><i class="fas fa-camera-retro me-2 text-primary"></i>Kamera depan 16MP • Video hingga 4K
                                </li>
                                <li><i class="fas fa-battery-full me-2 text-primary"></i>Baterai 5.100 mAh • Fast Charging
                                    67W</li>
                                <li><i class="fas fa-shield-alt me-2 text-primary"></i>IP54 tahan percikan air & debu •
                                    Gorilla Glass Victus</li>
                            </ul>



                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <a href="https://wa.me/6285609336061?text=Halo%20kak%2C%20saya%20tertarik%20banget%20dengan%20Samsung%20Galaxy%20A55%205G-nya.%20Boleh%20tanya%20info%20lengkap%20untuk%20sewa%20HP%20ini%3F"
                                        class="btn btn-success btn-lg" target="_blank">
                                        <i class="fab fa-whatsapp me-2"></i>Sewa via WhatsApp
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
@endsection
