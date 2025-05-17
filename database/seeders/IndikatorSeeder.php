<?php

namespace Database\Seeders;

use App\Models\Indikator;
use Illuminate\Database\Seeder;

class IndikatorSeeder extends Seeder
{
    public function run()
    {
        $indikators = [
            // Aspek 1: Kebijakan SPBE
            ['urutan_indikator' => 1, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 2, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 3, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 4, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 5, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 6, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 7, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 8, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 9, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 10, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            
            // Aspek 2: Tata Kelola SPBE  ['urutan_indikator' => 7, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 1,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 11, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 2,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 12, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 2,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 13, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 2,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 14, 'nama_indikator' => 'Unit Pengelola SPBE', 'aspek_id' => 2],
            // Tambahkan indikator lainnya sesuai kebutuhan

            // Aspek 3
            ['urutan_indikator' => 15, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 3,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 16, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 3,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 17, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 3,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 18, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 3,  'deskripsi' => 'tesmi dlu'],
            
            // ASPEK 4
            ['urutan_indikator' => 19, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 4,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 20, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 4,  'deskripsi' => 'tesmi dlu'],
            
            // aspek 5
            ['urutan_indikator' => 21, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 5,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 22, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 5,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 23, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 5,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 24, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 5,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 25, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 5,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 26, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 5,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 27, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 5,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 28, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 5,  'deskripsi' => 'tesmi dlu'],

            // aspek 6
            ['urutan_indikator' => 29, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 6,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 30, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 6,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 31, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 6,  'deskripsi' => 'tesmi dlu'],

            // aspek 7
            ['urutan_indikator' => 32, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 33, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 34, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 35, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 36, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 37, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 38, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 39, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 40, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 41, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 7,  'deskripsi' => 'tesmi dlu'],
          
            // aspek 8
            ['urutan_indikator' => 42, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 8,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 43, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 8,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 44, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 8,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 45, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 8,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 46, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 8,  'deskripsi' => 'tesmi dlu'],
            ['urutan_indikator' => 47, 'nama_indikator' => 'Kebijakan Internal SPBE', 'aspek_id' => 8,  'deskripsi' => 'tesmi dlu'],
        ];

        foreach ($indikators as $indikator) {
            Indikator::create($indikator);
        }
    }
}