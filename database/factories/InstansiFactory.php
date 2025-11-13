<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;

class InstansiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instansi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'npsn' => fake()->word(),
            'nss' => fake()->word(),
            'logo' => fake()->word(),
            'email' => fake()->safeEmail(),
            'telepon' => fake()->word(),
            'website' => fake()->word(),
            'alamat' => fake()->text(),
            'provinsi_id' => Provinsi::factory(),
            'kabupaten_id' => Kabupaten::factory(),
            'kecamatan_id' => Kecamatan::factory(),
            'kelurahan_id' => Kelurahan::factory(),
            'kode_pos' => fake()->word(),
            'akreditasi' => fake()->randomElement(["A","B","C","TT"]),
            'nilai_akreditasi' => fake()->regexify('[A-Za-z0-9]{5}'),
            'tahun_akreditasi' => fake()->regexify('[A-Za-z0-9]{4}'),
            'status' => fake()->randomElement(["'Negeri'","'Swasta'"]),
            'jenjang' => fake()->randomElement(["PAUD","RA","MI","MTs","MA","MAK","TK","SD","SMP","SMA","SMK","SLB","SDLB","SMPLB","SMLB"]),
            'sk_pendirian' => fake()->word(),
            'tahun_berdiri' => fake()->year(),
        ];
    }
}
