<?php

namespace App\Models;

use App\Models\KategoriBuku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instansi_id',
        'kategori_buku_id',
        'rak_buku_id',
        'kode_buku',
        'judul',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'isbn',
        'jumlah',
        'stok_tersedia',
        'lokasi_rak',
        'cover',
    ];

    public function instansi(): BelongsTo
    {
        return $this->belongsTo(Instansi::class);
    }

    public function kategoriBuku(): BelongsTo
    {
        return $this->belongsTo(KategoriBuku::class);
    }

    public function rakBuku(): BelongsTo
    {
        return $this->belongsTo(RakBuku::class);
    }

    public function peminjamen(): HasMany
    {
        return $this->hasMany(Peminjaman::class);
    }
}
