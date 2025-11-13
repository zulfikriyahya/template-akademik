<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\SuratMasuk;

class SuratMasukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SuratMasuk::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nomor_surat' => fake()->word(),
            'pengirim' => fake()->word(),
            'perihal' => fake()->word(),
            'tanggal_surat' => fake()->date(),
            'tanggal_terima' => fake()->date(),
            'isi_ringkas' => fake()->text(),
            'file' => fake()->word(),
            'disposisi' => fake()->text(),
        ];
    }
}
