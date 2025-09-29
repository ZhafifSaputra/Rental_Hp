<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@section('title', 'Halaman Android')</title>

    <link rel="apple-touch-icon" href="/assetss/img/apple-icon.png" />
    <link rel="shortcut icon" type="image/x-icon" href="/assetss/img/favicon.ico" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assetss/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assetss/css/templatemo.css" />
    <link rel="stylesheet" href="/assetss/css/custom.css" />

    <!-- Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/assetss/css/fontawesome.min.css" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        .product-img-fixed {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .product-wap:hover .product-overlay {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        .product-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center fw-bold mb-4">Produk Android</h2>

        <div class="row g-4">
            @foreach($produk as $produks)
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="card mb-4 product-wap rounded-0 shadow-sm">
                        <div class="position-relative rounded-0">
                            <img src="{{ asset('storage/' . $produks->gambar_utama) }}"
                                 alt="{{ $produks->nama_produk }}"
                                 class="card-img rounded-0 img-fluid product-img-fixed" />
                            <div
                                class="card-img-overlay rounded-0 d-flex align-items-center justify-content-center product-overlay">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a class="btn btn-success text-white mt-2"
                                           href="{{ route('android.show', $produks->id) }}"
                                           title="Lihat Detail">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a href="{{ route('android.show', $produks->id) }}"
                               class="h5 text-decoration-none text-dark fw-bold">
                                {{ $produks->nama_produk }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="/assetss/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>

</html>
