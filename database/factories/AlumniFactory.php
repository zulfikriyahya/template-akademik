<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Alumni;
use App\Models\Instansi;
use App\Models\Siswa;

class AlumniFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumni::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(),
            'instansi_id' => Instansi::factory(),
            'tahun_lulus' => fake()->year(),
            'no_ijazah' => fake()->word(),
            'nilai_un' => fake()->randomFloat(2, 0, 999.99),
            'melanjutkan_ke' => fake()->word(),
            'bekerja_di' => fake()->word(),
            'alamat_sekarang' => fake()->text(),
            'telepon' => fake()->word(),
            'email' => fake()->safeEmail(),
        ];
    }
}
