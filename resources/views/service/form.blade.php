<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Service Perangkat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
            /* Warna abu-abu muda */
        }

        .card-header {
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            /* Gradien biru yang modern */
        }

        .form-section-title {
            color: #0d6efd;
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 8px;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('sukses'))
                    <div id="flash-success" class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{ session('sukses') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-lg border-0">
                    <div class="card-header text-white text-center">
                        <h4 class="mb-0"><i class="fas fa-wrench me-2"></i>Formulir Permintaan Service</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('service.store') }}" method="POST">
                            @csrf

                            <h5 class="form-section-title"><i class="fas fa-user-circle me-2"></i>Informasi Pelanggan
                            </h5>

                            <div class="mb-3">
                                <label for="nama_pelanggan" class="form-label fw-bold">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="no_hp" class="form-label fw-bold">No. HP (WhatsApp)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                                    <input type="tel" name="no_hp" id="no_hp" class="form-control" required>
                                </div>
                                <div class="form-text">Kami akan menghubungi Anda melalui nomor ini.</div>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-bold">Alamat</label>
                                <textarea name="alamat" rows="3" class="form-control" required></textarea>
                            </div>

                            <h5 class="form-section-title"><i class="fas fa-mobile-alt me-2"></i>Detail Perangkat &
                                Kerusakan</h5>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label fw-bold">Tanggal Pengajuan</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control"
                                        value="{{ date('Y-m-d') }}" required>
                                </div>
                                <div class="form-text">Tanggal hari ini akan terisi otomatis.</div>
                            </div>

                            <div class="mb-3">
                                <label for="jenis_barang" class="form-label fw-bold">Tipe/Model Handphone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-mobile-screen-button"></i></span>
                                    <input type="text" name="jenis_barang" id="jenis_barang" class="form-control"
                                        required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi_kerusakan" class="form-label fw-bold">Deskripsi Lengkap
                                    Kerusakan</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-comment-dots"></i></span>
                                    <textarea name="deskripsi_kerusakan" id="deskripsi_kerusakan" rows="4" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Leaflet CSS & JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-6.200000, 106.816666], 13); // Koordinat default Jakarta
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var marker;

        // Klik peta untuk memilih lokasi
        map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(6);
            var lng = e.latlng.lng.toFixed(6);

            // Update/ubah marker
            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }

            // Simpan koordinat ke form
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;

            // Gunakan reverse geocoding sederhana (via Nominatim) untuk alamat
            fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`)
                .then(res => res.json())
                .then(data => {
                    document.getElementById('alamat').value = data.display_name || '';
                });
        });
    </script>
</body>

</html>
