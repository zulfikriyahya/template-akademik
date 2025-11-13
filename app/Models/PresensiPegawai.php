<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PresensiPegawai extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pegawai_id',
        'jadwal_presensi_id',
        'tanggal',
        'jam_masuk',
        'jam_pulang',
        'status_masuk',
        'status_pulang',
        'foto_masuk',
        'foto_pulang',
        'lokasi_masuk',
        'lokasi_pulang',
        'keterangan',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'tanggal' => 'date',
        ];
    }

    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function jadwalPresensi(): BelongsTo
    {
        return $this->belongsTo(JadwalPresensi::class);
    }
}
