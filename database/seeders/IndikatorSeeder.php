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
            ['urutan_indikator' => 1,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah', 'aspek_id' => 1, 'deskripsi'=> 'Kebijakan internal terkait Arsitektur SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Pemerintah Daerah yaitu pada pasal 5 halaman 4 tentang Arsitektur SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan pasal tersebut panduan dalam pelaksanaan integrasi enam domain arsitektur SPBE yaitu terdiri atas Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu di Pemerintah Daerah. Pada Pasal 6 halaman 5 dijelaskan bahwa Arsitektur SPBE disusun untuk jangka waktu 5 (lima) tahun dan akan dilakukan reviu pada paruh waktu dan tahun terakhir pelaksanaan atau sewaktu-waktu sesuai dengan kebutuhan.'],
            ['urutan_indikator' => 2,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', 'aspek_id' => 1,  'deskripsi'=>'Kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare Nomor 09 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada pasal 7 halaman 5 tentang Peta Rencana SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan pasal tersebut telah mengatur seluruh muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK). Padal Pasal 8 menjelaskan bahwa Reviuw Peta Rencana SPBE dilakukan pada paruh waktu dan tahun terakhir pelaksanaan atau sewaktu-waktu sesuai dengan kebutuhan.'],
            ['urutan_indikator' => 3,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Manajemen Data', 'aspek_id' => 1,  'deskripsi'=>'Kebijakan internal terkait Manajemen Data Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada pasal 36 halaman 15 tentang Manajemen Data yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan pada pasal tersebut  bertujuan untuk menjamin terwujudnya Data yang akurat, mutakhir, terintegrasi dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi dan pengendalian pembangunan nasional. (2) Manajemen Data dilakukan melalui proses pengelolaan arsitektur Data, Data induk, Data referensi, basis Data dan kualitas Data.'],
            ['urutan_indikator' => 4,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE', 'aspek_id' => 1, 'deskripsi'=> 'Kebijakan internal terkait Pembangunan Aplikasi SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada pasal 19 halaman 9 tentang Aplikasi SPBE ayat 3 yang disampaikan pada PERDA-NO.-9-THN-2023.pdf. Berdasarkan ayat tersebut Pembangunan dan pengembangan Aplikasi SPBE mengutamakan penggunaan kode sumber terbuka yang dilaksanakan berdasarkan siklus pengembangan sistem yang meliputi tahap: a.perencanaan; b.analisis; c.pembangunan dan/atau pengembangan; d.penerapan; dan e.pemeliharaan.'],
            ['urutan_indikator' => 5,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Layanan Pusat Data', 'aspek_id' => 1, 'deskripsi'=> 'Kebijakan internal terkait Layanan Pusat Data Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 17 halaman 9 ayat 1 yang menjeleaskan tentang dalam menyelenggarakan Infrastruktur SPBE, Pemerintah Daerah melaksanakan fungsi layanan pusat data di Pemerintah Daerah.SPBE yang disampaikan pada PERDA-NO.-9-THN-2023.pdf.  Layanan Pusat Data yang dimaksud merupakan bagian dari Infrastruktur SPBE yang bertujuan meningkatkan efisiensi, keamanan dan kemudahan integrasi untuk memenuhi kebutuhan infrastruktur SPBE. Pada pasal 17 ayat 3 menjelaskan bahwa seluruh perangkat daerah harus memanfaatkan layanan pusat data di Pemerintah Daerah.'],
            ['urutan_indikator' => 6,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah', 'aspek_id' => 1,'deskripsi'=>  'Kebijakan terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah  tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian ketujuh tentang Infrastruktur SPBE pasal 15 halaman 8 ayat 1 yang menjelaskan tentang Perangkat Daerah harus menggunakan Jaringan Intra untuk menjaga keamanan pengiriman Data dan Informasi internal yang disampaikan pada file 6. PERDA-NO.-9-THN-2023.pdf.'],
            ['urutan_indikator' => 7,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah', 'aspek_id' => 1, 'deskripsi'=> 'Kebijakan terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 16 halaman 8 ayat 2 yang menjelaskan tentang Penggunaan Sistem Penghubung Layanan pemerintah sebagaimana dimaksud pada ayat (1), Pemerintah Daerah harus memenuhi kriteria sebagai berikut: a.Terhubung dan akses Jaringan Intra Pemerintah Daerah dengan jaringan pemerintah; b.Memenuhi standar interoperabilitas antar-Layanan SPBE yang ditetapkan oleh menteri yang menyelenggarakan urusan di bidang komunikasi dan informatika; c.Mendapatkan pertimbangan kelaikan operasi dari kementerian yang menyelenggarakan urusan pemerintahan di bidang komunikasi dan informatika; dan d.Mendapatkan pertimbangan kelaikan keamanan dari lembaga yang menyelenggarakan tugas pemerintahan di bidang keamanan siber. Yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.'],
            ['urutan_indikator' => 8,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi', 'aspek_id' => 1, 'deskripsi'=> 'Kebijakan terkait Manajemen Keamanan Informasi Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketiga tentang Manajemen Keamanan Informasi pasal 35 halaman 15 yang menjelaskan bahwa Manajemen keamanan Informasi sebagaimana dimaksud dalam Pasal 33 huruf b bertujuan menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko keamanan Informasi. yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.'],
            ['urutan_indikator' => 9,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Audit TIK', 'aspek_id' => 1, 'deskripsi'=> 'Kebijakan terkait Audit TIK tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada BAB V pasal 42 halaman 17 tentang Audit Teknologi Informasi dan Komunikasi yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Audit Teknologi Informasi dan Komunikasi terdiri atas: a.audit Infrastruktur SPBE; b.audit Aplikasi SPBE; dan c.audit Keamanan SPBE'],
            ['urutan_indikator' => 10,'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah', 'aspek_id' => 1, 'deskripsi'=> 'Kebijakan terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada BAB VI pasal 44 halaman 18 tentang Penyelenggara SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan pasal tersebut menjelaskan tentang fungsi penyelenggara SPBE untuk meningkatkan keterpaduan pelaksanaan Tata Kelola SPBE, Manajemen SPBE, dan Audit Teknologi Informasi dan Komunikasi, serta Pemantauan SPBE dan Evaluasi SPBE, dibentuk tim koordinasi sebagai penyelenggara SPBE di Pemerintah Daerah. Tim Koordinasi sebagaimana dimaksud terdiri atas : Ketua, Wakil Ketua, Sekretaris, Anggota yang terwakili oleh SKPD terkait.'],
            
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