<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\PoinPelanggaran;

class PoinPelanggaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PoinPelanggaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->word(),
            'kategori' => fake()->randomElement(["'Ringan'","'Sedang'","'Berat'"]),
            'poin' => fake()->numberBetween(-10000, 10000),
            'sanksi' => fake()->text(),
            'is_active' => fake()->boolean(),
        ];
    }
}
