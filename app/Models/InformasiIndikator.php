<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiIndikator extends Model
{
    //
    protected $fillable = ['tahun', 'urutan_indikator','jumlah_dokumen', 'is_updated'];

    public function dokumenPendukung()
    {
        return $this->hasMany(DokumenPendukung::class, 'urutan_indikator', 'urutan_indikator');
    }
    
    public function adminDinas()
    {
        return $this->belongsTo(AdminDinas::class, 'admin_dinas_id', 'id');
    }

    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'urutan_indikator', 'urutan_indikator');
    }
}
