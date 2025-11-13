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

        Schema::create('pemasukans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('akun_keuangan_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('tahun_anggaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('rekening_id')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal');
            $table->string('nomor_transaksi');
            $table->text('uraian');
            $table->decimal('nominal', 15, 2);
            $table->string('sumber')->nullable();
            $table->string('bukti')->nullable();
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
        Schema::dropIfExists('pemasukans');
    }
};
