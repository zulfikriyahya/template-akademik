<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\Rekening;

class RekeningFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rekening::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama_bank' => fake()->word(),
            'nomor_rekening' => fake()->word(),
            'atas_nama' => fake()->word(),
            'saldo' => fake()->randomFloat(2, 0, 9999999999999.99),
            'is_aktif' => fake()->boolean(),
        ];
    }
}
