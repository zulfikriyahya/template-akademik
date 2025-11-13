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

        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nomor_surat');
            $table->string('pengirim');
            $table->string('perihal');
            $table->date('tanggal_surat');
            $table->date('tanggal_terima');
            $table->text('isi_ringkas')->nullable();
            $table->string('file')->nullable();
            $table->text('disposisi')->nullable();
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
        Schema::dropIfExists('surat_masuks');
    }
};
