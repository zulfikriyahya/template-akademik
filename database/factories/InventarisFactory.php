<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\Inventaris;
use App\Models\KategoriInventaris;

class InventarisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventaris::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'kategori_inventaris_id' => KategoriInventaris::factory(),
            'kode_inventaris' => fake()->word(),
            'nama' => fake()->word(),
            'merk' => fake()->word(),
            'tahun_pengadaan' => fake()->year(),
            'harga_perolehan' => fake()->randomFloat(2, 0, 9999999999999.99),
            'kondisi' => fake()->randomElement(["'Baik'","'Rusak Ringan'","'Rusak Berat'","'Hilang'"]),
            'lokasi' => fake()->word(),
            'keterangan' => fake()->text(),
            'foto' => fake()->word(),
        ];
    }
}
