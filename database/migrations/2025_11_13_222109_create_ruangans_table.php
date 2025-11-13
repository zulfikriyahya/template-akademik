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

        Schema::create('ruangans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama');
            $table->enum('jenis', ["'Kelas'","'Lab'","'Perpustakaan'","'Kantor'","'Toilet'","'Musholla'","'Aula'","'Lainnya'"]);
            $table->integer('kapasitas')->nullable();
            $table->string('gedung', 50)->nullable();
            $table->unsignedTinyInteger('lantai')->nullable();
            $table->decimal('luas', 10, 2)->nullable();
            $table->enum('kondisi', ["'Baik'","'Rusak Ringan'","'Rusak Berat'"]);
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('ruangans');
    }
};
