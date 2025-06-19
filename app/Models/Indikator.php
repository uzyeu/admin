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
    public function users()
    {
        return $this->belongsToMany(User::class, 'dinas_indikators');
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
    public function dinasPenanggungJawab()
{
    return $this->belongsToMany(User::class, 'informasi_indikators', 'indikator_id', 'user_id')
                ->withPivot('tahun', 'indeks')
                ->withTimestamps();
}

    // Relationship with informasi indikators
    public function informasiIndikators(): HasMany
    {
        return $this->hasMany(InformasiIndikator::class, 'indikator_id');
    }
    public function getPrioritasPerbaikanAttribute()
    {
        // Ambil data indeks tahun 2024
        $data2024 = $this->informasiIndikators()
            ->where('tahun', 2024)
            ->first();

        // Ambil data indeks tahun 2023
        $data2023 = $this->informasiIndikators()
            ->where('tahun', 2023)
            ->first();

        if (!$data2024 || !$data2023) {
            return 'Data Kurang';
        }

        $indeks2024 = $data2024->indeks;
        $indeks2023 = $data2023->indeks;

        // Aturan sistem pakar sederhana
        // Aturan sistem pakar berbasis skala 1–5
        if ($indeks2024 < $indeks2023) {
            return 'Tinggi';
        } elseif ($indeks2024 > $indeks2023) {
            return 'Sedang';
        } elseif ($indeks2024 == $indeks2023) {
            return $indeks2024 == 5 ? 'Rendah' : 'Cukup Tinggi';
        }

        return 'Tidak Diketahui';
    }

    // public function getPenjelasanSingkatAttribute()
    // {
    //     return match ($this->prioritas_perbaikan) {
    //         'Tinggi' => 'Terjadi penurunan indeks dari tahun sebelumnya.',
    //         'Cukup Tinggi' => 'Indeks tetap, tapi belum maksimal.',
    //         'Sedang' => 'Indeks meningkat dari tahun sebelumnya.',
    //         'Rendah' => 'Nilai stabil dan sudah maksimal.',
    //         'Data Kurang', 'Tidak Diketahui' => 'Belum cukup data untuk dianalisis.',
    //         default => '-',
    //     };
    // }


    // Derivatif manual (jumlah dokumen total)
    public function getJumlahDokumenAttribute()
    {
        return $this->dokumenPendukungs()->count();
    }

    public function getIndeks2023Attribute()
    {
        return $this->informasiIndikators()->where('tahun', 2023)->first()?->indeks ?? null;
    }

    public function getIndeks2024Attribute()
    {
        return $this->informasiIndikators()->where('tahun', 2024)->first()?->indeks ?? null;
    }
    public function getStatusTrenAttribute()
{
    $indeks2023 = $this->indeks_2023;
    $indeks2024 = $this->indeks_2024;

    if (is_null($indeks2023) || is_null($indeks2024)) {
        return 'Tidak Diketahui';
    }

    return match (true) {
        $indeks2024 > $indeks2023 => 'Naik',
        $indeks2024 < $indeks2023 => 'Menurun',
        default => 'Tetap',
    };
}

public function getStatusDokumenAttribute()
{
    $jumlah2023 = $this->dokumenPendukungs()->where('tahun', 2023)->count();
    $jumlah2024 = $this->dokumenPendukungs()->where('tahun', 2024)->count();

    return match (true) {
        $jumlah2024 > $jumlah2023 => 'Naik',
        $jumlah2024 < $jumlah2023 => 'Turun',
        default => 'Stabil',
    };
}

public function getKesimpulanPendampinganAttribute()
{
    $prioritas = $this->prioritas_perbaikan;
    $trenDokumen = $this->status_dokumen;

    return match (true) {
        $prioritas === 'Tinggi' && $trenDokumen === 'Turun' => 'Perlu Pendampingan',
        $prioritas === 'Tinggi' && $trenDokumen === 'Naik' => 'Evaluasi Strategi',
        $prioritas === 'Tinggi' && $trenDokumen === 'Stabil' => 'Evaluasi Strategi',
        $prioritas === 'Cukup Tinggi' && $trenDokumen === 'Turun' => 'Pendampingan Terbatas',
        $prioritas === 'Cukup Tinggi' => 'Perlu Monitoring',
        default => 'Tidak Perlu Pendampingan',
    };
}

}