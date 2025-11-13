<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JadwalPresensi;
use App\Models\Pegawai;
use App\Models\PresensiPegawai;

class PresensiPegawaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PresensiPegawai::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'pegawai_id' => Pegawai::factory(),
            'jadwal_presensi_id' => JadwalPresensi::factory(),
            'tanggal' => fake()->date(),
            'jam_masuk' => fake()->time(),
            'jam_pulang' => fake()->time(),
            'status_masuk' => fake()->randomElement(["'Hadir'","'Terlambat'","'Izin'","'Sakit'","'Alpha'"]),
            'status_pulang' => fake()->randomElement(["'Tepat Waktu'","'Pulang Cepat'"]),
            'foto_masuk' => fake()->word(),
            'foto_pulang' => fake()->word(),
            'lokasi_masuk' => fake()->word(),
            'lokasi_pulang' => fake()->word(),
            'keterangan' => fake()->text(),
        ];
    }
}
