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

        Schema::create('nilai_rapors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('rapor_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('mata_pelajaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->decimal('nilai_pengetahuan', 5, 2)->nullable();
            $table->decimal('nilai_keterampilan', 5, 2)->nullable();
            $table->decimal('nilai_akhir', 5, 2);
            $table->enum('predikat', ["'A'","'B'","'C'","'D'"]);
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('nilai_rapors');
    }
};
