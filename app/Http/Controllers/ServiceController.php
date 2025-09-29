<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function service(){
        return view('service.form');
    }
    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_pelanggan'      => 'required|string|max:255',
        'no_hp'               => 'required|string|max:20',
        'alamat'              => 'required|string',
        'tanggal'             => 'required|date',
        'jenis_barang'        => 'required|string|max:255',
        'deskripsi_kerusakan' => 'required|string',
    ]);

    // Tambahkan user_id secara manual
    $validated['user_id'] = auth()->id();

    // Tambahkan status default "menunggu"
    $validated['status'] = 'menunggu';

    Service::create($validated);

    return redirect('/riwayat-service')->with('sukses', 'Keluhan Anda Berhasil Terkirim, Mohon tunggu konfirmasi teknisi kami');
}


public function index(Request $request)
    {
        // Ambil filter dari query
        $query = Service::query();

        // Filter tanggal
        if($request->filled('tanggal')) {
            $query->where('tanggal', $request->tanggal);
        }

        // Filter nama pelanggan (pencarian)
        if($request->filled('nama')) {
            $query->where('nama_pelanggan', 'like', '%' . $request->nama . '%');
        }

        // Ambil data terbaru terlebih dahulu
        $services = $query->orderBy('tanggal', 'desc')->get();

        return view('service.rekap-service', compact('services'));
    }

    public function riwayat_service(Request $request)
{
    $userId = auth()->id();

    $query = Service::where('user_id', $userId);

    // filter tanggal kalau ada
    if ($request->filled('tanggal')) {
        $query->whereDate('tanggal', $request->tanggal);
    }

    // filter nama kalau mau
    if ($request->filled('nama')) {
        $query->where('nama_pelanggan', 'like', '%' . $request->nama . '%');
    }

    $services = $query->orderBy('tanggal', 'desc')->get();

    return view('service.riwayat_service', compact('services'));
}

public function rekap_peminjaman(Request $request)
{
    $query = Peminjam::with(['pelanggan', 'produk']);

    if ($request->filled('tanggal')) {
        $query->whereDate('tanggal_pinjam', $request->tanggal);
    }

    if ($request->filled('kategori')) {
        $query->whereHas('produk', function ($q) use ($request) {
            $q->where('kategori', $request->kategori);
        });
    }

    $peminjaman = $query->orderBy('tanggal_pinjam', 'desc')->get();

    return view('service.rekap_peminjaman', compact('peminjaman'));
}

//update status
public function updateStatus(Request $request, $id)
{

    $request->validate([
        'status' => 'required|in:menunggu,dipinjam,selesai,batal'
    ]);

    $peminjaman = Peminjam::findOrFail($id);
    $peminjaman->status = $request->status;
    $peminjaman->save();

    return redirect()->back()->with('sukses', 'Status berhasil diperbarui!');
}

public function edit($id)
{
    $service = Service::findOrFail($id);
    return view('service.perbaiki', compact('service'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'biaya' => 'required|numeric|min:0',
        'hasil_service' => 'required|string',
    ]);

    $service = Service::findOrFail($id);
    $service->update([
        'biaya' => $request->biaya,
        'hasil_service' => $request->hasil_service,
        'status' => 'selesai',
    ]);

    return redirect()->route('service.rekap')->with('sukses', 'Data service berhasil diperbarui');
}
}
