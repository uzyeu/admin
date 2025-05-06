<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenPendukung extends Model
{
    //
    protected $fillable = [
        'dokumen_pendukung', // Tambahkan ini
        // tambahkan field lain yang kamu izinkan untuk diisi
    ];
        // App\Models\DokumenPendukung.php
        public function indikator()
        {
        return $this->belongsTo(\App\Models\Indikator::class, 'indikator_id', 'urutan_indikator');
        }

}
