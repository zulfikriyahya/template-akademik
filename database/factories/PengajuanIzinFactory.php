<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pegawai;
use App\Models\PengajuanIzin;
use App\Models\Siswa;

class PengajuanIzinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PengajuanIzin::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'siswa_id' => Siswa::factory(),
            'pegawai_id' => Pegawai::factory(),
            'jenis' => fake()->randomElement(["'Sakit'","'Izin'","'Cuti'"]),
            'tanggal_mulai' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'alasan' => fake()->text(),
            'file_pendukung' => fake()->word(),
            'status' => fake()->randomElement(["'Menunggu'","'Disetujui'","'Ditolak'"]),
            'catatan_approval' => fake()->text(),
            'disetujui_oleh' => fake()->uuid(),
            'tanggal_approval' => fake()->dateTime(),
        ];
    }
}
