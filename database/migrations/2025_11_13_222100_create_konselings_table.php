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

        Schema::create('konselings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('pegawai_id')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal');
            $table->enum('jenis', ["'Individual'","'Kelompok'","'Klasikal'"]);
            $table->string('topik');
            $table->text('permasalahan');
            $table->text('solusi')->nullable();
            $table->text('tindak_lanjut')->nullable();
            $table->enum('status', ["'Proses'","'Selesai'"]);
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
        Schema::dropIfExists('konselings');
    }
};
