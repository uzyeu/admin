<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenPendukung extends Model
{
    //
    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'urutan_indikator', 'urutan_indikator'); // sesuaikan kolom foreign key dan primary key
    }

    protected $fillable = [
        'dokumen_pendukung', // Tambahkan ini
        // tambahkan field lain yang kamu izinkan untuk diisi
    ];
        // App\Models\DokumenPendukung.php
        // public function indikator()
        // {
        // return $this->belongsTo(\App\Models\Indikator::class, 'indikator_id', 'urutan_indikator');
        // }

    protected static function booted()
{
    static::saved(function ($dokumen) {
        self::updateJumlahDokumen($dokumen);
    });

    static::deleted(function ($dokumen) {
        self::updateJumlahDokumen($dokumen);
    });
}

protected static function updateJumlahDokumen($dokumen)
{
    $urutan = $dokumen->urutan_indikator;
    $tahun = now()->year; // atau ambil dari relasi jika ada
    
    $jumlah = self::where('urutan_indikator', $urutan)->count();

    \App\Models\InformasiIndikator::where('urutan_indikator', $urutan)
        ->where('tahun', $tahun)
        ->update(['jumlah_dokumen' => $jumlah]);
}

}
