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

        Schema::create('catatan_pelanggarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('poin_pelanggaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('pegawai_id')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal');
            $table->text('keterangan')->nullable();
            $table->text('tindak_lanjut')->nullable();
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
        Schema::dropIfExists('catatan_pelanggarans');
    }
};
