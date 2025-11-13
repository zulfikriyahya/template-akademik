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

        Schema::create('poin_prestasis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama');
            $table->enum('kategori', ["'Akademik'","'Non-Akademik'"]);
            $table->enum('tingkat', ["'Kelas'","'Sekolah'","'Kecamatan'","'Kabupaten'","'Provinsi'","'Nasional'","'Internasional'"]);
            $table->integer('poin');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('poin_prestasis');
    }
};
