<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class KategoriController extends Controller
{
    public function android()
    {
        $produk = Produk::where('kategori', 'android')->get();
        return view('kategori.android', compact('produk'));
    }

    public function iphone()
    {
        $produk = Produk::where('kategori', 'iphone')->get();
        return view('kategori.iphone', compact('produk'));
    }

    public function gaming()
    {
        $produk = Produk::where('kategori', 'gaming')->get();
        return view('kategori.gaming', compact('produk'));
    }
}
