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

        Schema::create('pegawais', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama');
            $table->string('nik', 16)->nullable();
            $table->string('nip')->nullable();
            $table->string('nuptk')->nullable();
            $table->enum('jenis_kelamin', ["'L'","'P'"]);
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('agama', ["'Islam'","'Kristen'","'Katolik'","'Hindu'","'Buddha'","'Konghucu'"])->nullable();
            $table->enum('status_perkawinan', ["'Belum Menikah'","'Menikah'","'Cerai Hidup'","'Cerai Mati'"])->nullable();
            $table->enum('golongan_darah', ["'A'","'B'","'AB'","'O'"])->nullable();
            $table->text('alamat');
            $table->uuid('provinsi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kabupaten_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kecamatan_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kelurahan_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('telepon')->nullable();
            $table->string('hp')->nullable();
            $table->string('email')->nullable();
            $table->string('foto')->nullable();
            $table->enum('status_kepegawaian', ["'PNS'","'PPPK'","'GTY'","'PTY'","'Honorer'"])->nullable();
            $table->enum('jenis_ptk', ["'Guru Mapel'","'Guru Kelas'","'Guru BK'","'Kepala Sekolah'","'Tenaga Administrasi'","'Tenaga Perpustakaan'","'Laboran'","'Penjaga Sekolah'"])->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->foreignId('departemen_id');
            $table->foreignId('jabatan_id');
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
        Schema::dropIfExists('pegawais');
    }
};
