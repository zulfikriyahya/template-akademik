<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Instansi;
use App\Models\TahunPelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function Symfony\Component\Clock\now;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        TahunPelajaran::create([
            'nama' => '2024/2025',
        ]);
        Jurusan::create([
            'nama' => 'Unggulan',
        ]);
        Jurusan::create([
            'nama' => 'Reguler',
        ]);
        Kelas::create([
            'nama' => '7A',
            'jurusan_id' => '1',
        ]);
        Kelas::create([
            'nama' => '7B',
            'jurusan_id' => '1',
        ]);
        Kelas::create([
            'nama' => '7C',
            'jurusan_id' => '2',
        ]);
        Kelas::create([
            'nama' => '7D',
            'jurusan_id' => '2',
        ]);
        Kelas::create([
            'nama' => '8A',
            'jurusan_id' => '1',
        ]);
        Kelas::create([
            'nama' => '8B',
            'jurusan_id' => '1',
        ]);
        Kelas::create([
            'nama' => '8C',
            'jurusan_id' => '2',
        ]);
        Kelas::create([
            'nama' => '8D',
            'jurusan_id' => '2',
        ]);
        Kelas::create([
            'nama' => '9A',
            'jurusan_id' => '1',
        ]);
        Kelas::create([
            'nama' => '9B',
            'jurusan_id' => '1',
        ]);
        Kelas::create([
            'nama' => '9C',
            'jurusan_id' => '2',
        ]);
        Kelas::create([
            'nama' => '9D',
            'jurusan_id' => '2',
        ]);
        Instansi::create([
            'nama' => 'MTs Negeri 1 Pandeglang',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 7A 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 7B 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 7C 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 7D 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 8A 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 8B 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 8C 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 8D 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 9A 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 9B 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 9C 2024/2025',
        ]);
        Guru::create([
            'nama' => 'Wali Kelas 9D 2024/2025',
        ]);
        Siswa::create([
            'nama' => 'Siswa 1 Kelas 7A',
        ]);
        Siswa::create([
            'nama' => 'Siswa 2 Kelas 7A',
        ]);
        Siswa::create([
            'nama' => 'Siswa 3 Kelas 7B',
        ]);
        Siswa::create([
            'nama' => 'Siswa 4 Kelas 7B',
        ]);
        Siswa::create([
            'nama' => 'Siswa 5 Kelas 7C',
        ]);
        Siswa::create([
            'nama' => 'Siswa 6 Kelas 7C',
        ]);
        Siswa::create([
            'nama' => 'Siswa 7 Kelas 7D',
        ]);
        Siswa::create([
            'nama' => 'Siswa 8 Kelas 7D',
        ]);
        Siswa::create([
            'nama' => 'Siswa 9 Kelas 8A',
        ]);
        Siswa::create([
            'nama' => 'Siswa 10 Kelas 8A',
        ]);
        Siswa::create([
            'nama' => 'Siswa 11 Kelas 8B',
        ]);
        Siswa::create([
            'nama' => 'Siswa 12 Kelas 8B',
        ]);
        Siswa::create([
            'nama' => 'Siswa 13 Kelas 8C',
        ]);
        Siswa::create([
            'nama' => 'Siswa 14 Kelas 8C',
        ]);
        Siswa::create([
            'nama' => 'Siswa 15 Kelas 8D',
        ]);
        Siswa::create([
            'nama' => 'Siswa 16 Kelas 8D',
        ]);
        Siswa::create([
            'nama' => 'Siswa 17 Kelas 9A',
        ]);
        Siswa::create([
            'nama' => 'Siswa 18 Kelas 9A',
        ]);
        Siswa::create([
            'nama' => 'Siswa 19 Kelas 9B',
        ]);
        Siswa::create([
            'nama' => 'Siswa 20 Kelas 9B',
        ]);
        Siswa::create([
            'nama' => 'Siswa 21 Kelas 9C',
        ]);
        Siswa::create([
            'nama' => 'Siswa 21 Kelas 9C',
        ]);
        Siswa::create([
            'nama' => 'Siswa 22 Kelas 9D',
        ]);
        Siswa::create([
            'nama' => 'Siswa 23 Kelas 9D',
        ]);
    }
}
