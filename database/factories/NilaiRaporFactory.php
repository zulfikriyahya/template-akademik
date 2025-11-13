<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\MataPelajaran;
use App\Models\NilaiRapor;
use App\Models\Rapor;

class NilaiRaporFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NilaiRapor::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'rapor_id' => Rapor::factory(),
            'mata_pelajaran_id' => MataPelajaran::factory(),
            'nilai_pengetahuan' => fake()->randomFloat(2, 0, 999.99),
            'nilai_keterampilan' => fake()->randomFloat(2, 0, 999.99),
            'nilai_akhir' => fake()->randomFloat(2, 0, 999.99),
            'predikat' => fake()->randomElement(["'A'","'B'","'C'","'D'"]),
            'deskripsi' => fake()->text(),
        ];
    }
}
