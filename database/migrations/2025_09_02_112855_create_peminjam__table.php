<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjam', function (Blueprint $table) {
            $table->id();
            // Relasi ke pelanggan & produk
            $table->foreignId('pelanggan_id')->constrained('pelanggan')->onDelete('cascade');
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');

            // Detail sewa
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->integer('lama_sewa');
            $table->integer('harga_sewa');

            // Status & tambahan
            $table->enum('status', ['menunggu', 'dipinjam', 'selesai', 'batal'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjam');
    }
};
