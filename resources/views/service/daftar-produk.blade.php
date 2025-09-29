@extends('layouts.detail')

@section('title', 'Daftar Produk')

@section('konten')
    <div class="container my-5">
        <h2 class="mb-4 text-center fw-bold">Daftar Produk</h2>

        {{-- Filter Kategori --}}
        <div class="d-flex justify-content-center mb-4">
            <form method="GET" action="{{ route('produk.daftar') }}" id="filterForm">
                <select name="kategori" class="form-select form-select-lg" onchange="this.form.submit()">
                    <option value="" @selected(!$kategori)>Semua Kategori</option>
                    <option value="android" @selected($kategori == 'android')>Android</option>
                    <option value="iphone" @selected($kategori == 'iphone')>iPhone</option>
                    <option value="gaming" @selected($kategori == 'gaming')>Gaming</option>
                </select>
            </form>
        </div>
        
        <a href="/dashboard" class="btn btn-secondary"><i class="fas fa-arrow-left me-2"></i>Kembali</a>


        @if (session('sukses'))
            <div id="flash-success" class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ session('sukses') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Daftar Produk --}}
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2">
            @forelse($produk as $item)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <img src="{{ asset("storage/{$item->gambar_utama}") }}" class="card-img-top product-card-img"
                            alt="{{ $item->nama_produk }}">

                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bolder mb-2">{{ $item->nama_produk }}</h5>
                            <p class="card-text text-muted">
                                <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill me-2">
                                    {{ ucfirst($item->kategori) }}
                                </span>
                            </p>
                            <h4 class="fw-bold text-success mb-3">
                                Rp {{ number_format($item->harga, 0, ',', '.') }}
                            </h4>

                            {{-- Tombol Aksi --}}
                            <div class="mt-auto d-grid gap-2 d-sm-flex justify-content-end">
                                <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('produk.hapus', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Anda yakin ingin menghapus produk ini?')" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted fs-4">Belum ada produk yang tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>

    {{-- Tambahkan CSS ini di file .css Anda --}}
    <style>
        .product-card-img {
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover .product-card-img {
            transform: scale(1.05);
        }
    </style>
@endsection
