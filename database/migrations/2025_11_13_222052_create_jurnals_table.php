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

        Schema::create('jurnals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('jadwal_pelajaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('pegawai_id')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal');
            $table->text('materi');
            $table->string('metode')->nullable();
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('jurnals');
    }
};
