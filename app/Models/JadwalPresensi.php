<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalPresensi extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instansi_id',
        'nama',
        'jenis',
        'hari',
        'jam_masuk',
        'batas_masuk',
        'jam_pulang',
        'batas_pulang',
        'toleransi_terlambat',
        'is_aktif',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_aktif' => 'boolean',
        ];
    }

    public function instansi(): BelongsTo
    {
        return $this->belongsTo(Instansi::class);
    }

    public function presensiPegawais(): HasMany
    {
        return $this->hasMany(PresensiPegawai::class);
    }

    public function presensiSiswas(): HasMany
    {
        return $this->hasMany(PresensiSiswa::class);
    }
}
