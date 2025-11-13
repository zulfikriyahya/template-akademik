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

        Schema::create('ekstrakurikulers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama');
            $table->enum('kategori', ["Wajib","Pilihan"]);
            $table->text('deskripsi')->nullable();
            $table->uuid('pembina_id')->onUpdate('cascade')->onDelete('restrict');
            $table->boolean('is_active')->default(true);
            $table->foreignId('pegawai_id');
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
        Schema::dropIfExists('ekstrakurikulers');
    }
};
