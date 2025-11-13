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

        Schema::create('pengajuan_izins', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict')->nullable();
            $table->uuid('pegawai_id')->onUpdate('cascade')->onDelete('restrict')->nullable();
            $table->enum('jenis', ["'Sakit'","'Izin'","'Cuti'"]);
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->text('alasan');
            $table->string('file_pendukung')->nullable();
            $table->enum('status', ["'Menunggu'","'Disetujui'","'Ditolak'"]);
            $table->text('catatan_approval')->nullable();
            $table->uuid('disetujui_oleh')->onUpdate('cascade')->onDelete('restrict')->nullable();
            $table->dateTime('tanggal_approval')->nullable();
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
        Schema::dropIfExists('pengajuan_izins');
    }
};
