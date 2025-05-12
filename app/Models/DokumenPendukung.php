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

    public function adminDinas()
    {
        return $this->belongsTo(AdminDinas::class, 'admin_dinas_id');
    }

    public function informasiIndikator()
    {
        return $this->belongsTo(InformasiIndikator::class, 'urutan_indikator', 'urutan_indikator');
    }


    protected $fillable = [
        'file_path',
        'admin_dinas_id',
        'urutan_indikator',
        'tahun' 
        // Tambahkan ini
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

// protected static function updateJumlahDokumen($dokumen)
// {
//     $urutan = $dokumen->urutan_indikator;
//     $tahun = now()->year; // atau ambil dari relasi jika ada
    
//     $jumlah = self::where('urutan_indikator', $urutan)->count();

//     \App\Models\InformasiIndikator::where('urutan_indikator', $urutan)
//         ->where('tahun', $tahun)
//         ->update(['jumlah_dokumen' => $jumlah]);
// }
    private static function updateInformasiIndikator($dokumen)
{
    $tahun = $dokumen->tahun;
    $urutanIndikator = $dokumen->urutan_indikator;
    $adminDinasId = $dokumen->admin_dinas_id;

    $jumlahDokumen = self::where('urutan_indikator', $urutanIndikator)
        ->whereYear('created_at', $tahun)
        ->count();

    InformasiIndikator::updateOrCreate(
        ['tahun' => $tahun, 'urutan_indikator' => $urutanIndikator, 'admin_dinas_id' => $adminDinasId],
        ['jumlah_dokumen' => $jumlahDokumen, 'is_updated' => false]
    );
}


}
