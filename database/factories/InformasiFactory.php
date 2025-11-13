<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Informasi;
use App\Models\Instansi;
use App\Models\Pegawai;

class InformasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Informasi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'judul' => fake()->word(),
            'konten' => fake()->text(),
            'kategori' => fake()->randomElement(["'Pengumuman'","'Berita'","'Agenda'","'Artikel'"]),
            'tanggal_publish' => fake()->dateTime(),
            'thumbnail' => fake()->word(),
            'is_published' => fake()->boolean(),
            'dibuat_oleh' => fake()->uuid(),
            'pegawai_id' => Pegawai::factory(),
        ];
    }
}
