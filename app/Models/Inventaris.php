<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventaris extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instansi_id',
        'kategori_inventaris_id',
        'kode_inventaris',
        'nama',
        'merk',
        'tahun_pengadaan',
        'harga_perolehan',
        'kondisi',
        'lokasi',
        'keterangan',
        'foto',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'harga_perolehan' => 'decimal:2',
        ];
    }

    public function instansi(): BelongsTo
    {
        return $this->belongsTo(Instansi::class);
    }

    public function kategoriInventaris(): BelongsTo
    {
        return $this->belongsTo(KategoriInventaris::class);
    }
}
