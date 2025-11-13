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

        Schema::create('rombels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kelas_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kurikulum_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('wali_kelas_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('tahun_pelajaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama');
            $table->unsignedInteger('kapasitas');
            $table->unsignedInteger('jumlah_siswa')->default(0);
            $table->boolean('is_active')->default(true);
            $table->foreignId('pegawai_id');
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
        Schema::dropIfExists('rombels');
    }
};
