<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AkunKeuangan;
use App\Models\Instansi;
use App\Models\Pemasukan;
use App\Models\Rekening;
use App\Models\TahunAnggaran;

class PemasukanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pemasukan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instansi_id' => Instansi::factory(),
            'akun_keuangan_id' => AkunKeuangan::factory(),
            'tahun_anggaran_id' => TahunAnggaran::factory(),
            'rekening_id' => Rekening::factory(),
            'tanggal' => fake()->date(),
            'nomor_transaksi' => fake()->word(),
            'uraian' => fake()->text(),
            'nominal' => fake()->randomFloat(2, 0, 9999999999999.99),
            'sumber' => fake()->word(),
            'bukti' => fake()->word(),
        ];
    }
}
