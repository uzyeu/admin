<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvaluasiTahun extends Model
{
    //
    protected $fillable = [
        'tahun',
        'indeks_akumulasi'
        // Tambahkan ini
        // tambahkan field lain yang kamu izinkan untuk diisi
    ];
}
