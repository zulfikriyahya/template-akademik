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

        Schema::create('kalender_akademiks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignUuid('tahun_pelajaran_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama', 100)->index();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('jenis', ["Pembelajaran","Ujian","Libur","Kegiatan"]);
            $table->string('warna', 7)->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('kalender_akademiks');
    }
};
