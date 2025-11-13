<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeluar extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instansi_id',
        'jenis_surat_id',
        'nomor_surat',
        'perihal',
        'tujuan',
        'tanggal_surat',
        'isi_surat',
        'penandatangan_id',
        'file',
        'pegawai_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'tanggal_surat' => 'date',
            'pegawai_id' => 'integer',
        ];
    }

    public function instansi(): BelongsTo
    {
        return $this->belongsTo(Instansi::class);
    }

    public function jenisSurat(): BelongsTo
    {
        return $this->belongsTo(JenisSurat::class);
    }

    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function penandatangan(): BelongsTo
    {
        return $this->belongsTo(Penandatangan::class);
    }
}
