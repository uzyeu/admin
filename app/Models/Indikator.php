<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Indikator extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected $fillable = [
        'urutan_indikator',
        'nama_indikator',
        'deskripsi',
        'aspek_id'
    ];

    // Relationship with dokumen pendukung
    public function dokumenPendukungs(): HasMany
    {
        return $this->hasMany(DokumenPendukung::class, 'indikator_id');
    }

    // Relationship with aspek
    public function aspek(): BelongsTo
    {
        return $this->belongsTo(Aspek::class);
    }

    // Relationship with dinas (users) through pivot
    public function dinas(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'dinas_indikators', 'indikator_id', 'user_id');
    }

    // Relationship with informasi indikators
    public function informasiIndikators(): HasMany
    {
        return $this->hasMany(InformasiIndikator::class, 'indikator_id');
    }

    // Derivatif manual (jumlah dokumen total)
    public function getJumlahDokumenAttribute()
    {
        return $this->dokumenPendukungs()->count();
    }
}