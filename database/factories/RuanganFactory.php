<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\Ruangan;

class RuanganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ruangan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->word(),
            'jenis' => fake()->randomElement(["'Kelas'","'Lab'","'Perpustakaan'","'Kantor'","'Toilet'","'Musholla'","'Aula'","'Lainnya'"]),
            'kapasitas' => fake()->numberBetween(-10000, 10000),
            'gedung' => fake()->regexify('[A-Za-z0-9]{50}'),
            'lantai' => fake()->randomDigitNotNull(),
            'luas' => fake()->randomFloat(2, 0, 99999999.99),
            'kondisi' => fake()->randomElement(["'Baik'","'Rusak Ringan'","'Rusak Berat'"]),
            'keterangan' => fake()->text(),
            'is_active' => fake()->boolean(),
        ];
    }
}
