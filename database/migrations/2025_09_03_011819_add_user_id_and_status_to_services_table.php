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
        Schema::table('services', function (Blueprint $table) {
            // Kolom user_id untuk menghubungkan ke tabel users
            if (!Schema::hasColumn('services', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }

            // Kolom status untuk tracking progress service
            if (!Schema::hasColumn('services', 'status')) {
                $table->enum('status', ['menunggu', 'diproses', 'selesai'])->default('menunggu')->after('deskripsi_kerusakan');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            if (Schema::hasColumn('services', 'status')) {
                $table->dropColumn('status');
            }

            if (Schema::hasColumn('services', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
        });
    }
};
