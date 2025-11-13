<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\JenisSurat;
use App\Models\Pegawai;
use App\Models\Penandatangan;
use App\Models\SuratKeluar;

class SuratKeluarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SuratKeluar::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'jenis_surat_id' => JenisSurat::factory(),
            'nomor_surat' => fake()->word(),
            'perihal' => fake()->word(),
            'tujuan' => fake()->word(),
            'tanggal_surat' => fake()->date(),
            'isi_surat' => fake()->text(),
            'penandatangan_id' => Penandatangan::factory(),
            'file' => fake()->word(),
            'pegawai_id' => Pegawai::factory(),
        ];
    }
}
