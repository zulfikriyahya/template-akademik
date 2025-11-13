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

        Schema::create('semesters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('tahun_pelajaran_id')->constrained()->onDelete('restrict')->cascadeOnUpdate();
            $table->enum('nama', ["Ganjil","Genap"]);
            $table->unsignedTinyInteger('semester_ke');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->boolean('is_active')->default(false)->index();
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
        Schema::dropIfExists('semesters');
    }
};
