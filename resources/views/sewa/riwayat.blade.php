    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rekap Penyewaan HP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <style>
            /* CSS khusus saat print */
            @media print {
                body * {
                    visibility: hidden;
                }

                .print-area,
                .print-area * {
                    visibility: visible;
                }

                .print-area {
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 100%;
                    margin: 0;
                    padding: 0;
                }

                /* Hilangkan border card saat print */
                .card,
                .card-body,
                .card-header {
                    border: none !important;
                    box-shadow: none !important;
                }

                /* Tabel full width */
                table {
                    width: 100% !important;
                    font-size: 12pt;
                    /* biar pas */
                }

                /* Hilangkan tombol saat print */
                .btn,
                form {
                    display: none !important;
                }
            }
        </style>
    </head>

    <body>
        <div class="container my-5 print-area">
            <div class="card shadow">
                @if (session('sukses'))
                    <div class="alert alert-success">
                        {{ session('sukses') }}
                    </div>
                @endif
                <div class="card-header text-center text-white"
                    style="background: linear-gradient(45deg, #0d6efd, #0dcaf0);">
                    <h4><i class="fas fa-file-alt me-2"></i>Riwayat Penyewaan HP</h4>
                </div>
                <div class="card-body">

                    <!-- Form Filter -->
                    <form method="GET" class="row g-3 mb-4">
                        <div class="col-md-4">
                            <input type="date" name="tanggal" class="form-control" value="{{ request('tanggal') }}">
                        </div>
                        {{-- <div class="col-md-4">
                        <input type="text" name="nama" class="form-control" placeholder="Cari Nama Pelanggan" value="{{ request('nama') }}">
                    </div> --}}
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary"><i
                                    class="fas fa-search me-2"></i>Cari</button>
                            <a href="{{ route('sewa.riwayat') }}" class="btn btn-danger"><i
                                    class="fas fa-undo me-2"></i>Reset</a>
                            <a href="/dashboard" class="btn btn-secondary"><i
                                    class="fas fa-arrow-left me-2"></i>Kembali</a>
                            <!-- Tombol Print -->
                            <button type="button" class="btn btn-success" onclick="window.print()">
                                <i class="fas fa-print me-2"></i>Cetak
                            </button>
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
                                <th>Produk</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Lama Sewa (hari)</th>
                                <th>Total Harga (Rp)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($peminjaman   as $index => $item)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $item->pelanggan->nama }}</td>
                                    <td>{{ $item->pelanggan->no_hp }}</td>
                                    <td>{{ $item->pelanggan->alamat }}</td>
                                    <td>{{ $item->produk->nama_produk }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->tanggal_pinjam)) }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->tanggal_kembali)) }}</td>
                                    <td class="text-center">{{ $item->lama_sewa }} hari</td>
                                    <td class="text-end">{{ number_format($item->harga_sewa, 0, ',', '.') }}</td>
                                    <td class="text-center">{{ ucfirst($item->status) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Ringkasan -->
                    {{-- <div class="mt-3">
                    <h5>Ringkasan:</h5>
                    <ul>
                        <li>Total Penyewaan: <strong>{{ $peminjaman->count() }}</strong></li>
                        <li>Total Pendapatan: <strong>Rp{{ number_format($peminjaman->sum('harga_sewa'),0,',','.') }}</strong></li>
                    </ul>
                </div> --}}

                </div>
            </div>
        </div>
    </body>

    </html>
