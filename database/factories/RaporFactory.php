<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Rapor;
use App\Models\Rombel;
use App\Models\Siswa;

class RaporFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rapor::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(),
            'rombel_id' => Rombel::factory(),
            'semester' => fake()->randomElement(["'Ganjil'","'Genap'"]),
            'catatan_wali_kelas' => fake()->text(),
            'tanggal_terbit' => fake()->date(),
        ];
    }
}
