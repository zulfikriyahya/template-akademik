<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\KompetensiDasar;
use App\Models\Penilaian;
use App\Models\Rombel;
use App\Models\Semester;
use App\Models\Siswa;

class PenilaianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penilaian::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kompetensi_dasar_id' => KompetensiDasar::factory(),
            'siswa_id' => Siswa::factory(),
            'rombel_id' => Rombel::factory(),
            'jenis_penilaian' => fake()->randomElement(["'Harian'","'UTS'","'UAS'","'Praktek'","'Projek'","'Portofolio'"]),
            'nilai' => fake()->randomFloat(2, 0, 999.99),
            'tanggal' => fake()->date(),
            'keterangan' => fake()->text(),
            'semester_id' => Semester::factory(),
        ];
    }
}
