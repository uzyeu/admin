<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //  * @param int $count Jumlah berita yang ingin di-generate.
    //  */
    public function run(int $count = 10): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < $count; $i++) {
            $judul = $faker->sentence(6);
            Berita::create([
                'judul' => $judul,
                'slug' => Str::slug($judul) . '-' . Str::random(5),
                'gambar' => $faker->imageUrl(640, 480, 'news', true, 'Headline'),
                'isi_konten' => $faker->paragraphs(5, true),
                'author' => $faker->name,
            ]);
        }
    }
}
