<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DinasIndikator extends Model
{
    //
    protected $table = 'dinas_indikators';

    public $incrementing = true;
    
    protected $fillable = [
        'user_id',
        'indikator_id',
    ];
}
