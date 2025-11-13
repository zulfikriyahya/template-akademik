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

        Schema::create('tahun_ekstrakurikulers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignUuid('pembimbing_id')->constrained('pegawais')->onDelete('restrict')->cascadeOnUpdate();
            $table->string('jadwal', 100)->nullable();
            $table->string('tempat', 100)->nullable();
            $table->unsignedInteger('kuota')->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('tahun_ekstrakurikulers');
    }
};
