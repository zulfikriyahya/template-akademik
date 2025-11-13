<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Semester;
use App\Models\TahunPelajaran;

class SemesterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Semester::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tahun_pelajaran_id' => TahunPelajaran::factory(),
            'nama' => fake()->randomElement(["Ganjil","Genap"]),
            'semester_ke' => fake()->randomDigitNotNull(),
            'tanggal_mulai' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'is_active' => fake()->boolean(),
        ];
    }
}
