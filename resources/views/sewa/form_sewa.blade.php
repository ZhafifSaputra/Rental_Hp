<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-4">
    <h2>Formulir Sewa: {{ $produk->nama_produk }}</h2>

    <form action="{{ route('sewa_submit', $produk->id) }}" method="POST">
        @csrf

        <input type="hidden" name="produk_id" value="{{ $produk->id }}">
        <input type="hidden" name="pelanggan_id" value="{{ auth()->id() ?? 1 }}">

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">No. Telepon</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Perhari</label>
            <input type="text" class="form-control" value="Rp {{ number_format($produk->harga, 0, ',', '.') }}"
                readonly>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Total Harga (Rp)</label>
            <input type="text" id="total_harga" class="form-control" readonly value="0">
        </div>

        <button type="submit" class="btn btn-success">Ajukan Sewa</button>
        <a href="/dashboard" class="btn btn-secondary"><i class="fas fa-arrow-left me-2"></i>Kembali</a>

    </form>
    <!-- Modal Alert -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-danger">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="alertModalLabel">Peringatan</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body" id="alertModalMessage">
                    <!-- Pesan akan diisi dari JavaScript -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    const hargaProduk = {{ $produk->harga }};
    const tanggalPinjam = document.getElementById('tanggal_pinjam');
    const tanggalKembali = document.getElementById('tanggal_kembali');
    const totalHarga = document.getElementById('total_harga');

    let alertModal; // simpan instance modal global

    function hitungHarga() {
        const pinjam = new Date(tanggalPinjam.value);
        const kembali = new Date(tanggalKembali.value);

        if (pinjam && kembali) {
            if (kembali < pinjam) {
                document.getElementById('alertModalMessage').textContent =
                    "Tanggal kembali tidak boleh kurang dari tanggal pinjam!";

                // tampilkan modal
                alertModal = new bootstrap.Modal(document.getElementById('alertModal'));
                alertModal.show();

                totalHarga.value = '0';
                return;
            }

            const diffTime = kembali - pinjam;
            let diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;
            totalHarga.value = (diffDays * hargaProduk).toLocaleString('id-ID');
        } else {
            totalHarga.value = '0';
        }
    }

    // Event listener untuk input tanggal
    tanggalPinjam.addEventListener('change', hitungHarga);
    tanggalKembali.addEventListener('change', hitungHarga);

    // Reset tanggal kembali kalau modal ditutup
    const alertModalElement = document.getElementById('alertModal');
    alertModalElement.addEventListener('hidden.bs.modal', function() {
        tanggalPinjam.value = "";
        tanggalKembali.value = "";
    });
</script>
