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

        Schema::create('jadwal_pelajarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('rombel_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('mata_pelajaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('pegawai_id')->onUpdate('cascade')->onDelete('restrict');
            $table->enum('hari', ["'Senin'","'Selasa'","'Rabu'","'Kamis'","'Jumat'","'Sabtu'","'Minggu'"]);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('ruangan')->nullable();
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
        Schema::dropIfExists('jadwal_pelajarans');
    }
};
