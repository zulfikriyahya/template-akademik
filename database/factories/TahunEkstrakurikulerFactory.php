<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\Pegawai;
use App\Models\TahunEkstrakurikuler;

class TahunEkstrakurikulerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TahunEkstrakurikuler::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'pembimbing_id' => Pegawai::factory(),
            'jadwal' => fake()->regexify('[A-Za-z0-9]{100}'),
            'tempat' => fake()->regexify('[A-Za-z0-9]{100}'),
            'kuota' => fake()->randomNumber(),
            'is_active' => fake()->boolean(),
            'pegawai_id' => Pegawai::factory(),
        ];
    }
}
