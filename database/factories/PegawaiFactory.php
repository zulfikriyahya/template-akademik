<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Departemen;
use App\Models\Instansi;
use App\Models\Jabatan;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Pegawai;
use App\Models\Provinsi;
use App\Models\User;

class PegawaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pegawai::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'instansi_id' => Instansi::factory(),
            'nama' => fake()->word(),
            'nik' => fake()->regexify('[A-Za-z0-9]{16}'),
            'nip' => fake()->word(),
            'nuptk' => fake()->word(),
            'jenis_kelamin' => fake()->randomElement(["'L'","'P'"]),
            'tempat_lahir' => fake()->word(),
            'tanggal_lahir' => fake()->date(),
            'agama' => fake()->randomElement(["'Islam'","'Kristen'","'Katolik'","'Hindu'","'Buddha'","'Konghucu'"]),
            'status_perkawinan' => fake()->randomElement(["'Belum Menikah'","'Menikah'","'Cerai Hidup'","'Cerai Mati'"]),
            'golongan_darah' => fake()->randomElement(["'A'","'B'","'AB'","'O'"]),
            'alamat' => fake()->text(),
            'provinsi_id' => Provinsi::factory(),
            'kabupaten_id' => Kabupaten::factory(),
            'kecamatan_id' => Kecamatan::factory(),
            'kelurahan_id' => Kelurahan::factory(),
            'telepon' => fake()->word(),
            'hp' => fake()->word(),
            'email' => fake()->safeEmail(),
            'foto' => fake()->word(),
            'status_kepegawaian' => fake()->randomElement(["'PNS'","'PPPK'","'GTY'","'PTY'","'Honorer'"]),
            'jenis_ptk' => fake()->randomElement(["'Guru Mapel'","'Guru Kelas'","'Guru BK'","'Kepala Sekolah'","'Tenaga Administrasi'","'Tenaga Perpustakaan'","'Laboran'","'Penjaga Sekolah'"]),
            'tanggal_masuk' => fake()->date(),
            'departemen_id' => Departemen::factory(),
            'jabatan_id' => Jabatan::factory(),
        ];
    }
}
