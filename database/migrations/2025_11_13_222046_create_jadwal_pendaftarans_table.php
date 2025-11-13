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

        Schema::create('jadwal_pendaftarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('tahun_pendaftaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama');
            $table->uuid('jalur_pendaftaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('kuota');
            $table->decimal('biaya_pendaftaran', 15, 2)->default(0);
            $table->boolean('is_aktif')->default(true);
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
        Schema::dropIfExists('jadwal_pendaftarans');
    }
};
