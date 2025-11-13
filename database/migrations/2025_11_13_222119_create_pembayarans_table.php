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

        Schema::create('pembayarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('jenis_pembayaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('tahun_anggaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal_pembayaran');
            $table->decimal('nominal', 15, 2);
            $table->enum('metode', ["'Tunai'","'Transfer'","'VA'","'QRIS'"]);
            $table->string('nomor_transaksi')->nullable();
            $table->uuid('rekening_id')->onUpdate('cascade')->onDelete('restrict')->nullable();
            $table->string('bukti_bayar')->nullable();
            $table->enum('status', ["'Menunggu'","'Lunas'","'Gagal'"]);
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
        Schema::dropIfExists('pembayarans');
    }
};
