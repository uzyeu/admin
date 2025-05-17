<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Indikator;
use Illuminate\Database\Seeder;

class DinasIndikatorSeeder extends Seeder
{
    public function run()
    {
        $dinasKominfo = User::where('nama_dinas', 'Dinas Kominfo')->first();
        $dinasSetdako = User::where('nama_dinas', 'Dinas Setdako')->first();
        $dinasInspektorat = User::where('nama_dinas', 'Dinas Inspektorat')->first();
        $dinasBKPSDM = User::where('nama_dinas', 'Dinas BKPSDM')->first();
        $dinasBappeda = User::where('nama_dinas', 'Dinas Bappeda')->first();
        $dinasBkd = User::where('nama_dinas', 'Dinas BKD')->first();
        $dinasPerpustakaan = User::where('nama_dinas', 'Dinas Perpustakaan')->first();
        $dinasDPMPTSP = User::where('nama_dinas', 'Dinas DPMPTSP')->first();
        $dinasDukcapil = User::where('nama_dinas', 'Dinas Dukcapil')->first();
        $dinasKesehatan = User::where('nama_dinas', 'Dinas Kesehatan')->first();
        $dinasSosial = User::where('nama_dinas', 'Dinas Sosial')->first();
 
        $dinasKominfo->indikators()->attach([1,2,3,4,5,6,7,8,9,10,11,12,13,15,16,17,18,19,22,23,27,28,29,30,31,42,43,47]);
        $dinasSetdako->indikators()->attach([11,12, 14,19,20,24,35,38,40,44]);
        $dinasInspektorat->indikators()->attach([21,29,30,31,39]);
        $dinasBKPSDM->indikators()->attach([25, 26,36,41]);
        $dinasBappeda->indikators()->attach([32,33,34,47]);
        $dinasBkd->indikators()->attach([33,34]);
        $dinasPerpustakaan->indikators()->attach([37]);
        $dinasDPMPTSP->indikators()->attach([45]);
        $dinasDukcapil->indikators()->attach([46]);
        $dinasKesehatan->indikators()->attach([47]);
        $dinasSosial->indikators()->attach([47]);
    }
}