<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\KompetensiDasar;
use App\Models\MataPelajaran;
use App\Models\Semester;

class KompetensiDasarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KompetensiDasar::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'mata_pelajaran_id' => MataPelajaran::factory(),
            'kode' => fake()->regexify('[A-Za-z0-9]{20}'),
            'deskripsi' => fake()->text(),
            'jenis' => fake()->randomElement(["Pengetahuan","Keterampilan"]),
            'tingkat' => fake()->randomDigitNotNull(),
            'semester_id' => Semester::factory(),
            'urutan' => fake()->randomNumber(),
        ];
    }
}
