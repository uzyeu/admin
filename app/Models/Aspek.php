<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aspek extends Model
{
    //
     public function indikators(): HasMany
    {
        return $this->hasMany(Indikator::class);
    }

    /**
     * Relationship with informasi aspeks
     */
    public function informasiAspeks(): HasMany
    {
        return $this->hasMany(InformasiAspek::class);
    }
}
