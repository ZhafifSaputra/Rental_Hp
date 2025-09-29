@extends('layouts.form-produk')
@section('title', 'Formulir Edit Produk')
@section('konten')

<div class="container my-5">
    <h2 class="mb-4 text-center fw-bold">Edit Produk</h2>

    {{-- Pesan Sukses --}}
    @if (session('sukses'))
        <div id="flash-success" class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Pesan Error (validasi) --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data"
        class="card p-4 shadow-lg border-0">
        @csrf

        <!-- Gambar Utama -->
        <div class="mb-3 preview-container">
            @if($produk->gambar_utama)
                <img src="{{ asset('storage/' . $produk->gambar_utama) }}" class="mb-2" width="150">
            @endif
            <div style="flex:1">
                <label class="form-label fw-bold">Gambar Utama</label>
                <input type="file" name="gambar_utama" id="gambarUtamaInput" class="form-control" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
            </div>
        </div>

        <!-- Gambar Tambahan -->
        <div class="mb-3">
            <label class="form-label fw-bold">Gambar Tambahan</label>
            <div class="mb-2">
                @foreach($produk->gambarTambahan as $gambar)
                    <img src="{{ asset('storage/' . $gambar->gambar) }}" width="100" class="me-2 mb-2">
                @endforeach
            </div>
            <input type="file" name="gambar_tambahan[]" id="gambarTambahanInput" class="form-control"
                accept="image/*" multiple>
            <small class="text-muted">Kosongkan jika tidak ingin mengganti</small>
        </div>

        <!-- Kategori -->
        <div class="mb-3">
            <label class="form-label fw-bold">Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="android" {{ $produk->kategori == 'android' ? 'selected' : '' }}>Android</option>
                <option value="iphone" {{ $produk->kategori == 'iphone' ? 'selected' : '' }}>iPhone</option>
                <option value="gaming" {{ $produk->kategori == 'gaming' ? 'selected' : '' }}>Gaming</option>
            </select>
        </div>

        <!-- Nama Produk -->
        <div class="mb-3">
            <label class="form-label fw-bold">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
        </div>

        <!-- Harga -->
        <div class="mb-3">
            <label class="form-label fw-bold">Harga</label>
            <input type="text" name="harga" class="form-control" value="{{ $produk->harga }}" required>
        </div>

        <!-- Brand -->
        <div class="mb-3">
            <label class="form-label fw-bold">Brand</label>
            <input type="text" name="brand" class="form-control" value="{{ $produk->brand }}" required>
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
            <label class="form-label fw-bold">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="form-control" required>{{ $produk->deskripsi }}</textarea>
        </div>

        <!-- Warna -->
        <div class="mb-3">
            <label class="form-label fw-bold">Warna</label>
            <input type="text" name="warna" class="form-control" value="{{ $produk->warna }}">
        </div>

        <!-- Spesifikasi -->
        <div class="mb-3">
            <label class="form-label fw-bold">Spesifikasi</label>
            <textarea name="spesifikasi" rows="5" class="form-control" required>{{ $produk->spesifikasi }}</textarea>
        </div>

        <!-- Tombol Simpan -->
        <div class="text-end">
            <button type="submit" class="btn btn-warning px-4">Update Produk</button>
        </div>
    </form>
</div>

@endsection
