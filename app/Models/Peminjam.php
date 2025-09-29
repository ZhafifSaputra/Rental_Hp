<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $table = 'peminjam';

    protected $fillable = [
        'user_id', 'pelanggan_id', 'produk_id',
        'tanggal_pinjam', 'tanggal_kembali',
        'lama_sewa', 'harga_sewa', 'status'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


