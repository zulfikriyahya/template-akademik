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
        Schema::disableForeignKeyConstraints();

        Schema::create('anggota_ekstrakurikulers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('ekstrakurikuler_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('tahun_ekstrakurikuler_id')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal_bergabung');
            $table->enum('status', ["'Aktif'","'Tidak Aktif'"]);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_ekstrakurikulers');
    }
};
