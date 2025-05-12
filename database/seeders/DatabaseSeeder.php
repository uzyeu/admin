<?php

namespace Database\Seeders;
// kfjsjdfjd
use App\Models\AdminDinas;
use App\Models\DokumenPendukung;
use App\Models\EvaluasiTahun;
use App\Models\Indikator;
use App\Models\InformasiIndikator;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Muhammad Faruq Al-Fauzi S.',
            'email' => 'muhfaruqalfauzi@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('uzyetskii'),
            'remember_token' => Str::random(10)
        ]);

        AdminDinas::insert([[
            'email' => 'setdako@parepare.ac.id',
            'nama_dinas' => 'SETDAKO',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'email' => 'diskominfo@parepare.ac.id',
            'nama_dinas' => 'DISKOMINFO',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'email' => 'inspektorat@parepare.ac.id',
            'nama_dinas' => 'INSPEKTORAT',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'email' => 'bkpsdm@parepare.ac.id',
            'nama_dinas' => 'BKPSDM',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'email' => 'bappeda@parepare.ac.id',
            'nama_dinas' => 'BAPPEDA',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'email' => 'bkd@parepare.ac.id',
            'nama_dinas' => 'BKD',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'email' => 'dinasperpustakaan@parepare.ac.id',
            'nama_dinas' => 'DINAS PERPUSTAKAAN',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'email' => 'dpmptsp@parepare.ac.id',
            'nama_dinas' => 'DPMPTSP',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'email' => 'diskudcapil@parepare.ac.id',
            'nama_dinas' => 'DISDUKCAPIL',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'email' => 'dinaskesehatan@parepare.ac.id',
            'nama_dinas' => 'DINAS KESEHATAN',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'email' => 'dinassosial@parepare.ac.id',
            'nama_dinas' => 'DINAS SOSIAL',
            'kata_sandi' => Hash::make('setdako'),
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);

        EvaluasiTahun::insert([[
            'tahun' => 2024,
            'indeks_akumulasi' => 2.68,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'tahun' => 2023,
            'indeks_akumulasi' => 2.62,
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);

        Indikator::insert([
            [
                'urutan_indikator' => 1,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah',
                'deskripsi' => 'Kebijakan internal terkait Arsitektur SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik di lingkungan Pemerintah Daerah, yaitu pada pasal 5 halaman 4 tentang Arsitektur SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.
        
        Berdasarkan pasal tersebut, panduan dalam pelaksanaan integrasi enam domain Arsitektur SPBE terdiri atas Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu di Pemerintah Daerah.
        
        Pada Pasal 6 halaman 5 dijelaskan bahwa Arsitektur SPBE disusun untuk jangka waktu 5 (lima) tahun dan akan dilakukan reviu pada paruh waktu dan tahun terakhir pelaksanaan atau sewaktu-waktu sesuai dengan kebutuhan.',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 2,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah',
                'deskripsi' => 'Kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare Nomor 09 Tahun 2023 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik di lingkungan Kota Parepare yaitu pada pasal 7 halaman 5 tentang Peta Rencana SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.
        
        Berdasarkan pasal tersebut telah mengatur seluruh muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK). Pada Pasal 8 dijelaskan bahwa Reviu Peta Rencana SPBE dilakukan pada paruh waktu dan tahun terakhir pelaksanaan atau sewaktu-waktu sesuai dengan kebutuhan.',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 3,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Manajemen Data',
                'deskripsi' => 'Kebijakan internal terkait Manajemen Data Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik di lingkungan Kota Parepare yaitu pada pasal 36 halaman 15 tentang Manajemen Data yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.
        
        Berdasarkan pasal tersebut, kebijakan ini bertujuan untuk menjamin terwujudnya Data yang akurat, mutakhir, terintegrasi dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional. Manajemen Data dilakukan melalui proses pengelolaan arsitektur data, data induk, data referensi, basis data, dan kualitas data.',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 4,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE',
                'deskripsi' => 'Kebijakan internal terkait Pembangunan Aplikasi SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik di lingkungan Kota Parepare yaitu pada pasal 19 halaman 9 tentang Aplikasi SPBE ayat 3 yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.
        
        Berdasarkan ayat tersebut, pembangunan dan pengembangan Aplikasi SPBE mengutamakan penggunaan kode sumber terbuka yang dilaksanakan berdasarkan siklus pengembangan sistem yang meliputi tahap:
        a. perencanaan;
        b. analisis;
        c. pembangunan dan/atau pengembangan;
        d. penerapan; dan
        e. pemeliharaan.',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 5,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Layanan Pusat Data',
                'deskripsi' => 'Kebijakan internal terkait Layanan Pusat Data Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 17 halaman 9 ayat 1.
        
        Ayat tersebut menjelaskan bahwa dalam menyelenggarakan Infrastruktur SPBE, Pemerintah Daerah melaksanakan fungsi layanan pusat data. Layanan Pusat Data ini bertujuan meningkatkan efisiensi, keamanan, dan kemudahan integrasi untuk memenuhi kebutuhan infrastruktur SPBE. Pasal 17 ayat 3 menyatakan bahwa seluruh perangkat daerah harus memanfaatkan layanan pusat data di Pemerintah Daerah.',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 6,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah',
                'deskripsi' => 'Kebijakan terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 15 halaman 8 ayat 1 yang menjelaskan bahwa Perangkat Daerah harus menggunakan Jaringan Intra untuk menjaga keamanan pengiriman Data dan Informasi internal yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'urutan_indikator' => 7,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah',
                'deskripsi' => 'Kebijakan terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 16 halaman 8 ayat 2.
        
        Ayat ini menjelaskan bahwa penggunaan Sistem Penghubung Layanan pemerintah harus memenuhi kriteria berikut:
        a. Terhubung dan akses Jaringan Intra Pemerintah Daerah dengan jaringan pemerintah;
        b. Memenuhi standar interoperabilitas antar-Layanan SPBE;
        c. Mendapatkan pertimbangan kelaikan operasi dari Kementerian Komunikasi dan Informatika;
        d. Mendapatkan pertimbangan kelaikan keamanan dari lembaga yang menyelenggarakan tugas keamanan siber.',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 8,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi',
                'deskripsi' => 'Kebijakan terkait Manajemen Keamanan Informasi tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketiga tentang Manajemen Keamanan Informasi pasal 35 halaman 15.
        
        Pasal ini menjelaskan bahwa manajemen keamanan informasi bertujuan menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko keamanan informasi. Disampaikan pada file PERDA-NO.-9-THN-2023.pdf.',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 9,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Audit TIK',
                'deskripsi' => 'Kebijakan terkait Audit TIK tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada BAB V pasal 42 halaman 17 tentang Audit Teknologi Informasi dan Komunikasi.
        
        Audit TIK meliputi:
        a. Audit Infrastruktur SPBE;
        b. Audit Aplikasi SPBE;
        c. Audit Keamanan SPBE.',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 10,
                'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah ',
                'deskripsi' => 'Kebijakan terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah 
        Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 
        Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada BAB VI 
        pasal 44 halaman 18 tentang Penyelenggara SPBE yang 
        disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan 
        pasal tersebut menjelaskan tentang fungsi penyelenggara SPBE 
        untuk meningkatkan keterpaduan pelaksanaan Tata Kelola SPBE, 
        Manajemen SPBE, dan Audit Teknologi Informasi dan Komunikasi, 
        serta Pemantauan SPBE dan Evaluasi SPBE, dibentuk tim 
        koordinasi sebagai penyelenggara SPBE di Pemerintah Daerah. 
        Tim Koordinasi sebagaimana dimaksud terdiri atas : Ketua, Wakil 
        Ketua, Sekretaris, Anggota yang terwakili oleh SKPD terkait.
        ',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
         
            [
                'urutan_indikator' => 11,
                'nama_indikator' => 'Tingkat Kematangan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah',
                'deskripsi' => 'Dalam Tahap Perencanaan dan Pengenggaran untuk penyusunan dokumen arsitektur SPBE',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 12,
                'nama_indikator' => 'Tingkat Kematangan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah',
                'deskripsi' => 'Dalam Tahap Perencanaan dan Pengenggaran untuk penyusunan dokumen pete rencana SPBE',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 13,
                'nama_indikator' => 'Tingkat Kematangan Rencana dan Anggaran SPBE',
                'deskripsi' => 'Rencana dan Anggaran SPBE telah dialokasikan untuk pengggaran tahun 2025',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 14,
                'nama_indikator' => 'Tingkat Kematangan Inovasi Proses Bisnis SPBE Dokumen model Peta Proses Bisnis Pemerintah Kota Parepare ',
                'deskripsi' => 'Dokumen model Peta Proses Bisnis Pemerintah Kota Parepare 
        yang telah ditetapkan dalam SK Walikota Parepare Nomor Tahun 
        2021 tentang Peta Proses Bisnis Pemerintah Daerah Kota 
        Parepare Tahun 2018-2023 yang disampaikan dalam data dukung 
        14. Proses Bisnis Pemerintah Kota Parepare 2018-2023.pdf. Peta 
        proses bisnis ini bertujuan agar seluruh Perangkat Daerah Kota 
        Parepare:
        1. Mampu melaksanakan tugas dan fungsi secara efektif dan 
        efisien;
        2. Mudah mengomunikasikan baik kepada pihak internal maupun 
        eksternal mengenai proses bisnis yang dilakukan untuk mencapai 
        visi, misi dan tujuan; dan 
        3. Memiliki aset pengetahuan yang mengintegrasikan dan 
        mendokumenasikan secara rinci mengenai proses bisnis yang 
        dilakukan untuk mencapai visi, misi dan tujuan. Aset pengetahuan 
        ini menjadi dasar pengambilan keputusan stratgis terkait 
        pengembangan organisasi dan sumber daya manusia, serta 
        penilaian kinerja. Dalam SK Walikota tersebut terlampir pula Proses Bisnis yang 
        disusun menggunakan aplikasi Bizagi Modeler sehingga 
        memudahkan untuk melakukan penjabaran lebih rinci dan 
        disampaikan pada data dukung 14. Inovasi Proses Bisnis.rar.
        Terlampir :
        1. Proses Bisnis Kota Parepare
        2. Proses Bisnis 33 SKPD
        3. SK Probis Kota Parepare 2018-2023',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'urutan_indikator' => 15,
                'nama_indikator' => 'Tingkat Kematangan Pembangunan Aplikasi SPBE',
                'deskripsi' => 'Proses Pembangunan Aplikasi SPBE telah Tertuang dalam kerangka acuan kerja pembuatan aplikasi Smart City dan saat ini acuan perencanaan dan pengembangan mengacu pada Master Plan Smart City yang sementara disususn',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'urutan_indikator' => 16,
                'nama_indikator' => 'Tingkat Kematangan Layanan Pusat Data',
                'deskripsi' => 'Layanan Pusat Data telah digunakan untuk pengelolaan dan Manajemen data Aplikasi Pemerintahan',
                'admin_dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DokumenPendukung::insert([
            [
                'file_path' => 'lslslslsl.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 1,
                'tahun' => 2024,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'file_path' => 'yayay.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 2,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ]
            ,
            [
                'file_path' => 'hahahaha.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 3,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'file_path' => 'hjkfdbdjbja.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 4,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'file_path' => 'kddksdksk.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 5,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 6,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 6,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 10,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 8,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 7,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 9,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 11,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 12,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 13,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 14,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 15,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'file_path' => 'kuudbudbufu.pdf',
                'admin_dinas_id' => 1,
                'urutan_indikator' => 8,
                'tahun' => 2023,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        InformasiIndikator::insert([
        [
            'indeks' => 3.5,
            'tahun' => 2024,
            'urutan_indikator' => 1,
            'admin_dinas_id' => 1,
            // 'jumlah_dokumen' => 0,
            'is_updated' => true, // Sudah selesai di-update
            'created_at' => now(),
            'updated_at' => now()
        ],
        [    
            'indeks' => 2.8,
            'tahun' => 2024,
            'urutan_indikator' => 2,
            'admin_dinas_id' => 1,
            // 'jumlah_dokumen' => 0,
            'is_updated' => false, // Belum selesai di-update
            'created_at' => now(),
            'updated_at' => now()],
        [            
            'indeks' => 4.0,
            'tahun' => 2023,
            'urutan_indikator' => 1,
            'admin_dinas_id' => 2,
            // 'jumlah_dokumen' => 0,
            'is_updated' => true,
            'created_at' => now(),
            'updated_at' => now()]
        ]);

        // Indikator::insert([
        //     [
        // //         'urutan_indikator' => 1,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah',
        //         'deskripsi' => 'Kebijakan internal terkait Arsitektur SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik di lingkungan Pemerintah Daerah, yaitu pada pasal 5 halaman 4 tentang Arsitektur SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.
        
        // Berdasarkan pasal tersebut, panduan dalam pelaksanaan integrasi enam domain Arsitektur SPBE terdiri atas Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu di Pemerintah Daerah.
        
        // Pada Pasal 6 halaman 5 dijelaskan bahwa Arsitektur SPBE disusun untuk jangka waktu 5 (lima) tahun dan akan dilakukan reviu pada paruh waktu dan tahun terakhir pelaksanaan atau sewaktu-waktu sesuai dengan kebutuhan.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 2,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah',
        //         'deskripsi' => 'Kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare Nomor 09 Tahun 2023 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik di lingkungan Kota Parepare yaitu pada pasal 7 halaman 5 tentang Peta Rencana SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.
        
        // Berdasarkan pasal tersebut telah mengatur seluruh muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK). Pada Pasal 8 dijelaskan bahwa Reviu Peta Rencana SPBE dilakukan pada paruh waktu dan tahun terakhir pelaksanaan atau sewaktu-waktu sesuai dengan kebutuhan.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 3,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Manajemen Data',
        //         'deskripsi' => 'Kebijakan internal terkait Manajemen Data Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik di lingkungan Kota Parepare yaitu pada pasal 36 halaman 15 tentang Manajemen Data yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.
        
        // Berdasarkan pasal tersebut, kebijakan ini bertujuan untuk menjamin terwujudnya Data yang akurat, mutakhir, terintegrasi dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional. Manajemen Data dilakukan melalui proses pengelolaan arsitektur data, data induk, data referensi, basis data, dan kualitas data.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 4,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE',
        //         'deskripsi' => 'Kebijakan internal terkait Pembangunan Aplikasi SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik di lingkungan Kota Parepare yaitu pada pasal 19 halaman 9 tentang Aplikasi SPBE ayat 3 yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.
        
        // Berdasarkan ayat tersebut, pembangunan dan pengembangan Aplikasi SPBE mengutamakan penggunaan kode sumber terbuka yang dilaksanakan berdasarkan siklus pengembangan sistem yang meliputi tahap:
        // a. perencanaan;
        // b. analisis;
        // c. pembangunan dan/atau pengembangan;
        // d. penerapan; dan
        // e. pemeliharaan.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 5,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Layanan Pusat Data',
        //         'deskripsi' => 'Kebijakan internal terkait Layanan Pusat Data Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 17 halaman 9 ayat 1.
        
        // Ayat tersebut menjelaskan bahwa dalam menyelenggarakan Infrastruktur SPBE, Pemerintah Daerah melaksanakan fungsi layanan pusat data. Layanan Pusat Data ini bertujuan meningkatkan efisiensi, keamanan, dan kemudahan integrasi untuk memenuhi kebutuhan infrastruktur SPBE. Pasal 17 ayat 3 menyatakan bahwa seluruh perangkat daerah harus memanfaatkan layanan pusat data di Pemerintah Daerah.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 6,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah',
        //         'deskripsi' => 'Kebijakan terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 15 halaman 8 ayat 1 yang menjelaskan bahwa Perangkat Daerah harus menggunakan Jaringan Intra untuk menjaga keamanan pengiriman Data dan Informasi internal yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 7,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah',
        //         'deskripsi' => 'Kebijakan terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 16 halaman 8 ayat 2.
        
        // Ayat ini menjelaskan bahwa penggunaan Sistem Penghubung Layanan pemerintah harus memenuhi kriteria berikut:
        // a. Terhubung dan akses Jaringan Intra Pemerintah Daerah dengan jaringan pemerintah;
        // b. Memenuhi standar interoperabilitas antar-Layanan SPBE;
        // c. Mendapatkan pertimbangan kelaikan operasi dari Kementerian Komunikasi dan Informatika;
        // d. Mendapatkan pertimbangan kelaikan keamanan dari lembaga yang menyelenggarakan tugas keamanan siber.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 8,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi',
        //         'deskripsi' => 'Kebijakan terkait Manajemen Keamanan Informasi tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketiga tentang Manajemen Keamanan Informasi pasal 35 halaman 15.
        
        // Pasal ini menjelaskan bahwa manajemen keamanan informasi bertujuan menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko keamanan informasi. Disampaikan pada file PERDA-NO.-9-THN-2023.pdf.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 9,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Audit TIK',
        //         'deskripsi' => 'Kebijakan terkait Audit TIK tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada BAB V pasal 42 halaman 17 tentang Audit Teknologi Informasi dan Komunikasi.
        
        // Audit TIK meliputi:
        // a. Audit Infrastruktur SPBE;
        // b. Audit Aplikasi SPBE;
        // c. Audit Keamanan SPBE.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 10,
        //         'nama_indikator' => 'Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah ',
        //         'deskripsi' => 'Kebijakan terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah 
        // Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 
        // Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada BAB VI 
        // pasal 44 halaman 18 tentang Penyelenggara SPBE yang 
        // disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan 
        // pasal tersebut menjelaskan tentang fungsi penyelenggara SPBE 
        // untuk meningkatkan keterpaduan pelaksanaan Tata Kelola SPBE, 
        // Manajemen SPBE, dan Audit Teknologi Informasi dan Komunikasi, 
        // serta Pemantauan SPBE dan Evaluasi SPBE, dibentuk tim 
        // koordinasi sebagai penyelenggara SPBE di Pemerintah Daerah. 
        // Tim Koordinasi sebagaimana dimaksud terdiri atas : Ketua, Wakil 
        // Ketua, Sekretaris, Anggota yang terwakili oleh SKPD terkait.
        // ',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
            // ],

        //     [
        //         'urutan_indikator' => 11,
        //         'nama_indikator' => 'Tingkat Kematangan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah',
        //         'deskripsi' => 'Dalam Tahap Perencanaan dan Pengenggaran untuk penyusunan dokumen arsitektur SPBE',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 12,
        //         'nama_indikator' => 'Tingkat Kematangan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah',
        //         'deskripsi' => 'Dalam Tahap Perencanaan dan Pengenggaran untuk penyusunan dokumen pete rencana SPBE',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 13,
        //         'nama_indikator' => 'Tingkat Kematangan Rencana dan Anggaran SPBE',
        //         'deskripsi' => 'Rencana dan Anggaran SPBE telah dialokasikan untuk pengggaran tahun 2025',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 14,
        //         'nama_indikator' => 'Tingkat Kematangan Inovasi Proses Bisnis SPBE Dokumen model Peta Proses Bisnis Pemerintah Kota Parepare ',
        //         'deskripsi' => 'Dokumen model Peta Proses Bisnis Pemerintah Kota Parepare 
        // yang telah ditetapkan dalam SK Walikota Parepare Nomor Tahun 
        // 2021 tentang Peta Proses Bisnis Pemerintah Daerah Kota 
        // Parepare Tahun 2018-2023 yang disampaikan dalam data dukung 
        // 14. Proses Bisnis Pemerintah Kota Parepare 2018-2023.pdf. Peta 
        // proses bisnis ini bertujuan agar seluruh Perangkat Daerah Kota 
        // Parepare:
        // 1. Mampu melaksanakan tugas dan fungsi secara efektif dan 
        // efisien;
        // 2. Mudah mengomunikasikan baik kepada pihak internal maupun 
        // eksternal mengenai proses bisnis yang dilakukan untuk mencapai 
        // visi, misi dan tujuan; dan 
        // 3. Memiliki aset pengetahuan yang mengintegrasikan dan 
        // mendokumenasikan secara rinci mengenai proses bisnis yang 
        // dilakukan untuk mencapai visi, misi dan tujuan. Aset pengetahuan 
        // ini menjadi dasar pengambilan keputusan stratgis terkait 
        // pengembangan organisasi dan sumber daya manusia, serta 
        // penilaian kinerja. Dalam SK Walikota tersebut terlampir pula Proses Bisnis yang 
        // disusun menggunakan aplikasi Bizagi Modeler sehingga 
        // memudahkan untuk melakukan penjabaran lebih rinci dan 
        // disampaikan pada data dukung 14. Inovasi Proses Bisnis.rar.
        // Terlampir :
        // 1. Proses Bisnis Kota Parepare
        // 2. Proses Bisnis 33 SKPD
        // 3. SK Probis Kota Parepare 2018-2023',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'urutan_indikator' => 15,
        //         'nama_indikator' => 'Tingkat Kematangan Pembangunan Aplikasi SPBE',
        //         'deskripsi' => 'Proses Pembangunan Aplikasi SPBE telah Tertuang dalam kerangka acuan kerja pembuatan aplikasi Smart City dan saat ini acuan perencanaan dan pengembangan mengacu pada Master Plan Smart City yang sementara disususn',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 16,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Pusat Data',
        //         'deskripsi' => 'Layanan Pusat Data telah digunakan untuk pengelolaan dan Manajemen data Aplikasi Pemerintahan',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // //     [
        //         'urutan_indikator' => 17,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah',
        //         'deskripsi' => 'Ketersediaan Layanan Jaringan Intra Pemerintah Daerah Kota 
        // Parepare pernah diadakan, namun saat ini sudah tidak ada karena 
        // tidak adanya kebutuhan akan layanan jaringan intra. Seluruh 
        // kantor SKPD di Kota Parepare difasilitisai oleh jaringan Wifi yang 
        // bekerja sama dengan Perusahaan Telekomunikasi yang 
        // menyediakan layanan Wifi. Terdapat 33 SKPD, 4 Kantor 
        // Kecamatan, 22 Kantor Kelurahan, Puskesmas telah terfasilitasi 
        // oleh jaringan Wifi',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 18,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah',
        //         'deskripsi' => 'Sistem penghubung layanan Pemerintah Daerah Kota Parepare 
        // adalah dua aplikasi khusus yaitu SINAWAITU, Ekinerja BKN dan 
        // SMART PRESENSI dan yang terintegrasi databasenya sehingga 
        // tampilan profil pada Smart Presensi menarik data dari database 
        // kepegawaian aplikasi SINAWAITU. Kedua aplikasi tersebut telah 
        // diterapkan di seluruh SKPD lingkup Pemerintah Kota Parepare',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 19,
        //         'nama_indikator' => 'Tingkat Kematangan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah',
        //         'deskripsi' => 'Tim Koordinasi SPBE Pemerintah Daerah Kota Parepare telah 
        // dibentuk dan disahkan berdasarkan SK Wali Kota Parepare Nomor 
        // Tahun 2022 tentang Penetapan Tim Koordinasi Sistem 
        // Pemerintahan Berbasis Elektronik Lingkup Pemerintah Daerah 
        // Kota Parepare Tahun 2022. SK Walikota tersebut telah memuat 
        // terkait tugas dan tanggung jawab setiap anggota Tim Koordinasi 
        // SPBE di lingkup Pemerintah Daerah Kota Parepare. Data dukung 
        // terkait SK Tim Koordinasi SPBE terlampir pada dokumen 19. SK 
        // Tim Koordinasi SPBE.pdf',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 20,
        //         'nama_indikator' => 'Tingkat Kematangan Kolaborasi Penerapan SPBE',
        //         'deskripsi' => 'Kolaborasi antar unit kerja/perangkat daerah di Perangkat Daerah dalam penerapapn SPBE telah dilaksanakan oleh tim dalam 
        // bentuk rapat koordinasi yang telah dilaksanakan. Rapat 
        // Koordinasi persiapan Penilaian Mandiri TAUVAL SPBE Tahun 2023, 
        // Koordinasi Tindak lanjut Peraturan Walikota SPBE, Koordinasi 
        // tindak lanjut Tim Koordinasi SPBE, dan Koordinasi pembagian 
        // peran Tim Koordinasi SPBE menghadapi Penilaian Mandiri dan 
        // Penilaian Interviu yang merupakan rangkaian TAUVAL SPBE Tahun 
        // 2023.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 21,
        //         'nama_indikator' => 'Tingkat Kematangan Penerapan Manajemen Risiko SPBE',
        //         'deskripsi' => 'Manajemen Risiko SPBE yang diterapkan pada Pemerintah Kota 
        // Parepare terbagi atas dua yaitu Manajemen Resiko Operasional 
        // dan Manajemen Resiko Strategis. Dengan adanya penetapan 
        // formal terkait Peraturan Walikota Nomor 36 Tahun 2020 tentang 
        // Pedoman Pengelolaan Risiko di Lingkungan Pemerintah Daerah 
        // Kota Parepare yang bertujuan untuk memberikan panduan dalam 
        // mengelola resiko dalam rangka mendukung pencapaian tujuan 
        // pemerintah daerah. Peraturan walikota tersebut menjadi dasar 
        // dalam membuat manajemen resiko di seluruh SKPD lingkup Kota 
        // Parepare yang disampaikan pada data dukung 21. Perwa No. 36 
        // Tahun 2020.pdf',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 22,
        //         'nama_indikator' => 'Tingkat Kematangan Penerapan Manajemen Keamanan Informasi',
        //         'deskripsi' => 'Pengendalian Keamanan Informasi belum atau telah tersedia dalam tahap pembangunan.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 23,
        //         'nama_indikator' => 'Tingkat Kematangan Penerapan Manajemen Data',
        //         'deskripsi' => 'Kegiatan Manajemen Data diterapkan tanpa program kegiatan yang terarah dan terencana',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 24,
        //         'nama_indikator' => 'Tingkat Kematangan Penerapan Manajemen Aset TIK',
        //         'deskripsi' => 'Manajemen Aset TIK telah dilaksanakan dengan mengacu pada 
        // pedoman Manajemen Aset yang mencakup proses perencanaan, 
        // pengadaan, pemanfaatan/penggunaan, dan penghapusan aset 
        // yang diatur pada SOP Pengelolaan Barang Milik Daerah 2021 yang 
        // mengatur terkait aset dalam bentuk barang, tanah, maupun 
        // perangkat elektronik/TIK. Terlampit data dukung :
        // 1. SK SOP Pengelolaan BMD 2021.pdf
        // 2. Lampiran- SOP PENGELOLAAN BARANG MILIK DAERAH 
        // 2021.pdf
        // pada file 24. Manajemen Aset TIK.rar',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 25,
        //         'nama_indikator' => 'Tingkat Kematangan Penerapan Kompetensi Sumber Daya Manusia',
        //         'deskripsi' => 'Kematangan Penerapan Kompetensi Sumber Daya Manusia 
        // berdasarkan data dukung 25.Usul Formasi.pdf yang terlampir 
        // terkait perencanaan/ formasi SDM yang diusulkan ke BKN dan 
        // realisasi terpenuhinya bidang kompetensi yang dipersyaratkan. 
        // Realisasi terpenuhi seluruhnya dari bidang kompetensi yang 
        // dipersyaratkan
        // terlampir pada data dukung 25.Penetapan Formasi.pdf yang telah 
        // direview oleh pihak BKN dan adanya hasil penilaian evaluasi 
        // kinerja ASN oleh BKPSDMD Kota Parepare. Telaahan 
        // kinerja/kompetensi SDM TIK telah memenuhi SKPD yang membutuhkan tenaga/pegawai
        // berlatar belakang pendidikan di bidang TIK.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 26,
        //         'nama_indikator' => 'Tingkat Kematangan Penerapan Manajemen Pengetahuan',
        //         'deskripsi' => 'Manajemen Pengetahuan SPBE yang telah dilaksanakan oleh 
        // Badan Kepegawaian Pengembangan Sumber Daya Manusia 
        // Daerah Kota Parepare adalah Manajemen Kepegawaian terkait 
        // Sosialisasi Aplikasi E-Kinerja yang merupakan salah satu aplikasi 
        // umum dari Badan Kepegawaian Negara. 
        // Manajemen Pengetahuan SPBE lainya yang telah dilaksanakan 
        // oleh Badan Keuangan Daerah dan BAPPEDA adalah Bimbingan 
        // Teknis Sistem Informasi Pemerintahan Daerah (SIPD) yang 
        // merupakan aplikasi umum dari Kementrian Dalam Negeri. Dan 
        // berbagai Bimtek terkait manajemen pengetahuan SPBE di lingkup 
        // Pemerintah Kota Parepare. Terlampir data dukung 26. 
        // Manajemen Pengetahuan SPBE.rar',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 27,
        //         'nama_indikator' => 'Tingkat Kematangan Penerapan Manajemen Perubahan',
        //         'deskripsi' => 'Kematangan penerpan manajemen perubahan aplikasi, 
        // perubahan data, perubahan keamanan terlebih dahulu dilaporkan 
        // ke bidang e-Government Dinas Komunikasi danInformatika Kota 
        // Parepare yang bertanggung jawab dalam pengelolaan 
        // infrastruktur TIK, jaringan dan aplikasi. Sehingga segala macam 
        // permintaan perubahan, analisis dampak perubahan, dan 
        // penerapan perubahan terkoordinir/leading sectornya berada 
        // pada Dinas Kominfo Kota Parepare.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 28,
        //         'nama_indikator' => 'Tingkat Kematangan
        // Penerapan Manajemen
        // Layanan SPBE',
        //         'deskripsi' => 'Manajemen Layanan SPBE belum dilaksanakan pada seluruh 
        // proses Manajemen Layanan SPBE yaitu Pelayanan Pengguna SPBE 
        // dan Pengoperasian Layanan SPBE.
        // Data dukung yang dilampirkan adalah manajemen layanan pada 
        // sektor:
        // 1. DISKOMINFO yaitu SOP Penambahan dan Pengaduan Jaringan 
        // Internet, Penerbitan Rekomendasi Pendirian Tower 
        // Telekomunikasi, SOP Peliputan Kegiatan, SOP Talkshow TV dan 
        // Radio, SOP Pengelolaan Pengaduan Melalui SP4N LAPOR, SOP 
        // Permohonan Informasi Publik.
        // 2. Perizinan (DPMPTSP)
        // 3. Kepegawaian (BKSPDMD)
        // 4. Kesehatan (Rumah Sakit Daerah)
        // pada file 28. Manajemen Layanan.rar',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 29,
        //         'nama_indikator' => 'Tingkat Kematangan
        // Pelaksanaan Audit
        // Infrastruktur SPBE',
        //         'deskripsi' => 'Kegiatan Audit Infrastruktur dilaksanakan tanpa pedoman Audit 
        // Infrastruktur. Kegiatan Audit Infrastruktur yang dilasanakan oleh 
        // Tim Auditor dari Inspektrorat Daerah Kota Parepare adalah 
        // melakukan evaluasi kegiatan tahun anggaran 2021 dengan 
        // memperhatikan kesesuaian spesifikasi infrastruktur elektronik. 
        // Terlampir data dukung Surat Tugas melakukan Audit Infrastruktur 
        // TIK tahun 2021 dan Laporan Hasil Pemeriksaan Infrastruktur TIK 
        // Tahun 2021 pada data dukung 29. Audit Infrastruktur TIK.rar',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 30,
        //         'nama_indikator' => 'Tingkat Kematangan
        // Pelaksanaan Audit
        // Aplikasi SPBE',
        //         'deskripsi' => 'Kegiatan Audit Aplikasi SPBE belum dilaksanakan di Pemerintahan 
        // Kota Parepare',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 31,
        //         'nama_indikator' => 'Tingkat Kematangan Pelaksanaan Audit Keamanan SPBE',
        //         'deskripsi' => 'Kegiatan Audit Keamanan SPBE belum dilaksanakan di Pemerintahan Kota Parepare.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 32,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Perencanaan',
        //         'deskripsi' => 'Layanan Perencanaan Berbasis Elektronik yang digunakan oleh 
        // Seluruh SKPD Pemerintah Daerah Kota Parepare adalah layanan 
        // dari Kementrian Dalam Negeri yaitu Sistem Informasi Pemerintah 
        // Daerah.SIPD Kemendagri dengan alamat URL parepare.sipd.kemendagri.go.id
        // SIPD adalah suatu sistem yang mendokumentasikan, 
        // mengadministrasikan, serta mengolah data pembangunan daerah 
        // menjadi informasi yang disajikan kepada masyarakat dan sebagai 
        // bahan pengambilan keputusan dalam rangka perencanaan, 
        // pelaksanaan, evaluasi kinerja pemerintah daerah.
        // SIPD merupakan bagian integral dalam proses penyusunan 
        // dokumen perencanaan pembangunan daerah digunakan 
        // semaksimal mungkin sebagai aplikasi dalam perencanaan 
        // program dan kegiatan pada penyusunan dokumen perencanaan 
        // (Renja, RKPD) dan terintegrasi hingga penyusunan dokumen 
        // penganggaran (KUA-PPAS).',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 33,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Penganggaran',
        //         'deskripsi' => 'Layanan Penganggaran Berbasis Elektronik yang digunakan oleh 
        // Badan Keuangan Daerah Kota Parepare adalah layanan dari 
        // Kementrian Dalam Negeri yaitu Sistem Informasi Pemerintah 
        // Daerah dengan alamat URL pare-pare.sipd.kemendagri.go.id. 
        // SIPD adalah suatu sistem yang mengelola penganggaran mulai 
        // dari KUA dan PPAS sampai Penetapan APBD. Pada halaman 
        // Dashboard terdapat menu :
        // ➢ Fase Perencanaan- tahun berjalan yang merupakan tahun 
        // rencana sesuai dengan tahapan jadwal. Jika TAPD BPKAD telah 
        // menyusun jadwal penganggaran maka fasenya sesuai dengan 
        // jadwal yang dibuat.
        // ➢ Informasi Tahapan Jadwal merupakan tahapan yang dibuat 
        // oleh TAPD Bappeda dan BPKAD
        // ➢ Total Rekapitulasi Belanja Langsung berdasarkan Urusan Wajib, 
        // Pilihan, Pendukung dan Penunjang.
        // ➢ Diagram jumlah Total Pendapatan, Belanja dan Pembiayaan',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 34,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Keuangan',
        //         'deskripsi' => 'Layanan Keuangan Berbasis Elektronik yang digunakan oleh 
        // Badan Keuangan Daerah Kota Parepare adalah layanan dari 
        // Kementrian Dalam Negeri yaitu Sistem Informasi Pemerintah 
        // Daerah dengan alamat URL pare-pare.sipd.kemendagri.go.id dan 
        // sipd.kemendagri.go.id/siap. SIPD Biru berfungsi untuk layanan 
        // penatausahan pengeluaran. Layanan Keuangan Berbasis Elektronik dapat ditampilkan pada data dukung 34. Layanan 
        // Keuangan.rar
        // Aplikasi Khusus untuk Layanan Keuangan Berbasis Elektronik yang 
        // digunakan oleh Badan Keuangan Daerah Kota Parepare adalah 
        // SIPKD (Sistem Informasi Pengelolaan Keuangan Daerah). SIPKD 
        // adalah aplikasi keuangan daerah yang dikelola langsung oleh 
        // Badan Keuangan Daerah Kota Parepare. Data dukung yang 
        // menjelaskaan tentang proses penggunaan SIPD dan SIPKD 
        // terdapat pada file 34. Layanan Keuangan.rar',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 35,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Pengadaan Barang dan Jasa',
        //         'deskripsi' => 'Layanan Pengadaan Barang dan Jasa Berbasis Elektronik 
        // Pemerintah Daerah yang digunakan adalah :
        // 1. SPSE
        // Layanan Pengadaan Secara Elektronik (LPSE) adalah unit layanan 
        // penyelenggara sistem elektronik pengadaan barang/jasa yang 
        // didirikan oleh Kementerian atau Lembaga atau Perguruan Tinggi 
        // atau BUMN dan Pemerintah Daerah untuk memfasilitasi ULP (Unit 
        // Layanan Pengadaan) dalam melaksanakan pengadaan barang 
        // atau jasa yang telah digunakan di lingkup Pemerintah Kota 
        // Parepare. Untuk penggunagaan katalog lokal yang telah 
        // disediakan adalah Belanja ATK, Makan/Minum, Cleaning Service, 
        // dan Pengamanan. 
        // 2. SIUKPBJ LKPP
        // Sistem Informasi Unit Kerja Pengadaan Barang/Jasa, terlampir 
        // Screenshot proses login, dasboard, pengisian penilaian mandiri, 
        // penginputan bukti dukung dan pengunggahan file dukung barang 
        // dan jasa di lingkup Pemerintah Kota Parepare. Data dukung yang 
        // menjelaskan proses penggunaan aplikasi terlampir pada file 35. 
        // Layanan Pengadaan Barang dan Jasa.rar. 
        // 3. Si Monalisa
        // Sistem Monitoring Laporan Keuangan dan Evaluasi Kinerja 
        // Penyedia adalah aplikasi yang dipergunakan oleh Badan 
        // Pemeriksa Keuangan (BPK) dalam melakukan penilaian kinerja 
        // penyedia yang telah melaksanakan pekerjaan.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 36,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Kepegawaian',
        //         'deskripsi' => 'Layanan Kepegawaian Berbasis Elektronik yang digunakan oleh 
        // Badan Kepegawaian Pengembangan Sumber Daya Manusia 
        // Daerah (BKPSDMD) Kota Parepare adalah terdiri atas:
        // 1. MySAPK
        // MySAPK (Sistem Aplikasi Pelayanan Kepegawaian) adalah aplikasi 
        // umum milik Badan Kepegawaian Negara yang digunakan untuk 
        // memudahkan ASN dalam pengecekan data kepegawaian dan 
        // berita terkait info kepegawaian seperti mengecek data PNS, gaji, 
        // update data mandiri dan lainnya. Seluruh ASN di Kota Parepare 
        // telah menginput data kepegawaiannya dengan menggunakan aplikasi MySAPK.
        // 2. SIASN
        // Sistem Informasi Aparatur Sipil Negara (SIASN) adalah aplikasi 
        // yang bertujuan untuk mengintegrasikan data ASN secara nasional 
        // meliputi seluruh Instansi Pemerintah Pusat dan Instansi 
        // Pemerintah Daerah. BKPSDMD Kota Parepare memanfaatkan 
        // aplikasi SIASN sebagai layanan untuk mengajukan Kenaikan 
        // Pangkat dan Pensiun.
        // 3. SINAWAITU
        // SINAWAITU (Sistem Informasi Kepegawaian dan Pelayanan 
        // Terpadu) adalah aplikasi khusus milik BKPSDMD Kota Parepare 
        // yang berfungsi sebagai layanan kepegawaian, informasi kenaikan 
        // pangkat, jabatan kumulatif, jabatan lowong dan terisi untuk 
        // seluruh pegawai di lingkup Pemerintah Kota Parepare. 
        // 4. SMART PRESENSI
        // Sistem Absensi Berbasis GPS yang dikelola oleh Dinas Komunikasi 
        // dan Informatika Kota Parepare yang databasenya telah 
        // terintegrasi dengan database kepegawaian (SINWAITU) milik 
        // BKPSDMD Kota Parepare. Adapun data dukung API SINAWAITU 
        // yang terkoneksi',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 37,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Kearsipan Dinamis',
        //         'deskripsi' => 'Layanan Kearsipan Dinamis Berbasis Elektronik Pemerintah Kota 
        // Parepare telah menggunakan Aplikasi SRIKANDI yang merupakan 
        // Aplikasi Umum dari Arsip Nasional Republik Indonesia (ANRI) di 
        // bidang kearsipan yang dapat mendukung pengelolaan arsip dan 
        // tata kelola pemerintahan berbasis elektronik. Berikut terlampir 
        // data dukung Surat dari ANRI perihal Akun Live Aplikasi SRIKANDI 
        // di Pemerintah Kota Parepare dan Screenshot Penggunaan Aplikasi 
        // SRIKANDI yang telah dimanfaatkan sejak Januari 2023.
        // ',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 38,
        //         'nama_indikator' => 'Tingkat Kematangan
        // Layanan Pengelolaan
        // Barang Milik Negara /
        // Daerah',
        //         'deskripsi' => 'Layanan Pengelolaan Barang Milik Daerah Berbasis Elektronik 
        // yang digunakan oleh Bidang Aset Sekretariat Daerah Kota 
        // Parepare adalah Modul BMD. Modul BMD adalah aplikasi 
        // pelayanan pengawasan Barang Milik Daerah. Aplikasi Modul BMD 
        // telah terintegrasi dengan aplikasi khusus yaitu SIPKD (Sistem 
        // Informasi Pengelolaan Keuangan Daerah). Data dukung Modul 
        // BMD terlampir pada file 38. Layanan Pengelolaan BMD.rar',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 39,
        //         'nama_indikator' => 'Tingkat Kematangan
        // Layanan Pengawasan
        // Internal Pemerintah',
        //         'deskripsi' => 'Layanan Pengawasan Internal Pemerintah Berbasis Elektronik 
        // yang digunakan oleh Inspektorat Daerah Kota Parepare adalah: 
        // 1. GOL KPK
        // Aplikasi Gratifikasi Online (GOL) adalah aplikasi yang 
        // dikembangkan oleh KPK untuk memudahkan Aparatur Sipil 
        // Negara dan penjabat negara lainnya dalam melaporkan yang 
        // telah digunakan oleh Inspektorat Daerah Kota Parepare. https://gol.kpk.go.id/ dan dapat diakses pada laman 
        // inspektorat.pareparekota.go.id
        // 2. SPIP Terintegrasi
        // Aplikasi dari Badan Pengawasan Keuangan dan Pembangunan 
        // yang dapat diakses pada halaman spipterintegrasi.bpkp.go.id dan 
        // ditinjau/berkolaborasi dengan BPKP Provinsi Sulawesi Selatan.
        // 3. Layanan Pengawasan Internal Pemerintah Berbasis Elektronik 
        // yang juga digunakan adalah Tanyaki APIP dan Whistle Blowing 
        // System (WBS) adalah aplikasi khusus yang dimilik Pemerintah 
        // Kota Parepare. Data dukung terkait Aplikasi SPIP Terintegrasi, 
        // Tanyaki APIP dan WBS terlampir pada data dukung 39. 
        // Indikator39_Pengawasan Internal Pemerintah.rar',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 40,
        //         'nama_indikator' => 'Tingkat Kematangan
        // Layanan Akuntabilitas
        // Kinerja Organisasi',
        //         'deskripsi' => 'Layanan Akuntabilitas Kinerja Berbasis Elektronik Pemerintah 
        // Daerah yang digunakan adalah 
        // 1. ESAKIP REVIEW
        // e-SAKIP REVIU adalah sistem aplikasi yang dibangun oleh 
        // Kementerian Pendayagunaan Aparatur Negara dan Reformasi 
        // Birokrasi sebagai upaya peningkatan kualitas pelaksanaan 
        // akuntabilitas kinerja di lingkungan instansi pemerintah untuk 
        // meningkatkan efektivitas dan efisiensi penggunaan anggaran dan 
        // telah digunakan oleh Bagian Organisasi Sekretariat Daerah Kota 
        // Parepare dua tahun terakhir. Adapun untuk mengakses 
        // websitenya pada halaman https://esr.menpan.go.id/ dan data 
        // dukung screenshot terlampir pada 40. Indikator 40_Akuntabilitas 
        // Kinerja Organisasi.rar
        // 2. eSAKIP Kota Parepare
        // eSAKIP adalah aplikasi Sistem Akuntabilitas Kinerja Instansi 
        // Pemerintah yang bertujuan untuk memudahkan proses 
        // pemantauan dan pengendalian kinerja dalam rangka 
        // meningkatkan akuntabilitas dan kinerja unit kerja di lingkup Kota 
        // Parepare. Aplikasi eSAKIP dapat diakses pada halaman 
        // https://esakip.pareparekota.go.id/ dengan tampilan halaman 
        // depan menyajikan Fitur Home, Profil, Siklus, dan Sakip Publik. 
        // Pada fitur Sakip Publik terdapat fitur transaksi data baik itu fitur 
        // unggah (admin) dan atau unduh (user). Terdapat pula fitur 
        // filterisasi berdasarkan kategori yang diinginkan yaitu 
        // Perencanaan, Pengukuran, Pelaporan, Evaluasi, Prestasi atau 
        // Dokumen per SKPD dapat ditampilkan dengan mudah.
        // Proses reviu dan upgrade aplikasi telah dianggarkan di tahun 2022 
        // ini didukung dengan data SPK dengan pihak ketiga untuk 
        // melakukan upgrade fitur aplikasi e-sakip Berikut kami lampirkan data dukung Manual Book eSAKIP Kota 
        // Parepare yang telah dilengkapi fitur proses login, fitur unggah dan 
        // unduh dokumen dan menu master data',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 41,
        //         'nama_indikator' => 'Tingkat Kematangan
        // Layanan Kinerja Pegawai',
        //         'deskripsi' => 'Layanan Kinerja Pegawai Berbasis Elektronik yang digunakan oleh 
        // Badan Kepegawaian Pengembangan Sumber Daya Manusia 
        // Daerah (BKPSDMD) Kota Parepare adalah aplikasi e-kinerja milik 
        // Badan Kepegawaian Negara. APLIKASI E-KINERJA dapat diakses 
        // pada https://sitpp.pareparekota.go.id/ yang merupakan Sistem 
        // Official menggunakan SIMPEGNAS Modul Kinerja. Layanan yang 
        // dapat menampilkan hasil target dan realisasi SKP JPT serta SKP 
        // JF/JA, dimana hasil pencetakannya sudah disesuaikan dengan 
        // Peraturan Menteri Pemberdayaan Aparatur Sipil Negara No. 06 
        // Tahun 2022.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 42,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Pengaduan Pelayanan Publik',
        //         'deskripsi' => 'Layanan Pengaduan Pelayanan Publik Berbasis Elektronik yang 
        // digunakan oleh Pemerintah Kota Parepare adalah SP4N-LAPOR! 
        // yang merupakan Aplikasi Umum dari Kementrian Pendayagunaan 
        // Aparatur Negara dan Reformasi Birokrasi Republik Indonesia. 
        // Selain SP4N-LAPOR!, aplikasi khusus yang digunakan di 
        // Pemerintah Kota Parepare adalah OKCESS dan SIAPJA. OKCESS 
        // adalah layanan publik pengaduan masyarakat di kecamatan, 
        // sedangkan SIAPJA adalah Sistem Infromasi Aduan Penanganan 
        // Jalan. Data dukung terlampir pada 42. Indikator42_Pengaduan 
        // Pelayanan Publik.rar.',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 43,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Data Terbuka',
        //         'deskripsi' => 'Layanan Data Terbuka Berbasis Elektronik yang digunakan 
        // Pemerintah Kota Parepare adalah geoportal.pareparekota.go.id 
        // dan satudata.pareparekota.go.id. 
        // 1. Geoportal
        // Merupakan bagian dari Layanan Satu Data Indonesia data.go.id 
        // atau salah satu simpul Jaringan Informasi Geospasial Nasional 
        // (JIGN). Geoportal Kota Parepare dapat diakses pada 
        // geoportal.pareparekota.go.id. Data dan informasi geospasial 
        // disediakan dalam bentuk GIS web services dan dapat ditelusuri 
        // keberadaan datanya. Layanan geoportal.pareparekota.go.id dapat 
        // diakses pula (terintegrasi) pada Layanan Satu Data Indonesia 
        // data.go.id dengan melakukan pencarian Kota Parepare pada tab 
        // search. Geoportal Kota Parepare telah memanfaatkan server 
        // (VPS) secara mandiri untuk pengolahan data dan penyimpanan 
        // datanya. Data dan Informasi Geospasial Parepare juga sudah 
        // terkoneksi dengan Website Satu Data Indonesia dari Kementerian 
        // PPN/Bappenasdid.
        // 2. Satu Data Parepare
        // Merupakan Layanan Data Terbuka Berbasis Elektronik yang 
        // menampilkan Data Statistik Sektoral. Layanan Satu Data Parepare 
        // dapat diakses pada halaman https://satudata.pareparekota.go.id/. Berikut terlampir data 
        // dukung Video Tutorial Satu Data Parepare, Manual Book Proses 
        // Upload dan Download Data/Informasi pada layanan, dan Contoh 
        // Hasil Metadata Statistik Sektoral',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 44,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Jaringan Dokumentasi dan Informasi Hukum (JDIH)',
        //         'deskripsi' => 'Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis 
        // Elektronik yang beralamat pada jdih.pareparekota.go.id memiliki 
        // fitur pencarian baik secara umum maupun spesifik berdasarkan 
        // nomor, tahun terbit, jenis kebijakan (peraturan daerah atau 
        // peraturan walikota). Pada halaman dari sisi admin terdapat fitur 
        // untuk mengunggah data kebijakan dengan mengisi tentang 
        // judul/objek aturan, nomor aturan, tahun dikeluarkannya aturan, 
        // tanggal pengundangan, dll dan terlebih dahulu telah divalidasi 
        // oleh Bag. Hukum Sekretariat Daerah Kota Parepare. Layanan JDIH 
        // Kota Parepare sudah terintegrasi dengan layanan JDIH Nasional 
        // jdihn.go.id dapat dibuktikan dengan data dukung pada file 44. 
        // INTEGRASI JDIH PAREPARE DENGAN JDIHN.jpg. Dan proses 
        // perbaikan dan follow up proses data telah dilakukan reviu setiap 
        // tahunnya untuk menambahkan fitur-fitur yang memudahkan dari 
        // sisi user/pengunjung website JDIH Kota Parepare',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 45,
        //         'nama_indikator' => 'Tingkat Kematangan Layanan Publik Sektor 1',
        //         'deskripsi' => 'Layanan Publik Sektoral 1 Berbasis Elektronik adalah Layanan 
        // yang digunakan oleh Dinas Penanaman Modal dan Pelayanan 
        // Terpadu Satu Pintu yang mengelola Mall Pelayanan Publik (MPP) 
        // Kota Parepare memberikan pelayanan yaitu:
        // 1. Online Single Submission (OSS) adalah sistem perizinan 
        // berusaha terintegrasi secara elektronik yang dikelola dan 
        // diselenggarakan oleh Lembaga OSS (Kementrian Investasi/BKPM). 
        // Memudahkan masyarakat, khususnya Usaha Mikro Kecil 
        // melakukan perizinan berusaha di lingkup Kota Parepare. Data 
        // Dukung Manual Book OSS terlampir pada 45. Layanan Publik 
        // Sektoral 1.rar
        // 2. Sistem Informasi Manajemen Bangunan Gedung (SIMBG) 
        // adalah Aplikasi Umum dari Kementrian PUPR yang telah 
        // diaplikasikan di Dinas PMPTSP Kota Parepare. Data Dukung 
        // Manual Book SIMBG terlampir pada 45. Layanan Publik Sektoral 
        // 1.rar
        // 3. Aplikasi Layanan Sistem Informasi Administrasi Perizinan (LA 
        // SIAP)
        // 4, Monitoring Berkas untuk memantau posisi/alamat berkas 
        // setelah melakukan pengajuan berkas. 
        // Selain itu MPP Kota Parepare melayani fasilitas:
        // 1. SAMSAT dari BAPENDA Prov. Sulawesi Selatan
        // 2. Disdukcapil untuk Pelayanan Kependudukan dan Catatan Sipil 
        // 3. Pembuatan SKCK dari Polres Kota Parepare
        // 4. Kementerian Agama untuk Pelayanan Pendaftaran Haji, dll',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 46,
        //         'nama_indikator' => 'Tingkat Kematangan
        // Layanan Publik Sektor 2',
        //         'deskripsi' => 'Layanan Publik Sektoral 2 Berbasis Elektronik adalah Layanan 
        // yang digunakan oleh Dinas Kependudukan dan Pencatatan Sipil 
        // yang terdiri atas :
        // 1. SIAK adalah Sistem Informasi Administrasi Kependudukan yang 
        // merupakan Aplikasi dari Kementerian Dalam Negeri RI yang 
        // digunakan oleh Dinas Dukcapil Kota Parepare untuk memberikan 
        // pelayanan terbaik dalam urusan administrasi kependudukan 
        // kepada penduduk, masyarakat dunia usaha, pemerintah dan 
        // negara. 
        // 2. Lapor Hati 
        // Layanan Pelaporan Peristiwa Kelahiran dan Kematian (Lapor Hati) 
        // adalah layanan untuk pelaporan serta pencatatan peristiwa 
        // kelahiran dan kematian secara real-time, baik yang terjadi di 
        // fasilitas kesehatan maupun di luar fasilitas kesehatan. 
        // Akses ini merupakan Kerjasama antara DISDUKCAPIL dengan 
        // pihak Rumah Sakit, Puskesmas, Klinik Utama, Kecamatan dan 
        // Kelurahan se- Kota Parepare. Setiap Rumah Sakit, Puskesmas, 
        // Kecamatan dan Kelurahan pada kegiatan ini menetapkan seorang 
        // Admin yang bertugas melaporkan peristiwa kelahiran dan 
        // kematian melalui website, username dan password yang telah 
        // diberikan sebelumnya oleh Admin dari Dinas Dukcapil Kota 
        // Parepare. Manual Book terlampir pada data dukung 46. Layanan 
        // Publik Sektor 2.rar
        // 3. SASKIA
        // Strategi Anak Segera Dapat KIA (SASKIA) adalah layanan untuk 
        // meningkatkan kepemilikan Kartu Identitas Anak (KIA) di Kota 
        // Parepare. Penduduk cukup mengupload dokumen persyaratan 
        // Lalu mengirimkan dokumen tersebut Via Nomor 
        // 0811415227/0811428227. Setelah melalui proses verifikasi dan 
        // memenuhi syarat, KIA Pemohon bisa
        // langsung diterbitkan. Manual Book terlampir pada data dukung 
        // 46. Layanan Publik Sektor 2.rar
        // 4. SIMPATI
        // Sistem Informasi Laporan Data Nikah (SIMPATI) adaah Layanan 
        // akses data guna pelaporan serta pencatatan setiap peristiwa 
        // pernikahan untuk Muslim. Sistem Informasi Ini Merupakan 
        // Kerjasama Antara Kemenag Kota Parepare dan Dinas 
        // Kependudukan dan Pencatatan Sipil Kota Parepare. Manual Book 
        // terlampir pada data dukung 46. Layanan Publik Sektor 2.rar
        // 5. Virtual Office
        // Disdukcapil berkewajiban menerbitkan dokumen kependudukan 
        // bahkan di masa pandemi COVID-19. Inovasi yang memanfaatkan 
        // teknologi informasi. Layanan penerbitan dokumen adminduk bagi 
        // warga secara virtual. Warga yang ingin mengurus penerbitan 
        // dokumen adminduknya melakukan tatap muka secara virtual 
        // dengan petugas layanan. Konsultasi, Pengaduan dan Proses 
        // penerbitan dokumen Adminduk dilakukan melalui tatap muka 
        // secara virtual. Dengan inovasi ini, penduduk tidak perlu lagi 
        // datang langsung ke kantor Dinas Dukcapil. Manual Book terlampir 
        // pada data dukung 46. Layanan Publik Sektor 2.rar
        // 6. MAPPADECENG
        // Memudahkan Warga Dalam Menerbitkan Dokumen 
        // Kependudukannya. Mereka Bahkan Bisa Menerbitkan 
        // dokumennya dari rumah atau tempat kerja. Penduduk yang ingin 
        // mengurus penerbitan dokumen kependudukannya bisa 
        // memanfaatkan Media Sosial Layanan Disdukcapil Kota Parepare 
        // melalui:
        // a. Layanan Whatsapp di Nomor 0811-415-227
        // b. Layanan Aduan di Nomor 0811-428-227
        // c. Email tu.disdukcapil@gmail.com
        // d. Facebook @disdukcapil parepare, atau
        // e. Website di alamat http://disdukcapil.pareparekota.go.id
        // Manual Book terlampir pada data dukung 46. Layanan Publik 
        // Sektor 2.rar',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'urutan_indikator' => 47,
        //         'nama_indikator' => 'Tingkat Kematangan
        // Layanan Publik Sektor 3',
        //         'deskripsi' => 'Layanan Publik Sektoral 3 Berbasis Elektronik adalah Layanan 
        // yang digunakan oleh :
        // 1. Dinas Kesehatan Kota Parepare yang terdiri atas :
        // a. e-PPGBM
        // e-PPBGM adalah aplikasi dari Kementerian Kesehatan yang 
        // digunakan oleh Dinas Kesehatan Kota Parepare dalam Pendataan 
        // Balita melalui Aplikasi e-PPGBM untuk Cegah Stunting di Kota 
        // Parepare. Pemantauan Status Gizi (PSG) dapat dilakukan by name 
        // by address. Berikut Terlampir data dukung Screenshot e-PPGBM 
        // pada lampiran 47. Indikator47_Publik Sektor 3.
        // b. SiVera
        // Sistem Informasi Verifikasi dan Validasi Pertanggungan Kesehatan 
        // (SiVera) adalah Layanan untuk Verifikasi Data Penerima Bantuan 
        // yang mengkolaborasikan Data di Dinas Sosial dengan Dinas 
        // Kependudukan dan Pencatatan Sipil. Manual Book tentang SiVera 
        // terlampir pada 47. Indikator47_Layanan Publik Sektor 3.rar
        // 2. Dinas Sosial Kota Parepare
        // Layanan untuk Pengentasan Kemiskinan dari Kementerian Sosial 
        // adalah Sistem Informasi Kesejahteraan Sosial Next Generation 
        // (SIKS-NG) yang digunakan oleh Dinas Sosial Kota Parepare.
        // 3. Bappeda Kota Parepare
        // Aplikasi untuk Monitoring pelaksanaan 8 Aksi Konvergensi 
        // Intervensi Penurunan Stunting Terintegrasi dari Ditjen Bina 
        // Pembangunan',
        //         'admin_dinas_id' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        // DokumenPendukung::insert([
        //     [
        //         'file_path' => 'lslslslsl.pdf',
        //         'admin_dinas_id' => 1,
        //         'urutan_indikator' => 1,
        //         'tahun' => 2024,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'file_path' => 'yayay.pdf',
        //         'admin_dinas_id' => 1,
        //         'urutan_indikator' => 2,
        //         'tahun' => 2023,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        //     ,
        //     [
        //         'file_path' => 'hahahaha.pdf',
        //         'admin_dinas_id' => 1,
        //         'urutan_indikator' => 3,
        //         'tahun' => 2023,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'file_path' => 'hjkfdbdjbja.pdf',
        //         'admin_dinas_id' => 1,
        //         'urutan_indikator' => 4,
        //         'tahun' => 2023,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // ]);

        // InformasiIndikator::create([
        //     'indeks' => 3,
        //     'tahun' => 2024,
        //     'urutan_indikator' => 1,
        //     'admin_dinas_id' => 1,
        //     'jumlah_dokumen' => 3,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);




    }
}
