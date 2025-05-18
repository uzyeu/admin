<?php

namespace App\Filament\Resources\InformasiAspekResource\Pages;

use App\Filament\Resources\InformasiAspekResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInformasiAspek extends CreateRecord
{
    protected static string $resource = InformasiAspekResource::class;
    public function getTitle(): string
    {
        return 'Tambahkan Informasi Aspek';
    }
    public function getBreadcrumb(): string
    {
        return 'Tambah'; // Gantilah dengan teks yang kamu inginkan
    }
}
