<?php

namespace Database\Seeders;

use App\Models\EvaluasiTahun;
use Illuminate\Database\Seeder;

class EvaluasiTahunSeeder extends Seeder
{
    public function run()
    {
        $tahun = now()->year;
        
        EvaluasiTahun::create([
            'tahun' => $tahun,
            'indeks_akumulasi' => 0, // Akan diupdate setelah data lain dimasukkan
        ]);

        // Tambahkan tahun sebelumnya jika diperlukan
        EvaluasiTahun::create([
            'tahun' => $tahun - 1,
            'indeks_akumulasi' => 75.5,
        ]);
    }
}