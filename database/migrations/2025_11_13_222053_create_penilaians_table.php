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

        Schema::create('penilaians', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('kompetensi_dasar_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('rombel_id')->onUpdate('cascade')->onDelete('restrict');
            $table->enum('jenis_penilaian', ["'Harian'","'UTS'","'UAS'","'Praktek'","'Projek'","'Portofolio'"]);
            $table->decimal('nilai', 5, 2);
            $table->date('tanggal');
            $table->text('keterangan')->nullable();
            $table->foreignId('semester_id');
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
        Schema::dropIfExists('penilaians');
    }
};
