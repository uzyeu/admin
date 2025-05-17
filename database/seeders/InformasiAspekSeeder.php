<?php

namespace Database\Seeders;

use App\Models\InformasiAspek;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InformasiAspekSeeder extends Seeder
{
    public function run()
    {
        // Only include years with existing data
        $tahunEvaluasi = [2023, 2024];
        
        // Historical index values for each aspect with your updated names
        $indeksPerAspek = [
            1 => ['Kebijakan Internal Tata Kelola SPBE', [2023 => 2.91, 2024 => 3.36]], 
            2 => ['Perencanaan Strategis SPBE', [2023 => 2.10, 2024 => 2.41]],
            3 => ['Teknologi Informasi dan Komunikasi', [2023 => 2.37, 2024 => 2.75]],
            4 => ['Penyelenggaraan SPBE', [2023 => 2.43, 2024 => 2.80]],
            5 => ['Penerapan Manajemen SPBE', [2023 => 1.68, 2024 => 1.91]],
            6 => ['Pelaksanaan Audit TIK', [2023 => 1.57, 2024 => 1.73]],
            7 => ['Layanan Administrasi Pemerintahan Berbasis Elektronik', [2023 => 3.45, 2024 => 3.77]],
            8 => ['Layanan Publik Berbasis Elektronik', [2023 => 3.45, 2024 => 3.80]],
        ];

        foreach ($tahunEvaluasi as $tahun) {
            foreach ($indeksPerAspek as $aspekId => $data) {
                $namaAspek = $data[0];
                $nilaiHistoris = $data[1];
                
                // Only create records for years we have data
                if (array_key_exists($tahun, $nilaiHistoris)) {
                    InformasiAspek::updateOrCreate(
                        [
                            'aspek_id' => $aspekId,
                            'tahun' => $tahun
                        ],
                        [
                            'indeks' => $nilaiHistoris[$tahun],
                            'created_at' => Carbon::create($tahun, 6, 15),
                            'updated_at' => Carbon::create($tahun, 6, 15)
                        ]
                    );
                }
            }
        }

        $this->command->info('Data informasi aspek historis (2023-2024) berhasil dibuat!');
        $this->command->table(
            ['Aspek', 'Tahun', 'Indeks'],
            InformasiAspek::with('aspek')
                ->orderBy('tahun')
                ->orderBy('aspek_id')
                ->get()
                ->map(function ($item) {
                    return [
                        'Aspek' => $item->aspek->nama_aspek,
                        'Tahun' => $item->tahun,
                        'Indeks' => $item->indeks
                    ];
                })->toArray()
        );
    }
}