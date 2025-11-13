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

        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('instansi_id')->onUpdate('cascade')->onDelete('restrict');
            $table->uuid('kurikulum_id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('kode', 20)->unique()->index();
            $table->string('nama', 100)->index();
            $table->unsignedTinyInteger('tingkat')->nullable();
            $table->enum('kelompok', ["A","B","C"]);
            $table->unsignedInteger('urutan')->default(0);
            $table->decimal('kkm', 5, 2)->default(75.00);
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
        Schema::dropIfExists('mata_pelajarans');
    }
};
