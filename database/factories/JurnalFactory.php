<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JadwalPelajaran;
use App\Models\Jurnal;
use App\Models\Pegawai;

class JurnalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jurnal::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'jadwal_pelajaran_id' => JadwalPelajaran::factory(),
            'pegawai_id' => Pegawai::factory(),
            'tanggal' => fake()->date(),
            'materi' => fake()->text(),
            'metode' => fake()->word(),
            'catatan' => fake()->text(),
        ];
    }
}
