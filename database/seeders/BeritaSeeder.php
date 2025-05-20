<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //  * @param int $count Jumlah berita yang ingin di-generate.
    //  */
    public function run(int $count = 10): void
    {
        $faker = \Faker\Factory::create();

        // Daftar file gambar di folder `public/storage/berita`
        $localImages = [
            '01JTQ4PG7HGKV34DYEBYVFMA2Q.heic',
            '01JVJCGJ3SE1899VSRYCDTNCJD.jpeg',
            '01JVJDHYDQ6T2332BDVERHV565.jpg',
        ];

        for ($i = 0; $i < $count; $i++) {
            $judul = $faker->sentence(6);
            
            // Pilih gambar acak dari array
            $randomImage = $localImages[array_rand($localImages)];
            $gambarPath = 'berita/' . $randomImage;

            Berita::create([
                'judul' => $judul,
                'slug' => Str::slug($judul) . '-' . Str::random(5),
                'gambar' => $gambarPath,
                'isi_konten' => $faker->paragraphs(5, true),
                'author' => $faker->name,
            ]);
        }
    }
}
