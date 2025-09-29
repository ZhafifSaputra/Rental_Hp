<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function showAndroid($id)
    {
        $produk = Produk::with('gambarTambahan')->where('kategori', 'android')->findOrFail($id);
        return view('produk.detail', compact('produk'));
    }

    public function showIphone($id)
    {
        $produk = Produk::with('gambarTambahan')->where('kategori', 'iphone')->findOrFail($id);
        return view('produk.detail', compact('produk'));
    }

    public function showGaming($id)
    {
        $produk = Produk::with('gambarTambahan')->where('kategori', 'gaming')->findOrFail($id);
        return view('produk.detail', compact('produk'));
    }
    
}
