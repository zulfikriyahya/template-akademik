<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\JamPelajaran;

class JamPelajaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JamPelajaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->regexify('[A-Za-z0-9]{50}'),
            'jam_ke' => fake()->randomDigitNotNull(),
            'waktu_mulai' => fake()->time(),
            'waktu_selesai' => fake()->time(),
            'durasi_menit' => fake()->randomNumber(),
            'is_istirahat' => fake()->boolean(),
            'is_active' => fake()->boolean(),
        ];
    }
}
