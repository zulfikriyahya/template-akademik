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

        Schema::create('akun_keuangans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('kode_akun');
            $table->string('nama_akun');
            $table->enum('jenis', ["'Aset'","'Liabilitas'","'Ekuitas'","'Pendapatan'","'Beban'"]);
            $table->enum('kategori', ["'Operasional'","'Investasi'","'Pembiayaan'"]);
            $table->uuid('parent_id')->onUpdate('cascade')->onDelete('restrict')->nullable();
            $table->foreignId('akun_keuangan_id');
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
        Schema::dropIfExists('akun_keuangans');
    }
};
