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

        Schema::create('peminjamen', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('buku_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict')->nullable();
            $table->uuid('pegawai_id')->onUpdate('cascade')->onDelete('restrict')->nullable();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali_rencana');
            $table->date('tanggal_kembali_actual')->nullable();
            $table->enum('status', ["'Dipinjam'","'Dikembalikan'","'Terlambat'","'Hilang'"]);
            $table->decimal('denda', 15, 2)->default(0);
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
        Schema::dropIfExists('peminjamen');
    }
};
