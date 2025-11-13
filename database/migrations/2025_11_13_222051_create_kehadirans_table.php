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

        Schema::create('kehadirans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('jadwal_pelajaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal');
            $table->enum('status', ["'Hadir'","'Izin'","'Sakit'","'Alpha'"]);
            $table->text('keterangan')->nullable();
            $table->foreignId('rombel_id');
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
        Schema::dropIfExists('kehadirans');
    }
};
