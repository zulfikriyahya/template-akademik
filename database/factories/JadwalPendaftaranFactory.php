<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\JadwalPendaftaran;
use App\Models\JalurPendaftaran;
use App\Models\TahunPendaftaran;

class JadwalPendaftaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JadwalPendaftaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'tahun_pendaftaran_id' => TahunPendaftaran::factory(),
            'nama' => fake()->word(),
            'jalur_pendaftaran_id' => JalurPendaftaran::factory(),
            'tanggal_mulai' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'kuota' => fake()->numberBetween(-10000, 10000),
            'biaya_pendaftaran' => fake()->randomFloat(2, 0, 9999999999999.99),
            'is_aktif' => fake()->boolean(),
        ];
    }
}
