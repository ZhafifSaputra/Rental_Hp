<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Service HP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="card shadow">
            @if (session('sukses'))
                <div class="alert alert-success">
                    {{ session('sukses') }}
                </div>
            @endif
            <div class="card-header text-center text-white"
                style="background: linear-gradient(45deg, #0d6efd, #0dcaf0);">
                <h4><i class="fas fa-file-alt me-2"></i>Riwayat Service HP</h4>
            </div>
            <div class="card-body">

                <!-- Form Filter -->
                <form method="GET" class="row g-3 mb-4">
                    <div class="col-md-4">
                        <input type="date" name="tanggal" class="form-control" value="{{ request('tanggal') }}">
                    </div>
                    {{-- Bisa tambahkan filter nama jika perlu --}}
                    {{-- <div class="col-md-4">
                    <input type="text" name="nama" class="form-control" placeholder="Cari Nama Pelanggan" value="{{ request('nama') }}">
                </div> --}}
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search me-2"></i>Cari</button>
                        <a href="{{ route('service.riwayat') }}" class="btn btn-danger"><i
                                class="fas fa-undo me-2"></i>Reset</a>
                        <a href="/dashboard" class="btn btn-secondary"><i class="fas fa-arrow-left me-2"></i>Kembali</a>
                        
                    </div>
                </form>

                <!-- Tabel Rekap -->
                <table class="table table-bordered table-striped">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Tipe HP</th>
                            <th>Deskripsi Kerusakan</th>
                            <th>Hasil Servie</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse($services as $index => $service)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $service->nama_pelanggan }}</td>
                                <td>{{ $service->no_hp }}</td>
                                <td>{{ $service->alamat }}</td>
                                <td>{{ date('d-m-Y', strtotime($service->tanggal)) }}</td>
                                <td>{{ $service->jenis_barang }}</td>
                                <td>{{ $service->deskripsi_kerusakan }}</td>
                                <td>{{ $service->hasil_service ?? '-' }}</td>
                                <td>{{ $service->biaya ? 'Rp'.number_format($service->biaya,0,',','.') : '-' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data tidak ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

                <!-- Ringkasan -->
                {{-- <div class="mt-3">
                <h5>Ringkasan:</h5>
                <ul>
                    <li>Total Service: <strong>{{ $services->count() }}</strong></li>
                </ul>
            </div> --}}

            </div>
        </div>
    </div>
</body>

</html>
