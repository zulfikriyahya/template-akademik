<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class NilaiRapor extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rapor_id',
        'mata_pelajaran_id',
        'nilai_pengetahuan',
        'nilai_keterampilan',
        'nilai_akhir',
        'predikat',
        'deskripsi',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'nilai_pengetahuan' => 'decimal:2',
            'nilai_keterampilan' => 'decimal:2',
            'nilai_akhir' => 'decimal:2',
        ];
    }

    public function rapor(): BelongsTo
    {
        return $this->belongsTo(Rapor::class);
    }

    public function mataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
