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

        Schema::create('bukus', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kategori_buku_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('rak_buku_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('kode_buku');
            $table->string('judul');
            $table->string('pengarang')->nullable();
            $table->string('penerbit')->nullable();
            $table->year('tahun_terbit')->nullable();
            $table->string('isbn')->nullable();
            $table->integer('jumlah')->default(1);
            $table->integer('stok_tersedia')->default(1);
            $table->string('lokasi_rak')->nullable();
            $table->string('cover')->nullable();
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
        Schema::dropIfExists('bukus');
    }
};
