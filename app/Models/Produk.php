<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'harga',
        'brand',
        'deskripsi',
        'warna',
        'spesifikasi',
        'gambar_utama',
        'kategori',
    ];

    public function gambarTambahan()
    {
        return $this->hasMany(GambarProduk::class, 'produk_id');
    }
}
