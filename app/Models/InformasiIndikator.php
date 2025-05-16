<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class InformasiIndikator extends Model
{
    protected $fillable = [
        'indeks',
        'tahun',
        'indikator_id',
        'user_id',
        'jumlah_dokumen',
        'is_updated'
    ];

    protected $casts = [
        'is_updated' => 'boolean'
    ];

    public function indikator(): BelongsTo
    {
        return $this->belongsTo(Indikator::class, 'indikator_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tahun(): BelongsTo
    {
        return $this->belongsTo(EvaluasiTahun::class, 'tahun', 'tahun');
    }

    public function dokumenPendukungs(): HasMany
    {
        return $this->hasMany(DokumenPendukung::class, 'indikator_id', 'indikator_id')
            ->where('tahun', $this->tahun);
    }
}