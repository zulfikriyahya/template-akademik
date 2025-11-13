<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalPendaftaran extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instansi_id',
        'tahun_pendaftaran_id',
        'nama',
        'jalur_pendaftaran_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'kuota',
        'biaya_pendaftaran',
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
            'tanggal_mulai' => 'date',
            'tanggal_selesai' => 'date',
            'biaya_pendaftaran' => 'decimal:2',
            'is_aktif' => 'boolean',
        ];
    }

    public function instansi(): BelongsTo
    {
        return $this->belongsTo(Instansi::class);
    }

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }

    public function jalurPendaftaran(): BelongsTo
    {
        return $this->belongsTo(JalurPendaftaran::class);
    }
}
