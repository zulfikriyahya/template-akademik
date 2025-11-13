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

        Schema::create('presensi_pegawais', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('pegawai_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('jadwal_presensi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal');
            $table->time('jam_masuk')->nullable();
            $table->time('jam_pulang')->nullable();
            $table->enum('status_masuk', ["'Hadir'","'Terlambat'","'Izin'","'Sakit'","'Alpha'"])->nullable();
            $table->enum('status_pulang', ["'Tepat Waktu'","'Pulang Cepat'"])->nullable();
            $table->string('foto_masuk')->nullable();
            $table->string('foto_pulang')->nullable();
            $table->string('lokasi_masuk')->nullable();
            $table->string('lokasi_pulang')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('presensi_pegawais');
    }
};
