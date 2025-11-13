<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Ekstrakurikuler;
use App\Models\Instansi;
use App\Models\Pegawai;
use App\Models\Pembina;

class EkstrakurikulerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ekstrakurikuler::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->word(),
            'kategori' => fake()->randomElement(["Wajib","Pilihan"]),
            'deskripsi' => fake()->text(),
            'pembina_id' => Pembina::factory(),
            'is_active' => fake()->boolean(),
            'pegawai_id' => Pegawai::factory(),
        ];
    }
}
