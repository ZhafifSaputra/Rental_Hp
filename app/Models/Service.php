<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = [
        'user_id',
        'nama_pelanggan',
        'no_hp',
        'alamat',
        'tanggal',
        'jenis_barang',
        'deskripsi_kerusakan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
