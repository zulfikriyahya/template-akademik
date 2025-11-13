<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CatatanPrestasi;
use App\Models\PoinPrestasi;
use App\Models\Siswa;

class CatatanPrestasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CatatanPrestasi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(),
            'poin_prestasi_id' => PoinPrestasi::factory(),
            'tanggal' => fake()->date(),
            'keterangan' => fake()->text(),
            'penghargaan' => fake()->word(),
        ];
    }
}
