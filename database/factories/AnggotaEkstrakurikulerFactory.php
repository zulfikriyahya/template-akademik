<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AnggotaEkstrakurikuler;
use App\Models\Ekstrakurikuler;
use App\Models\Siswa;
use App\Models\TahunEkstrakurikuler;

class AnggotaEkstrakurikulerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AnggotaEkstrakurikuler::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ekstrakurikuler_id' => Ekstrakurikuler::factory(),
            'siswa_id' => Siswa::factory(),
            'tahun_ekstrakurikuler_id' => TahunEkstrakurikuler::factory(),
            'tanggal_bergabung' => fake()->date(),
            'status' => fake()->randomElement(["'Aktif'","'Tidak Aktif'"]),
        ];
    }
}
