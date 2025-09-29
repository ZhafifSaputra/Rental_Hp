<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function daftar(Request $request)
{
    $kategori = $request->get('kategori'); // ambil filter kategori dari query string

    if ($kategori && in_array($kategori, ['android', 'iphone', 'gaming'])) {
        $produk = Produk::where('kategori', $kategori)->latest()->get();
    } else {
        $produk = Produk::latest()->get(); // semua
    }

    return view('service.daftar-produk', compact('produk', 'kategori'));
}

}
