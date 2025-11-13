<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'user_id',
        'instansi_id',
        'nik',
        'nisn',
        'nipd',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'anak_ke',
        'jumlah_saudara',
        'tinggi_badan',
        'berat_badan',
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
        'status_tinggal',
        'transportasi',
        'penerima_kps',
        'no_kps',
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
            'penerima_kps' => 'boolean',
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

    public function orangTuas(): HasMany
    {
        return $this->hasMany(OrangTua::class);
    }

    public function presensiSiswas(): HasMany
    {
        return $this->hasMany(PresensiSiswa::class);
    }

    public function kehadirans(): HasMany
    {
        return $this->hasMany(Kehadiran::class);
    }

    public function penilaians(): HasMany
    {
        return $this->hasMany(Penilaian::class);
    }

    public function rapors(): HasMany
    {
        return $this->hasMany(Rapor::class);
    }

    public function catatanPelanggarans(): HasMany
    {
        return $this->hasMany(CatatanPelanggaran::class);
    }

    public function catatanPrestasis(): HasMany
    {
        return $this->hasMany(CatatanPrestasi::class);
    }

    public function konselings(): HasMany
    {
        return $this->hasMany(Konseling::class);
    }

    public function anggotaEkstrakurikulers(): HasMany
    {
        return $this->hasMany(AnggotaEkstrakurikuler::class);
    }

    public function peminjamen(): HasMany
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function alumnis(): HasMany
    {
        return $this->hasMany(Alumni::class);
    }

    public function pengajuanIzins(): HasMany
    {
        return $this->hasMany(PengajuanIzin::class);
    }

    public function pembayarans(): HasMany
    {
        return $this->hasMany(Pembayaran::class);
    }
}
