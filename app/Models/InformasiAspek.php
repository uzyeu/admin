<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class InformasiAspek extends Model
{
    //
        public function aspek(): BelongsTo
    {
        return $this->belongsTo(Aspek::class);
    }

    // public function tahun(): BelongsTo
    // {
    //     return $this->belongsTo(EvaluasiTahun::class, 'tahun', 'tahun');
    // }
        public function evaluasiTahun(): BelongsTo
    {
        return $this->belongsTo(EvaluasiTahun::class, 'tahun', 'tahun');
    }
    
}
