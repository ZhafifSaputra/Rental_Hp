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
            $table->decimal('biaya', 12, 2)->nullable()->after('deskripsi_kerusakan');
            $table->text('hasil_service')->nullable()->after('biaya');
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['biaya', 'hasil_service']);
        });
    }
};
