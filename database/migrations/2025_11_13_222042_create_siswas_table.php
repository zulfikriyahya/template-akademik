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

        Schema::create('siswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->foreignId('user_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nik', 16)->nullable();
            $table->string('nisn', 10)->nullable();
            $table->string('nipd')->nullable();
            $table->enum('jenis_kelamin', ["'L'","'P'"]);
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('agama', ["'Islam'","'Kristen'","'Katolik'","'Hindu'","'Buddha'","'Konghucu'"])->nullable();
            $table->integer('anak_ke')->nullable();
            $table->integer('jumlah_saudara')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
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
            $table->enum('status_tinggal', ["'Bersama Orang Tua'","'Wali'","'Kost'","'Asrama'"])->nullable();
            $table->enum('transportasi', ["'Jalan Kaki'","'Sepeda'","'Motor'","'Mobil'","'Angkutan Umum'","'Jemputan'"])->nullable();
            $table->boolean('penerima_kps')->default(false);
            $table->string('no_kps')->nullable();
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
        Schema::dropIfExists('siswas');
    }
};
