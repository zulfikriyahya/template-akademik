<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\OrangTua;
use App\Models\Siswa;

class OrangTuaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrangTua::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(),
            'jenis' => fake()->randomElement(["'Ayah'","'Ibu'","'Wali'"]),
            'nama' => fake()->word(),
            'nik' => fake()->regexify('[A-Za-z0-9]{16}'),
            'tahun_lahir' => fake()->year(),
            'pendidikan' => fake()->randomElement(["'SD'","'SMP'","'SMA'","'D1'","'D2'","'D3'","'D4'","'S1'","'S2'","'S3'","'Tidak Sekolah'"]),
            'pekerjaan' => fake()->word(),
            'penghasilan' => fake()->randomElement(["'< 500.000'","'500.000 - 1.000.000'","'1.000.000 - 2.000.000'","'2.000.000 - 3.000.000'","'3.000.000 - 5.000.000'","'> 5.000.000'"]),
            'telepon' => fake()->word(),
            'hp' => fake()->word(),
            'alamat' => fake()->text(),
        ];
    }
}
