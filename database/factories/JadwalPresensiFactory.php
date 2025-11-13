<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\JadwalPresensi;

class JadwalPresensiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JadwalPresensi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->word(),
            'jenis' => fake()->randomElement(["'Pegawai'","'Siswa'"]),
            'hari' => fake()->randomElement(["'Senin'","'Selasa'","'Rabu'","'Kamis'","'Jumat'","'Sabtu'","'Minggu'"]),
            'jam_masuk' => fake()->time(),
            'batas_masuk' => fake()->time(),
            'jam_pulang' => fake()->time(),
            'batas_pulang' => fake()->time(),
            'toleransi_terlambat' => fake()->numberBetween(-10000, 10000),
            'is_aktif' => fake()->boolean(),
        ];
    }
}
