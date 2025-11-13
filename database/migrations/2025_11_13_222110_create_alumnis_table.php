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

        Schema::create('alumnis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->year('tahun_lulus');
            $table->string('no_ijazah')->nullable();
            $table->decimal('nilai_un', 5, 2)->nullable();
            $table->string('melanjutkan_ke')->nullable();
            $table->string('bekerja_di')->nullable();
            $table->text('alamat_sekarang')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('alumnis');
    }
};
