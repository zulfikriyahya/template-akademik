<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\JenisPembayaran;

class JenisPembayaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JenisPembayaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->word(),
            'deskripsi' => fake()->text(),
            'nominal' => fake()->randomFloat(2, 0, 9999999999999.99),
            'is_wajib' => fake()->boolean(),
        ];
    }
}
