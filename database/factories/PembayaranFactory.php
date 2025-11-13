<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JenisPembayaran;
use App\Models\Pembayaran;
use App\Models\Rekening;
use App\Models\Siswa;
use App\Models\TahunAnggaran;

class PembayaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pembayaran::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(),
            'jenis_pembayaran_id' => JenisPembayaran::factory(),
            'tahun_anggaran_id' => TahunAnggaran::factory(),
            'tanggal_pembayaran' => fake()->date(),
            'nominal' => fake()->randomFloat(2, 0, 9999999999999.99),
            'metode' => fake()->randomElement(["'Tunai'","'Transfer'","'VA'","'QRIS'"]),
            'nomor_transaksi' => fake()->word(),
            'rekening_id' => Rekening::factory(),
            'bukti_bayar' => fake()->word(),
            'status' => fake()->randomElement(["'Menunggu'","'Lunas'","'Gagal'"]),
            'keterangan' => fake()->text(),
        ];
    }
}
