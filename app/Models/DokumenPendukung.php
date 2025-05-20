<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DokumenPendukung extends Model
{
    protected $fillable = [
        'attachment',
        'user_id',
        'indikator_id',
        'tahun',
        'nama_file',
        // 'ukuran',
        // 'jenis_dokumen'
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

    protected static function booted()
    {
        static::saved(function ($dokumen) {
            self::updateInformasiIndikator($dokumen);
        });

        static::deleted(function ($dokumen) {
            self::updateInformasiIndikator($dokumen);
        });
    }

    private static function updateInformasiIndikator($dokumen)
    {
        $tahun = $dokumen->tahun;
        $indikatorId = $dokumen->indikator_id;
        $userId = $dokumen->user_id;

        $jumlahDokumen = self::where('indikator_id', $indikatorId)
            ->where('tahun', $tahun)
            ->count();

        InformasiIndikator::updateOrCreate(
            [
                'tahun' => $tahun,
                'indikator_id' => $indikatorId,
                'user_id' => $userId
            ],
            [
                'jumlah_dokumen' => $jumlahDokumen,
                'is_updated' => false
            ]
        );
    }
}