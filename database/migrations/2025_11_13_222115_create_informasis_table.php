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

        Schema::create('informasis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('judul');
            $table->text('konten');
            $table->enum('kategori', ["'Pengumuman'","'Berita'","'Agenda'","'Artikel'"]);
            $table->dateTime('tanggal_publish');
            $table->string('thumbnail')->nullable();
            $table->boolean('is_published')->default(false);
            $table->uuid('dibuat_oleh')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('informasis');
    }
};
