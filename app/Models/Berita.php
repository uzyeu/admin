<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Berita extends Model
{
    //
    protected $fillable = ['judul','slug', 'gambar', 'isi_konten','author'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('judul')
            ->saveSlugsTo('slug');
    }
    

}
