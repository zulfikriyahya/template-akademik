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

        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('jenis_surat_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nomor_surat');
            $table->string('perihal');
            $table->string('tujuan');
            $table->date('tanggal_surat');
            $table->text('isi_surat');
            $table->uuid('penandatangan_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('file')->nullable();
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
        Schema::dropIfExists('surat_keluars');
    }
};
