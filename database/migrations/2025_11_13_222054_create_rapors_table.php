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

        Schema::create('rapors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('rombel_id')->onUpdate('cascade')->onDelete('restrict');
            $table->enum('semester', ["'Ganjil'","'Genap'"]);
            $table->text('catatan_wali_kelas')->nullable();
            $table->date('tanggal_terbit')->nullable();
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
        Schema::dropIfExists('rapors');
    }
};
