<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penilaian extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kompetensi_dasar_id',
        'siswa_id',
        'rombel_id',
        'jenis_penilaian',
        'nilai',
        'tanggal',
        'keterangan',
        'semester_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'nilai' => 'decimal:2',
            'tanggal' => 'date',
            'semester_id' => 'integer',
        ];
    }

    public function kompetensiDasar(): BelongsTo
    {
        return $this->belongsTo(KompetensiDasar::class);
    }

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function rombel(): BelongsTo
    {
        return $this->belongsTo(Rombel::class);
    }

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }
}
