<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Peminjaman HP</title>
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
                <h4><i class="fas fa-file-alt me-2"></i>Riwayat Peminjaman HP</h4>
            </div>

            <div class="card-body">

                <!-- Form Filter -->
                <form method="GET" class="row g-3 mb-4">
                    <div class="col-md-3">
                        <input type="date" name="tanggal" class="form-control" value="{{ request('tanggal') }}">
                    </div>

                    <div class="col-md-3">
                        <select name="kategori" class="form-select">
                            <option value="" disabled selected>-- Pilih Kategori --</option>
                            <option value="android" {{ request('kategori') == 'android' ? 'selected' : '' }}>Android
                            </option>
                            <option value="iphone" {{ request('kategori') == 'iphone' ? 'selected' : '' }}>iPhone
                            </option>
                            <option value="gaming" {{ request('kategori') == 'gaming' ? 'selected' : '' }}>Gaming
                            </option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search me-2"></i>Cari
                        </button>
                        <a href="{{ route('service.rekap_peminjaman') }}" class="btn btn-danger">
                            <i class="fas fa-undo me-2"></i>Reset
                        </a>
                        <a href="/dashboard" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
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
                            <th>Kategori Produk</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Lama Sewa (hari)</th>
                            <th>Total Harga (Rp)</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($peminjaman as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $item->pelanggan->nama }}</td>
                                <td>{{ $item->pelanggan->no_hp }}</td>
                                <td>{{ $item->pelanggan->alamat }}</td>
                                <td>{{ $item->produk->nama_produk }}</td>
                                <td>{{ $item->produk->kategori }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->tanggal_pinjam)) }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->tanggal_kembali)) }}</td>
                                <td class="text-center">{{ $item->lama_sewa }} hari</td>
                                <td class="text-end">{{ number_format($item->harga_sewa, 0, ',', '.') }}</td>
                                <td class="text-center">
                                    <span
                                        class="badge 
                    @if ($item->status == 'selesai') bg-success 
                    @elseif($item->status == 'diproses') bg-warning text-dark
                    @else bg-secondary @endif">
                                        {{ ucfirst($item->status) }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('service.updateStatus', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" class="form-select form-select-sm d-inline w-auto">
                                            <option value="menunggu"
                                                {{ $item->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                                            <option value="dipinjam"
                                                {{ $item->status == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                                            <option value="selesai" {{ $item->status == 'selesai' ? 'selected' : '' }}>
                                                Selesai</option>
                                            {{-- <option value="batal" {{ $item->status == 'batal' ? 'selected' : '' }}>Batal</option> --}}
                                        </select>
                                        <button type="submit" class="btn btn-sm btn-success mt-1">
                                            <i class="fas fa-save"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12" class="text-center">Data tidak ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>


                <!-- Ringkasan -->
                <div class="mt-3">
                    <h5>Ringkasan:</h5>
                    <ul>
                        <li>Total Peminjaman: <strong>{{ $peminjaman->count() }}</strong></li>
                        <li>Total Pendapatan:
                            <strong>Rp{{ number_format($peminjaman->sum('harga_sewa'), 0, ',', '.') }}</strong></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
