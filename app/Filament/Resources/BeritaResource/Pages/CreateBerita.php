<?php

namespace App\Filament\Resources\BeritaResource\Pages;

use App\Filament\Resources\BeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBerita extends CreateRecord
{
    protected static string $resource = BeritaResource::class;
    public function getTitle(): string
    {
        return 'Tambahkan Berita';
    }
    public function getBreadcrumb(): string
    {
        return 'Tambah'; // Gantilah dengan teks yang kamu inginkan
    }
}
