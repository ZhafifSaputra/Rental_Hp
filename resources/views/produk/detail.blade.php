@extends('layouts.detail')
@section('title', $produk->brand . ' - ' . $produk->nama_produk)

<style>
    /* --- Carousel Container --- */
    .carousel-container {
        position: relative;
        overflow: hidden;
        max-width: 100%;
        margin: auto;
        padding: 10px 40px;
        /* ruang buat tombol prev/next */
    }

    .carousel-slide {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-slide img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        margin: 0 8px;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    /* Hover efek */
    .carousel-slide img:hover {
        transform: scale(1.05);
    }

    /* Tombol Next/Prev */
    .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
        padding: 8px 12px;
        border-radius: 50%;
        z-index: 10;
    }

    .carousel-btn:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .carousel-btn.prev {
        left: 5px;
    }

    .carousel-btn.next {
        right: 5px;
    }

    /* Responsif */
    @media (max-width: 576px) {
        .carousel-slide img {
            width: 120px;
            height: 120px;
        }
    }
</style>

@section('konten')
    <section class="bg-light fade-in">
        <div class="container pb-5">
            <div class="row">
                <!-- Gambar Utama -->
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{ asset('storage/' . $produk->gambar_utama) }}"
                            alt="{{ $produk->nama_produk }}" id="product-detail">
                    </div>

                    <!-- Carousel Gambar Tambahan -->
                    <div class="row mt-3">
                        <div class="carousel-container">
                            <button class="carousel-btn prev" aria-label="Previous slide">&#10094;</button>

                            <div class="carousel-slide">
                                @if ($produk->gambarTambahan->count() > 1)
                                    @foreach ($produk->gambarTambahan->skip(1) as $gambar)
                                        <img src="{{ asset('storage/' . $gambar->gambar) }}"
                                            alt="Gambar Tambahan {{ $produk->nama_produk }}">
                                    @endforeach
                                @else
                                    <img src="/img/no-image.png" alt="No Image">
                                @endif
                            </div>

                            <button class="carousel-btn next" aria-label="Next slide">&#10095;</button>
                        </div>
                    </div>
                </div>

                <!-- Detail Produk -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $produk->brand }} – {{ $produk->nama_produk }}</h1>
                            <p class="h3 py-2">Rp{{ number_format($produk->harga, 0, ',', '.') }} /Hari</p>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $produk->brand }}</strong></p>
                                </li>
                            </ul>

                            <h6>Deskripsi:</h6>
                            <p>{{ $produk->deskripsi }}</p>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Warna:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $produk->warna }}</strong></p>
                                </li>
                            </ul>

                            <h6>Spesifikasi:</h6>
                            <ul class="list-unstyled pb-3">
                                {!! nl2br(e($produk->spesifikasi)) !!}
                            </ul>

                            <a href="{{ route('sewa_form', $produk->id) }}" class="btn btn-success btn-lg form-control">
                                Sewa Sekarang
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let index = 0;

        function moveSlide(step) {
            const slide = document.querySelector(".carousel-slide");
            const items = document.querySelectorAll(".carousel-slide img");
            if (items.length === 0) return; // tidak ada gambar

            const itemWidth = items[0].offsetWidth + 16; // lebar + margin
            const visibleCount = Math.floor(slide.parentElement.offsetWidth / itemWidth);

            index += step;

            // looping
            if (index < 0) {
                index = items.length - visibleCount;
            } else if (index > items.length - visibleCount) {
                index = 0;
            }

            slide.style.transform = `translateX(${-index * itemWidth}px)`;
        }

        // Event listener tombol
        document.querySelector(".carousel-btn.prev").addEventListener("click", () => moveSlide(-1));
        document.querySelector(".carousel-btn.next").addEventListener("click", () => moveSlide(1));

        // Auto-slide (opsional, bisa dimatikan)
        // setInterval(() => moveSlide(1), 5000);
    </script>
@endsection
