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

        Schema::create('orang_tuas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('siswa_id')->onUpdate('cascade')->onDelete('restrict');
            $table->enum('jenis', ["'Ayah'","'Ibu'","'Wali'"]);
            $table->string('nama');
            $table->string('nik', 16)->nullable();
            $table->year('tahun_lahir')->nullable();
            $table->enum('pendidikan', ["'SD'","'SMP'","'SMA'","'D1'","'D2'","'D3'","'D4'","'S1'","'S2'","'S3'","'Tidak Sekolah'"])->nullable();
            $table->string('pekerjaan')->nullable();
            $table->enum('penghasilan', ["'< 500.000'","'500.000 - 1.000.000'","'1.000.000 - 2.000.000'","'2.000.000 - 3.000.000'","'3.000.000 - 5.000.000'","'> 5.000.000'"])->nullable();
            $table->string('telepon')->nullable();
            $table->string('hp')->nullable();
            $table->text('alamat')->nullable();
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
        Schema::dropIfExists('orang_tuas');
    }
};
