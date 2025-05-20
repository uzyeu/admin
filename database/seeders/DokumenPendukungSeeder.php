<?php

namespace Database\Seeders;

use App\Models\DokumenPendukung;
use App\Models\InformasiIndikator;
use App\Models\Indikator;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokumenPendukungSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DokumenPendukung::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $tahun = now()->year;
        $indikators = Indikator::all();

        foreach ($indikators as $indikator) {
            // 1. Dapatkan dinas yang bertanggung jawab
            $dinas = $indikator->dinas()->first() ?? User::where('role', 'admin_dinas')->inRandomOrder()->first();
            
            // 2. Pastikan informasi indikator ADA dengan INDEKS
            $infoIndikator = InformasiIndikator::updateOrCreate(
                [
                    'indikator_id' => $indikator->id,
                    'tahun' => $tahun
                ],
                [
                    'user_id' => $dinas->id,
                    'indeks' => $this->calculateIndeks($indikator->id),
                    'jumlah_dokumen' => 0,
                    'is_updated' => false
                ]
            );

            // 3. Buat 1-3 dokumen contoh
            $jumlahDokumen = rand(1, 3);
            for ($i = 1; $i <= $jumlahDokumen; $i++) {
                DokumenPendukung::create([
                    'user_id' => $dinas->id,
                    'indikator_id' => $indikator->id,
                    'tahun' => $tahun,
                    'nama_file' => 'Dokumen ' . $i . ' - ' . $indikator->nama_indikator,
                    'attachment' => 'storage/dokumen/indikator_' . $indikator->id . '_' . $i . '.pdf',
                    // 'jenis_dokumen' => 'pdf',
                    // 'ukuran' => rand(100, 5000), // 100KB - 5MB
                ]);
            }

            // 4. Update jumlah dokumen
            $infoIndikator->update([
                'jumlah_dokumen' => $jumlahDokumen
            ]);
        }
    }

    private function calculateIndeks($indikatorId)
    {
        // Logika penentuan indeks berdasarkan kelompok indikator
        if ($indikatorId <= 10) return rand(80, 95);   // Kebijakan
        if ($indikatorId <= 20) return rand(75, 85);   // Tata Kelola
        if ($indikatorId <= 30) return rand(70, 80);   // Layanan
        return rand(65, 75);                           // Teknis
    }
}