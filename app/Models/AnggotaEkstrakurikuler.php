<?php

namespace App\Models;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnggotaEkstrakurikuler extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ekstrakurikuler_id',
        'siswa_id',
        'tahun_ekstrakurikuler_id',
        'tanggal_bergabung',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'tanggal_bergabung' => 'date',
        ];
    }

    public function ekstrakurikuler(): BelongsTo
    {
        return $this->belongsTo(Ekstrakurikuler::class);
    }

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function tahunEkstrakurikuler(): BelongsTo
    {
        return $this->belongsTo(TahunEkstrakurikuler::class);
    }
}
