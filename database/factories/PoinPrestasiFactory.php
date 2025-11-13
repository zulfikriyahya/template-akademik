<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\PoinPrestasi;

class PoinPrestasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PoinPrestasi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->word(),
            'kategori' => fake()->randomElement(["'Akademik'","'Non-Akademik'"]),
            'tingkat' => fake()->randomElement(["'Kelas'","'Sekolah'","'Kecamatan'","'Kabupaten'","'Provinsi'","'Nasional'","'Internasional'"]),
            'poin' => fake()->numberBetween(-10000, 10000),
            'is_active' => fake()->boolean(),
        ];
    }
}
