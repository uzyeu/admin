<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminDinas extends Model
{
    //
    protected $fillable = [
        'email',
        'nama_dinas',
        'kata_sandi', // Tambahkan ini
        // tambahkan field lain yang kamu izinkan untuk diisi
    ];
        public function indikators()
    {
        return $this->hasMany(Indikator::class, 'admin_dinas_id');
    }
}
