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

        Schema::create('jadwal_presensis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama');
            $table->enum('jenis', ["'Pegawai'","'Siswa'"]);
            $table->enum('hari', ["'Senin'","'Selasa'","'Rabu'","'Kamis'","'Jumat'","'Sabtu'","'Minggu'"]);
            $table->time('jam_masuk');
            $table->time('batas_masuk');
            $table->time('jam_pulang');
            $table->time('batas_pulang');
            $table->integer('toleransi_terlambat')->default(0);
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
        Schema::dropIfExists('jadwal_presensis');
    }
};
