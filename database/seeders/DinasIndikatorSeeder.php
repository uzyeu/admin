<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Indikator;
use Illuminate\Database\Seeder;

class DinasIndikatorSeeder extends Seeder
{
    public function run()
    {
        $dinasKesehatan = User::where('nama_dinas', 'Dinas Kominfo')->first();
        $dinasPendidikan = User::where('nama_dinas', 'Dinas Setdako')->first();
        $dinasKesehatan = User::where('nama_dinas', 'Dinas Inspektorat')->first();
        $dinasPendidikan = User::where('nama_dinas', 'Dinas BKPSDM')->first();
        $dinasKesehatan = User::where('nama_dinas', 'Dinas Bappeda')->first();
        $dinasPendidikan = User::where('nama_dinas', 'Dinas BKD')->first();
        $dinasKesehatan = User::where('nama_dinas', 'Dinas Perpustakaan')->first();
        $dinasPendidikan = User::where('nama_dinas', 'Dinas DPMPTSP')->first();
        $dinasKesehatan = User::where('nama_dinas', 'Dinas Dukcapil')->first();
        $dinasPendidikan = User::where('nama_dinas', 'Dinas Kesehatan')->first();
        $dinasPendidikan = User::where('nama_dinas', 'Dinas Pendidikan')->first();
        
        // Dinas Kesehatan bertanggung jawab untuk indikator 1 dan 3
        $dinasKesehatan->indikators()->attach([1, 3]);
        
        // Dinas Pendidikan bertanggung jawab untuk indikator 2 dan 4
        $dinasPendidikan->indikators()->attach([2, 4]);
    }
}