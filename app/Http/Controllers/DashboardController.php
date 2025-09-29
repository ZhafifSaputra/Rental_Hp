<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
{
    // Inisialisasi semua variabel (agar tidak Undefined di view)
    $totalProduk = 0;
    $totalMenunggu = 0;
    $totalDipinjam = 0;
    $totalDikembalikan = 0;
    $totalPendapatan = 0;

    $labels = [];
    $jumlahSewa = [];
    $pendapatan = []; // <-- variable yang sebelumnya undefined
    $bulan = [];

    // Variabel customer
    $totalDisewa = 0;
    $totalPengeluaran = 0;
    $riwayatSewa = collect();
    $pengeluaran = []; // chart data untuk customer (bulan -> pengeluaran)

    // Common: siapkan array bulan 1..12
    $bulanTetap = range(1, 12);
    foreach ($bulanTetap as $b) {
        $labels[] = date('F', mktime(0, 0, 0, $b, 1));
        $jumlahSewa[] = 0;
        $pendapatan[] = 0;
        $bulan[] = $b;
        $pengeluaran[] = 0;
    }

    if (Auth::user()->role == 'admin') {
        // === ADMIN ===
        $totalProduk = Produk::count();

        $totalMenunggu = Peminjam::where('status', 'menunggu')->count();
        $totalDipinjam = Peminjam::where('status', 'dipinjam')->count();
        $totalDikembalikan = Peminjam::where('status', 'selesai')->count();
        $totalPendapatan = (float) Peminjam::where('status', 'selesai')->sum('harga_sewa');

        $rekap = Peminjam::select(
            DB::raw('MONTH(tanggal_pinjam) as bulan'),
            DB::raw('COUNT(*) as jumlah_sewa'),
            DB::raw('SUM(harga_sewa) as total_pendapatan')
        )
            ->where('status', 'selesai')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        // isi arrays berdasarkan rekap (overwrite default 0)
        foreach ($bulanTetap as $index => $b) {
            $dataBulan = $rekap->firstWhere('bulan', $b);
            $jumlahSewa[$index] = $dataBulan ? (int) $dataBulan->jumlah_sewa : 0;
            $pendapatan[$index] = $dataBulan ? (float) $dataBulan->total_pendapatan : 0;
        }
    } else {
        // === CUSTOMER ===
        $userId = Auth::id();

        $totalDisewa = Peminjam::where('user_id', $userId)->where('status', 'dipinjam')->count();
        $totalMenunggu = Peminjam::where('user_id', $userId)->where('status', 'menunggu')->count();
        $totalDikembalikan = Peminjam::where('user_id', $userId)->where('status', 'selesai')->count();
        $totalPengeluaran = (float) Peminjam::where('user_id', $userId)->where('status', 'selesai')->sum('harga_sewa');

        $riwayatSewa = Peminjam::with('produk')
            ->where('user_id', $userId)
            ->orderBy('tanggal_pinjam', 'desc')
            ->take(10)
            ->get();

        // Rekap bulanan khusus customer (jumlah sewa & pengeluaran per bulan)
        $rekap = Peminjam::select(
            DB::raw('MONTH(tanggal_pinjam) as bulan'),
            DB::raw('COUNT(*) as jumlah_sewa'),
            DB::raw('SUM(harga_sewa) as total_pengeluaran')
        )
            ->where('user_id', $userId)
            ->where('status', 'selesai')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        foreach ($bulanTetap as $index => $b) {
            $dataBulan = $rekap->firstWhere('bulan', $b);
            $jumlahSewa[$index] = $dataBulan ? (int) $dataBulan->jumlah_sewa : 0;
            $pengeluaran[$index] = $dataBulan ? (float) $dataBulan->total_pengeluaran : 0;
            // pendapatan tetap 0 untuk customer (kecuali kamu mau tampilkan pendapatan customer sendiri)
            $pendapatan[$index] = 0;
        }
    }

    // Kirim SEMUA variabel ke view supaya tidak ada undefined variable
    return view('dashboard', compact(
        'totalProduk',
        'totalMenunggu',
        'totalDipinjam',
        'totalDikembalikan',
        'totalPendapatan',
        'labels',
        'jumlahSewa',
        'pendapatan',
        'bulan',
        'totalDisewa',
        'totalPengeluaran',
        'riwayatSewa',
        'pengeluaran'
    ));
}

    public function index()
    {
        // Hitung total produk
        $jumlahProduk = Produk::count();

        return view('index', compact('jumlahProduk'));
    }
}
