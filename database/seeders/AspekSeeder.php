<?php

namespace Database\Seeders;

use App\Models\Aspek;
use Illuminate\Database\Seeder;

class AspekSeeder extends Seeder
{
    public function run()
    {
        $aspeks = [
            ['nama_aspek' => 'Kebijakan Internal Tata Kelola SPBE', 'urutan_aspek' => 1],
            ['nama_aspek' => 'Perencanaan Strategis SPBE', 'urutan_aspek' => 2],
            ['nama_aspek' => 'Teknologi Informasi dan Komunikasi', 'urutan_aspek' => 3],
            ['nama_aspek' => 'Penyelenggaraan SPBE', 'urutan_aspek' => 4],
            ['nama_aspek' => 'Penerapan Manajemen SPBE', 'urutan_aspek' => 5],
            ['nama_aspek' => 'Pelaksanaan Audit TIK', 'urutan_aspek' => 6],
            ['nama_aspek' => 'Layanan Administrasi Pemerintahan Berbasis Elektronik', 'urutan_aspek' => 7],
            ['nama_aspek' => 'Layanan Publik Berbasis Elektronik', 'urutan_aspek' => 8],
        ];

        foreach ($aspeks as $aspek) {
            Aspek::create($aspek);
        }
    }
}