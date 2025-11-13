<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\HariLibur;
use App\Models\Instansi;

class HariLiburFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HariLibur::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->regexify('[A-Za-z0-9]{100}'),
            'tanggal_mulai' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'jenis' => fake()->randomElement(["Nasional","Keagamaan","Sekolah","Lainnya"]),
            'keterangan' => fake()->text(),
            'is_cuti_bersama' => fake()->boolean(),
        ];
    }
}
