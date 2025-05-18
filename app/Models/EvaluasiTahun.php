<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EvaluasiTahun extends Model
{
    //
    protected $primaryKey = 'tahun';
    public $incrementing = false;
    protected $fillable = [
        'tahun',
        'indeks_akumulasi'
        // Tambahkan ini
        // tambahkan field lain yang kamu izinkan untuk diisi
    ];
        public function informasiIndikators(): HasMany
    {
        return $this->hasMany(InformasiIndikator::class, 'tahun', 'tahun');
    }


    /**
     * Relationship with informasi aspeks
     */
    public function informasiAspeks(): HasMany
    {
        return $this->hasMany(InformasiAspek::class, 'tahun', 'tahun');
    }

    /**
     * Relationship with dokumen pendukung
     */
    public function dokumenPendukungs(): HasMany
    {
        return $this->hasMany(DokumenPendukung::class, 'tahun', 'tahun');
    }
}
