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

        Schema::create('inventaris', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kategori_inventaris_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('kode_inventaris');
            $table->string('nama');
            $table->string('merk')->nullable();
            $table->year('tahun_pengadaan')->nullable();
            $table->decimal('harga_perolehan', 15, 2)->default(0);
            $table->enum('kondisi', ["'Baik'","'Rusak Ringan'","'Rusak Berat'","'Hilang'"]);
            $table->string('lokasi')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('inventaris');
    }
};
