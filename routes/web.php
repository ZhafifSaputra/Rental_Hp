<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

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

Route::get('/android', function () {
    return view('android');
});

Route::get('/iphone', function () {
    return view('iphone');
});

Route::get('/gaming', function () {
    return view('gaming');
});


// Android
Route::get('/android/infinix', [DetailController::class, 'infinix']);
Route::get('/android/oppo', [DetailController::class, 'oppo']);
Route::get('/android/realme', [DetailController::class, 'realme']);
Route::get('/android/samsung', [DetailController::class, 'samsung']);
Route::get('/android/vivo', [DetailController::class, 'vivo']);
Route::get('/android/xiomi', [DetailController::class, 'xiomi']);

// Gaming
Route::get('/gaming/black_shark', [DetailController::class, 'black_shark']);
Route::get('/gaming/gt5pro', [DetailController::class, 'gt5pro']);
Route::get('/gaming/gt20pro', [DetailController::class, 'gt20pro']);
Route::get('/gaming/iqoo13', [DetailController::class, 'iqoo13']);
Route::get('/gaming/rog', [DetailController::class, 'rog']);
Route::get('/gaming/zte', [DetailController::class, 'zte']);

// Iphone
Route::get('/iphone/13', [DetailController::class, 'iphone13']);
Route::get('/iphone/15', [DetailController::class, 'iphone15']);
Route::get('/iphone/15plus', [DetailController::class, 'iphone15plus']);
Route::get('/iphone/15pro', [DetailController::class, 'iphone15pro']);
Route::get('/iphone/15promax', [DetailController::class, 'iphone15promax']);
Route::get('/iphone/xr', [DetailController::class, 'iphonexr']);

