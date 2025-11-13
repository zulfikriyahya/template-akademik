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

        Schema::create('jam_pelajarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama', 50)->index();
            $table->unsignedTinyInteger('jam_ke');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->unsignedInteger('durasi_menit');
            $table->boolean('is_istirahat')->default(false);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('jam_pelajarans');
    }
};
