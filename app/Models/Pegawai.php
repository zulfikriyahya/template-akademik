<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'instansi_id',
        'nama',
        'nik',
        'nip',
        'nuptk',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'status_perkawinan',
        'golongan_darah',
        'alamat',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'kelurahan_id',
        'telepon',
        'hp',
        'email',
        'foto',
        'status_kepegawaian',
        'jenis_ptk',
        'tanggal_masuk',
        'departemen_id',
        'jabatan_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'user_id' => 'integer',
            'tanggal_lahir' => 'date',
            'tanggal_masuk' => 'date',
            'departemen_id' => 'integer',
            'jabatan_id' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function instansi(): BelongsTo
    {
        return $this->belongsTo(Instansi::class);
    }

    public function departemen(): BelongsTo
    {
        return $this->belongsTo(Departemen::class);
    }

    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }

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

    public function tahunEkstrakurikulers(): HasMany
    {
        return $this->hasMany(TahunEkstrakurikuler::class);
    }

    public function rombels(): HasMany
    {
        return $this->hasMany(Rombel::class);
    }

    public function jadwalPelajarans(): HasMany
    {
        return $this->hasMany(JadwalPelajaran::class);
    }

    public function presensiPegawais(): HasMany
    {
        return $this->hasMany(PresensiPegawai::class);
    }

    public function jurnals(): HasMany
    {
        return $this->hasMany(Jurnal::class);
    }

    public function catatanPelanggarans(): HasMany
    {
        return $this->hasMany(CatatanPelanggaran::class);
    }

    public function konselings(): HasMany
    {
        return $this->hasMany(Konseling::class);
    }

    public function ekstrakurikulers(): HasMany
    {
        return $this->hasMany(Ekstrakurikuler::class);
    }

    public function peminjamen(): HasMany
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function suratKeluars(): HasMany
    {
        return $this->hasMany(SuratKeluar::class);
    }

    public function pengajuanIzins(): HasMany
    {
        return $this->hasMany(PengajuanIzin::class);
    }

    public function informasis(): HasMany
    {
        return $this->hasMany(Informasi::class);
    }
}
