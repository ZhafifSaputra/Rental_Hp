<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SewaController;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::get('/tentang', function () {
        return view('tentang');
    });

    Route::get('/kontak', function () {
        return view('kontak');
    });

    Route::get('/layanan', function () {
        return view('layanan');
    });

    Route::get('/testimonial', function () {
        return view('testimonial');
    });

    

    

    Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
    Route::post('/admin/login/submit', [AuthController::class, 'login_submit']);
    Route::get('/admin/register', [AuthController::class, 'register']);
    Route::post('/admin/register/submit', [AuthController::class, 'register_submit']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/tambah_produk', [ProdukController::class, 'tambah_tampil']);
    Route::post('/tambah_produk/submit', [ProdukController::class, 'tambah_submit']);
    Route::get('/daftar', [DaftarController::class, 'daftar'])->name('produk.daftar');
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::post('/produk/{id}', [ProdukController::class, 'edit_submit'])->name('produk.update');
    Route::post('/produk_hapus/{id}', [ProdukController::class, 'hapus'])->name('produk.hapus');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/rekap-service', [ServiceController::class, 'index'])->name('service.rekap');

    Route::get('/service', [ServiceController::class, 'service']);
    Route::post('/service/submit', [ServiceController::class, 'store'])->name('service.store');

    Route::get('/produk/android', [KategoriController::class, 'android'])->name('produk.android');
    Route::get('/produk/iphone', [KategoriController::class, 'iphone'])->name('produk.iphone');
    Route::get('/produk/gaming', [KategoriController::class, 'gaming'])->name('produk.gaming');
    
    Route::get('/produk/android/{id}', [DetailController::class, 'showAndroid'])->name('android.show');
    Route::get('/produk/iphone/{id}', [DetailController::class, 'showIphone'])->name('iphone.show');
    Route::get('/produk/gaming/{id}', [DetailController::class, 'showGaming'])->name('gaming.show');

    Route::get('/form_sewa/{id}', [SewaController::class, 'tampil_sewa'])->name('sewa_form');
    Route::post('/form_sewa/submit/{produk}', [SewaController::class, 'sewa_submit'])->name('sewa_submit');

    Route::get('/riwayat_penyewaan', [SewaController::class, 'riwayat_penyewaan'])->name('sewa.riwayat');
    Route::get('/riwayat-service', [ServiceController::class, 'riwayat_service'])->name('service.riwayat');

    Route::get('/rekap_peminjaman', [ServiceController::class, 'rekap_peminjaman'])->name('service.rekap_peminjaman');
    Route::put('/rekap/update-status/{id}', [ServiceController::class, 'updateStatus'])->name('service.updateStatus');

    Route::get('/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('/service/{id}/perbaiki', [ServiceController::class, 'update'])->name('service.update');


});
