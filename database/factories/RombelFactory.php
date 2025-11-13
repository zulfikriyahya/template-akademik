<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\Kelas;
use App\Models\Kurikulum;
use App\Models\Pegawai;
use App\Models\Rombel;
use App\Models\TahunPelajaran;
use App\Models\WaliKelas;

class RombelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rombel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'kelas_id' => Kelas::factory(),
            'kurikulum_id' => Kurikulum::factory(),
            'wali_kelas_id' => WaliKelas::factory(),
            'tahun_pelajaran_id' => TahunPelajaran::factory(),
            'nama' => fake()->word(),
            'kapasitas' => fake()->randomNumber(),
            'jumlah_siswa' => fake()->randomNumber(),
            'is_active' => fake()->boolean(),
            'pegawai_id' => Pegawai::factory(),
        ];
    }
}
