<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    //
    public function dokumenPendukungs()
{
    return $this->hasMany(DokumenPendukung::class, 'indikator_id', 'urutan_indikator');
}

    // Derivatif manual (jumlah dokumen total)
    public function getJumlahDokumenAttribute()
    {
        return $this->dokumenPendukungs()->count();
    }

}
