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
        Schema::create('instansis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('npsn');
            $table->string('nss')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->string('website')->nullable();
            $table->text('alamat');
            $table->uuid('provinsi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kabupaten_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kecamatan_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kelurahan_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('kode_pos')->nullable();
            $table->enum('akreditasi', ["A","B","C","TT"])->nullable();
            $table->string('nilai_akreditasi', 5)->nullable();
            $table->string('tahun_akreditasi', 4)->nullable();
            $table->enum('status', ["'Negeri'","'Swasta'"])->default('Negeri');
            $table->enum('jenjang', ["PAUD","RA","MI","MTs","MA","MAK","TK","SD","SMP","SMA","SMK","SLB","SDLB","SMPLB","SMLB"]);
            $table->string('sk_pendirian')->nullable();
            $table->year('tahun_berdiri')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instansis');
    }
};
