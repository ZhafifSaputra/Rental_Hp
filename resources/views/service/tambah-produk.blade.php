@extends('layouts.form-produk')
@section('title', 'Formulir tambah hp')
@section('konten')

    <div class="container my-5">
        <h2 class="mb-4 text-center fw-bold">Tambah Produk</h2>

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

        <form action="/tambah_produk/submit" method="POST" enctype="multipart/form-data"
            class="card p-4 shadow-lg border-0">
            @csrf
            <!-- Gambar Utama -->
            <div class="mb-3 preview-container">
                <div class="preview-box" id="previewGambarUtama">Preview</div>
                <div style="flex:1">
                    <label class="form-label fw-bold">Gambar Utama</label>
                    <input type="file" name="gambar_utama" id="gambarUtamaInput" class="form-control" accept="image/*"
                        required>
                </div>
            </div>

            <!-- Gambar Tambahan -->
            <div class="mb-3 preview-container">
                <div class="preview-list" id="previewGambarTambahan">
                    <div class="preview-box">Preview</div>
                </div>
                <div style="flex:1">
                    <label class="form-label fw-bold">Gambar Tambahan ( Max : 9 )</label>
                    <input type="file" name="gambar_tambahan[]" id="gambarTambahanInput" class="form-control"
                        accept="image/*" multiple>
                </div>
            </div>

            <!-- Kategori -->
            <div class="mb-3">
                <label class="form-label fw-bold">Kategori</label>
                <select name="kategori" class="form-control" required>
                    <option value="" disabled selected>-- Pilih Kategori --</option>
                    <option value="android">Android</option>
                    <option value="iphone">iPhone</option>
                    <option value="gaming">Gaming</option>
                </select>
            </div>

            <!-- Nama Produk -->
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="Contoh: Infinix Zero 30 5G"
                    required>
            </div>

            <!-- Harga -->
            <div class="mb-3">
                <label class="form-label fw-bold">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Contoh: $25.00" required>
            </div>

            <!-- Brand -->
            <div class="mb-3">
                <label class="form-label fw-bold">Brand</label>
                <input type="text" name="brand" class="form-control" placeholder="Contoh: Infinix" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="form-control" placeholder="Tulis deskripsi produk..." required></textarea>
            </div>

            <!-- Warna -->
            <div class="mb-3">
                <label class="form-label fw-bold">Warna</label>
                <input type="text" name="warna" class="form-control" placeholder="Contoh: White / Black">
            </div>

            <!-- Spesifikasi -->
            <div class="mb-3">
                <label class="form-label fw-bold">Spesifikasi</label>
                <textarea name="spesifikasi" rows="5" class="form-control"
                    placeholder="Tulis spesifikasi, pisahkan dengan enter..." required></textarea>
            </div>

            <!-- Tombol Simpan -->
            <div class="text-end">
                <button type="submit" class="btn btn-primary px-4">Simpan Data</button>
            </div>
        </form>
    </div>

@endsection
