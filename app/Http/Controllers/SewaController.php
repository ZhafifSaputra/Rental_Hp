<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Peminjam;
use App\Models\Produk;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    function tampil_sewa($id)
    {
        $produk = Produk::findOrFail($id); // cari berdasarkan id
        return view('sewa.form_sewa', compact('produk'));
    }


    public function sewa_submit(Request $request, Produk $produk)
    {
        $request->validate([
            'nama'            => 'required|string|max:255',
            'email'           => 'required|email',
            'no_hp'           => 'required|string|max:20',
            'alamat'          => 'required|string',
            'tanggal_pinjam'  => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
        ]);

        // Cek apakah pelanggan sudah ada berdasarkan email
        $pelanggan = Pelanggan::firstOrCreate(
            ['email' => $request->email],
            [
                'nama'   => $request->nama,
                'no_hp'  => $request->no_hp,
                'alamat' => $request->alamat,
            ]
        );

        // Hitung lama sewa (selisih hari)
        $lama_sewa = (strtotime($request->tanggal_kembali) - strtotime($request->tanggal_pinjam)) / (60 * 60 * 24);
        $lama_sewa = max(1, $lama_sewa); // minimal 1 hari

        // Simpan ke tabel peminjam
        Peminjam::create([
            'user_id'         => auth()->id(),
            'pelanggan_id'    => $pelanggan->id,
            'produk_id'       => $produk->id,
            'tanggal_pinjam'  => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'lama_sewa'       => $lama_sewa,
            'harga_sewa'      => $produk->harga * $lama_sewa,
            'status'          => 'menunggu',
        ]);

        return redirect()
            ->route('sewa.riwayat', $produk->id)
            ->with('sukses', 'Peminjaman berhasil diajukan!');
    }


    public function riwayat_penyewaan(Request $request)
    {
        $query = Peminjam::with(['pelanggan', 'produk'])
            ->where('user_id', auth()->id()); // hanya data milik user login

        // filter berdasarkan tanggal
        if ($request->tanggal) {
            $query->whereDate('tanggal_pinjam', $request->tanggal);
        }

        $peminjaman = $query->orderBy('tanggal_pinjam', 'desc')->get();

        return view('sewa.riwayat', compact('peminjaman'));
    }
}
