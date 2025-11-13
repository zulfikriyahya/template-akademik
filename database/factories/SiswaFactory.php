<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Models\Siswa;
use App\Models\User;

class SiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Siswa::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'user_id' => User::factory(),
            'instansi_id' => Instansi::factory(),
            'nik' => fake()->regexify('[A-Za-z0-9]{16}'),
            'nisn' => fake()->regexify('[A-Za-z0-9]{10}'),
            'nipd' => fake()->word(),
            'jenis_kelamin' => fake()->randomElement(["'L'","'P'"]),
            'tempat_lahir' => fake()->word(),
            'tanggal_lahir' => fake()->date(),
            'agama' => fake()->randomElement(["'Islam'","'Kristen'","'Katolik'","'Hindu'","'Buddha'","'Konghucu'"]),
            'anak_ke' => fake()->numberBetween(-10000, 10000),
            'jumlah_saudara' => fake()->numberBetween(-10000, 10000),
            'tinggi_badan' => fake()->numberBetween(-10000, 10000),
            'berat_badan' => fake()->numberBetween(-10000, 10000),
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
            'status_tinggal' => fake()->randomElement(["'Bersama Orang Tua'","'Wali'","'Kost'","'Asrama'"]),
            'transportasi' => fake()->randomElement(["'Jalan Kaki'","'Sepeda'","'Motor'","'Mobil'","'Angkutan Umum'","'Jemputan'"]),
            'penerima_kps' => fake()->boolean(),
            'no_kps' => fake()->word(),
        ];
    }
}
