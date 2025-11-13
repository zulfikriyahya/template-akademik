<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Kabupaten;
use App\Models\Provinsi;

class KabupatenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kabupaten::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'provinsi_id' => Provinsi::factory(),
            'nama' => fake()->word(),
            'kategori' => fake()->randomElement(["'Kabupaten'","'Kota'"]),
            'kode_kabupaten' => fake()->word(),
        ];
    }
}
