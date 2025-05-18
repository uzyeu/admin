<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $fillable = ['external_id', 'judul', 'gambar', 'isi_konten','author'];
    

}
