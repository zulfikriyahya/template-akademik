<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Buku;
use App\Models\Instansi;
use App\Models\KategoriBuku;
use App\Models\RakBuku;

class BukuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buku::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'kategori_buku_id' => KategoriBuku::factory(),
            'rak_buku_id' => RakBuku::factory(),
            'kode_buku' => fake()->word(),
            'judul' => fake()->word(),
            'pengarang' => fake()->word(),
            'penerbit' => fake()->word(),
            'tahun_terbit' => fake()->year(),
            'isbn' => fake()->word(),
            'jumlah' => fake()->numberBetween(-10000, 10000),
            'stok_tersedia' => fake()->numberBetween(-10000, 10000),
            'lokasi_rak' => fake()->word(),
            'cover' => fake()->word(),
        ];
    }
}
