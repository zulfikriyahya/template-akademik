<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CatatanPelanggaran;
use App\Models\Pegawai;
use App\Models\PoinPelanggaran;
use App\Models\Siswa;

class CatatanPelanggaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CatatanPelanggaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(),
            'poin_pelanggaran_id' => PoinPelanggaran::factory(),
            'pegawai_id' => Pegawai::factory(),
            'tanggal' => fake()->date(),
            'keterangan' => fake()->text(),
            'tindak_lanjut' => fake()->text(),
        ];
    }
}
