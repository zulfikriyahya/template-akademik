<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AkunKeuangan;
use App\Models\Instansi;
use App\Models\Parent;

class AkunKeuanganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AkunKeuangan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'kode_akun' => fake()->word(),
            'nama_akun' => fake()->word(),
            'jenis' => fake()->randomElement(["'Aset'","'Liabilitas'","'Ekuitas'","'Pendapatan'","'Beban'"]),
            'kategori' => fake()->randomElement(["'Operasional'","'Investasi'","'Pembiayaan'"]),
            'parent_id' => Parent::factory(),
            'akun_keuangan_id' => AkunKeuangan::factory(),
        ];
    }
}
