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
    protected $primaryKey = 'urutan_indikator';
    public $incrementing = false; // Jika urutan_indikator bukan integer auto-increment
    protected $keyType = 'integer'; // Sesuaikan dengan tipe data urutan_indikator

    // app/Models/InformasiIndikator.php
    protected $fillable = [
        // ... field lainnya
        'is_updated'
    ];

    protected $casts = [
        'is_updated' => 'boolean'
    ];
        public function adminDinas()
    {
        return $this->belongsTo(AdminDinas::class, 'admin_dinas_id', 'id');
    }

    


}
