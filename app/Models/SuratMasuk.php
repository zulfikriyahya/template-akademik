<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratMasuk extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instansi_id',
        'nomor_surat',
        'pengirim',
        'perihal',
        'tanggal_surat',
        'tanggal_terima',
        'isi_ringkas',
        'file',
        'disposisi',
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
            'tanggal_terima' => 'date',
        ];
    }

    public function instansi(): BelongsTo
    {
        return $this->belongsTo(Instansi::class);
    }
}
