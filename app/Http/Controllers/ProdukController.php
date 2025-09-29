<?php

namespace App\Http\Controllers;

use App\Models\GambarProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function tambah_tampil()
    {
        return view('service.tambah-produk');
    }

    public function tambah_submit(Request $request)
    {
        $request->validate([
            'nama_produk'       => 'required|string|max:255',
            'harga'             => 'required|string|max:255',
            'brand'             => 'required|string|max:255',
            'deskripsi'         => 'required|string',
            'warna'             => 'nullable|string|max:255',
            'spesifikasi'       => 'required|string',
            'gambar_utama'      => 'required|image|mimes:jpg,jpeg,png|max:4096',
            'gambar_tambahan.*' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
            'kategori'          => 'required|string|in:android,iphone,gaming',
        ]);

        // Simpan gambar utama sesuai kategori
        $folderKategori = 'produk_' . $request->kategori;

        $gambarUtamaPath = $request->file('gambar_utama')->store(
            $folderKategori . '/gambar_utama',
            'public'
        );

        // Simpan data produk
        $produk = Produk::create([
            'nama_produk'   => $request->nama_produk,
            'harga'         => $request->harga,
            'brand'         => $request->brand,
            'deskripsi'     => $request->deskripsi,
            'warna'         => $request->warna,
            'spesifikasi'   => $request->spesifikasi,
            'gambar_utama'  => $gambarUtamaPath,
            'kategori'      => $request->kategori,
        ]);

        // Simpan gambar tambahan
        if ($request->hasFile('gambar_tambahan')) {
            foreach ($request->file('gambar_tambahan') as $file) {
                $path = $file->store(
                    $folderKategori . '/gambar_tambahan',
                    'public'
                );
                GambarProduk::create([
                    'produk_id' => $produk->id,
                    'gambar'    => $path,
                ]);
            }
        }

        return redirect('/tambah_produk/')->with('sukses', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $produk = Produk::with('gambarTambahan')->findOrFail($id);
        return view('service.edit-produk', compact('produk'));
    }

    // Simpan hasil edit (pakai POST)
    public function edit_submit(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'nama_produk'       => 'required|string|max:255',
            'harga'             => 'required|numeric',
            'brand'             => 'required|string|max:255',
            'deskripsi'         => 'required|string',
            'warna'             => 'nullable|string|max:255',
            'spesifikasi'       => 'required|string',
            'kategori'          => 'required|in:android,iphone,gaming',
            'gambar_utama'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar_tambahan.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update data produk
        $produk->nama_produk = $request->nama_produk;
        $produk->harga       = $request->harga;
        $produk->brand       = $request->brand;
        $produk->deskripsi   = $request->deskripsi;
        $produk->warna       = $request->warna;
        $produk->spesifikasi = $request->spesifikasi;
        $produk->kategori    = $request->kategori;

        // Update gambar utama jika ada
        if ($request->hasFile('gambar_utama')) {
            if ($produk->gambar_utama && Storage::disk('public')->exists($produk->gambar_utama)) {
                Storage::disk('public')->delete($produk->gambar_utama);
            }
            $produk->gambar_utama = $request->file('gambar_utama')->store(
                'produk_' . $request->kategori . '/gambar_utama',
                'public'
            );
        }

        $produk->save();

        // Update gambar tambahan jika ada
        if ($request->hasFile('gambar_tambahan')) {
            foreach ($produk->gambarTambahan as $gt) {
                if (Storage::disk('public')->exists($gt->gambar)) {
                    Storage::disk('public')->delete($gt->gambar);
                }
                $gt->delete();
            }

            foreach ($request->file('gambar_tambahan') as $file) {
                $path = $file->store('produk_' . $request->kategori . '/gambar_tambahan', 'public');
                $produk->gambarTambahan()->create([
                    'gambar' => $path
                ]);
            }
        }

        return redirect('/daftar')->with('sukses', 'Produk berhasil diperbarui!');
    }

    public function hapus($id)
    {
        $produk = Produk::findOrFail($id);

        // Hapus gambar utama (jika ada)
        if ($produk->gambar_utama && Storage::disk('public')->exists($produk->gambar_utama)) {
            Storage::disk('public')->delete($produk->gambar_utama);
        }

        // Hapus semua gambar tambahan
        foreach ($produk->gambarTambahan as $gambar) {
            if ($gambar->gambar && Storage::disk('public')->exists($gambar->gambar)) {
                Storage::disk('public')->delete($gambar->gambar);
            }
            $gambar->delete();
        }

        // Hapus produk
        $produk->delete();

        return redirect()->back()->with('sukses', 'Produk berhasil dihapus');
    }
}
