<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Konseling;
use App\Models\Pegawai;
use App\Models\Siswa;

class KonselingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Konseling::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(),
            'pegawai_id' => Pegawai::factory(),
            'tanggal' => fake()->date(),
            'jenis' => fake()->randomElement(["'Individual'","'Kelompok'","'Klasikal'"]),
            'topik' => fake()->word(),
            'permasalahan' => fake()->text(),
            'solusi' => fake()->text(),
            'tindak_lanjut' => fake()->text(),
            'status' => fake()->randomElement(["'Proses'","'Selesai'"]),
        ];
    }
}
