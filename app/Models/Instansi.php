<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Jurusan;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kurikulum;
use App\Models\JamPelajaran;
use App\Models\JadwalPresensi;
use App\Models\JenisPembayaran;
use App\Models\KalenderAkademik;
use App\Models\JadwalPendaftaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instansi extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'npsn',
        'nss',
        'logo',
        'email',
        'telepon',
        'website',
        'alamat',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'kelurahan_id',
        'kode_pos',
        'akreditasi',
        'nilai_akreditasi',
        'tahun_akreditasi',
        'status',
        'jenjang',
        'sk_pendirian',
        'tahun_berdiri',
    ];

    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function departemens(): HasMany
    {
        return $this->hasMany(Departemen::class);
    }

    public function tahunAnggarans(): HasMany
    {
        return $this->hasMany(TahunAnggaran::class);
    }

    public function tahunPelajarans(): HasMany
    {
        return $this->hasMany(TahunPelajaran::class);
    }

    public function tahunPendaftarans(): HasMany
    {
        return $this->hasMany(TahunPendaftaran::class);
    }

    public function tahunEkstrakurikulers(): HasMany
    {
        return $this->hasMany(TahunEkstrakurikuler::class);
    }

    public function kurikulums(): HasMany
    {
        return $this->hasMany(Kurikulum::class);
    }

    public function mataPelajarans(): HasMany
    {
        return $this->hasMany(MataPelajaran::class);
    }

    public function jurusans(): HasMany
    {
        return $this->hasMany(Jurusan::class);
    }

    public function kelas(): HasMany
    {
        return $this->hasMany(Kelas::class);
    }

    public function rombels(): HasMany
    {
        return $this->hasMany(Rombel::class);
    }

    public function siswas(): HasMany
    {
        return $this->hasMany(Siswa::class);
    }

    public function pegawais(): HasMany
    {
        return $this->hasMany(Pegawai::class);
    }

    public function jadwalPresensis(): HasMany
    {
        return $this->hasMany(JadwalPresensi::class);
    }

    public function jadwalPendaftarans(): HasMany
    {
        return $this->hasMany(JadwalPendaftaran::class);
    }

    public function jalurPendaftarans(): HasMany
    {
        return $this->hasMany(JalurPendaftaran::class);
    }

    public function poinPelanggarans(): HasMany
    {
        return $this->hasMany(PoinPelanggaran::class);
    }

    public function poinPrestasis(): HasMany
    {
        return $this->hasMany(PoinPrestasi::class);
    }

    public function ekstrakurikulers(): HasMany
    {
        return $this->hasMany(Ekstrakurikuler::class);
    }

    public function rakBukus(): HasMany
    {
        return $this->hasMany(RakBuku::class);
    }

    public function kategoriBukus(): HasMany
    {
        return $this->hasMany(KategoriBuku::class);
    }

    public function bukus(): HasMany
    {
        return $this->hasMany(Buku::class);
    }

    public function kategoriInventaris(): HasMany
    {
        return $this->hasMany(KategoriInventaris::class);
    }

    public function inventaris(): HasMany
    {
        return $this->hasMany(Inventaris::class);
    }

    public function ruangans(): HasMany
    {
        return $this->hasMany(Ruangan::class);
    }

    public function alumnis(): HasMany
    {
        return $this->hasMany(Alumni::class);
    }

    public function jenisSurats(): HasMany
    {
        return $this->hasMany(JenisSurat::class);
    }

    public function suratKeluars(): HasMany
    {
        return $this->hasMany(SuratKeluar::class);
    }

    public function suratMasuks(): HasMany
    {
        return $this->hasMany(SuratMasuk::class);
    }

    public function informasis(): HasMany
    {
        return $this->hasMany(Informasi::class);
    }

    public function rekenings(): HasMany
    {
        return $this->hasMany(Rekening::class);
    }

    public function akunKeuangans(): HasMany
    {
        return $this->hasMany(AkunKeuangan::class);
    }

    public function jenisPembayarans(): HasMany
    {
        return $this->hasMany(JenisPembayaran::class);
    }

    public function pemasukans(): HasMany
    {
        return $this->hasMany(Pemasukan::class);
    }

    public function pengeluarans(): HasMany
    {
        return $this->hasMany(Pengeluaran::class);
    }

    public function jamPelajarans(): HasMany
    {
        return $this->hasMany(JamPelajaran::class);
    }

    public function hariLiburs(): HasMany
    {
        return $this->hasMany(HariLibur::class);
    }

    public function kalenderAkademiks(): HasMany
    {
        return $this->hasMany(KalenderAkademik::class);
    }
}
