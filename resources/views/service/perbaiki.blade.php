<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perbaikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <div class="card shadow">
        <div class="card-header text-center text-white" style="background: linear-gradient(45deg, #0d6efd, #0dcaf0);">
            <h4><i class="fas fa-tools me-2"></i>Form Perbaikan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('service.update', $service->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" value="{{ $service->nama_pelanggan }}" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Barang</label>
                    <input type="text" class="form-control" value="{{ $service->jenis_barang }}" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi Kerusakan</label>
                    <textarea class="form-control" rows="3" disabled>{{ $service->deskripsi_kerusakan }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Biaya Service (Rp)</label>
                    <input type="number" name="biaya" class="form-control" value="{{ old('biaya', $service->biaya) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hasil Perbaikan</label>
                    <textarea name="hasil_service" class="form-control" rows="3" required>{{ old('hasil_service', $service->hasil_service) }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('service.rekap') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan Perbaikan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
