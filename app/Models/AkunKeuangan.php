<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AkunKeuangan extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instansi_id',
        'kode_akun',
        'nama_akun',
        'jenis',
        'kategori',
        'parent_id',
        'akun_keuangan_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'akun_keuangan_id' => 'integer',
        ];
    }

    public function instansi(): BelongsTo
    {
        return $this->belongsTo(Instansi::class);
    }

    public function akunKeuangan(): BelongsTo
    {
        return $this->belongsTo(AkunKeuangan::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Parent::class);
    }

    public function akunKeuangans(): HasMany
    {
        return $this->hasMany(AkunKeuangan::class);
    }

    public function pemasukans(): HasMany
    {
        return $this->hasMany(Pemasukan::class);
    }

    public function pengeluarans(): HasMany
    {
        return $this->hasMany(Pengeluaran::class);
    }
}
