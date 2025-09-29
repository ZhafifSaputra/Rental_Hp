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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ['android', 'iphone', 'gaming']);
            $table->string('nama_produk');
            $table->string('harga');
            $table->string('brand');
            $table->text('deskripsi');
            $table->string('warna')->nullable();
            $table->text('spesifikasi');
            $table->string('gambar_utama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
