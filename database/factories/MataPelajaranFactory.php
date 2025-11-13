<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\Kurikulum;
use App\Models\MataPelajaran;

class MataPelajaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MataPelajaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'kurikulum_id' => Kurikulum::factory(),
            'kode' => fake()->regexify('[A-Za-z0-9]{20}'),
            'nama' => fake()->regexify('[A-Za-z0-9]{100}'),
            'tingkat' => fake()->randomDigitNotNull(),
            'kelompok' => fake()->randomElement(["A","B","C"]),
            'urutan' => fake()->randomNumber(),
            'kkm' => fake()->randomFloat(2, 0, 999.99),
            'is_active' => fake()->boolean(),
        ];
    }
}
