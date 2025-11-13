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
        Schema::create('rombels', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('instansi_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('tahun_pelajaran_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('kelas_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('guru_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rombels');
    }
};
