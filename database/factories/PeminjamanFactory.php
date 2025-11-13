<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Buku;
use App\Models\Pegawai;
use App\Models\Peminjaman;
use App\Models\Siswa;

class PeminjamanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Peminjaman::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'buku_id' => Buku::factory(),
            'siswa_id' => Siswa::factory(),
            'pegawai_id' => Pegawai::factory(),
            'tanggal_pinjam' => fake()->date(),
            'tanggal_kembali_rencana' => fake()->date(),
            'tanggal_kembali_actual' => fake()->date(),
            'status' => fake()->randomElement(["'Dipinjam'","'Dikembalikan'","'Terlambat'","'Hilang'"]),
            'denda' => fake()->randomFloat(2, 0, 9999999999999.99),
            'keterangan' => fake()->text(),
        ];
    }
}
