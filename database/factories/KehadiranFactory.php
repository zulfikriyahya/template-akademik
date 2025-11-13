<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JadwalPelajaran;
use App\Models\Kehadiran;
use App\Models\Rombel;
use App\Models\Siswa;

class KehadiranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kehadiran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'jadwal_pelajaran_id' => JadwalPelajaran::factory(),
            'siswa_id' => Siswa::factory(),
            'tanggal' => fake()->date(),
            'status' => fake()->randomElement(["'Hadir'","'Izin'","'Sakit'","'Alpha'"]),
            'keterangan' => fake()->text(),
            'rombel_id' => Rombel::factory(),
        ];
    }
}
