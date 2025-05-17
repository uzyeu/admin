<?php

namespace Database\Seeders;

use App\Models\EvaluasiTahun;
use Illuminate\Database\Seeder;

class EvaluasiTahunSeeder extends Seeder
{
    public function run()
    {
        $tahunSekarang = now()->year;
        
        // Data evaluasi untuk 3 tahun terakhir
        $dataTahun = [
            [
                'tahun' => $tahunSekarang - 2, // 2 tahun lalu
                'indeks_akumulasi' => 2.62,
                'created_at' => now()->subYears(2),
                'updated_at' => now()->subYears(2)
            ],
            [
                'tahun' => $tahunSekarang - 1, // tahun lalu
                'indeks_akumulasi' => 2.62,
                'created_at' => now()->subYear(),
                'updated_at' => now()->subYear()
            ],
            [
                'tahun' => $tahunSekarang, // tahun ini
                'indeks_akumulasi' => 0, // akan diupdate nanti
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        // Gunakan insert untuk multi data sekaligus
        EvaluasiTahun::insert($dataTahun);

        $this->command->info('Data evaluasi tahun untuk 3 tahun terakhir telah ditambahkan:');
        $this->command->table(
            ['Tahun', 'Indeks'],
            EvaluasiTahun::all(['tahun', 'indeks_akumulasi'])->toArray()
        );
    }
}