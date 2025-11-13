<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\TahunPelajaran;

class TahunPelajaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TahunPelajaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->word(),
            'tahun_mulai' => fake()->year(),
            'tahun_selesai' => fake()->year(),
            'tanggal_mulai' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'is_active' => fake()->boolean(),
        ];
    }
}
