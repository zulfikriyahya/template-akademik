<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JadwalPelajaran;
use App\Models\MataPelajaran;
use App\Models\Pegawai;
use App\Models\Rombel;

class JadwalPelajaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JadwalPelajaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'rombel_id' => Rombel::factory(),
            'mata_pelajaran_id' => MataPelajaran::factory(),
            'pegawai_id' => Pegawai::factory(),
            'hari' => fake()->randomElement(["'Senin'","'Selasa'","'Rabu'","'Kamis'","'Jumat'","'Sabtu'","'Minggu'"]),
            'jam_mulai' => fake()->time(),
            'jam_selesai' => fake()->time(),
            'ruangan' => fake()->word(),
        ];
    }
}
