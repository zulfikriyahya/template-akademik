<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\KalenderAkademik;
use App\Models\TahunPelajaran;

class KalenderAkademikFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KalenderAkademik::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'tahun_pelajaran_id' => TahunPelajaran::factory(),
            'nama' => fake()->regexify('[A-Za-z0-9]{100}'),
            'tanggal_mulai' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'jenis' => fake()->randomElement(["Pembelajaran","Ujian","Libur","Kegiatan"]),
            'warna' => fake()->regexify('[A-Za-z0-9]{7}'),
            'keterangan' => fake()->text(),
        ];
    }
}
