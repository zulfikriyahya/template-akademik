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

        Schema::create('kompetensi_dasars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('mata_pelajaran_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('kode', 20)->index();
            $table->text('deskripsi');
            $table->enum('jenis', ["Pengetahuan","Keterampilan"]);
            $table->unsignedTinyInteger('tingkat');
            $table->uuid('semester_id')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedInteger('urutan')->default(0);
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
        Schema::dropIfExists('kompetensi_dasars');
    }
};
