<?php

namespace App\Filament\Resources\InformasiIndikatorResource\Pages;

use App\Filament\Resources\InformasiIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInformasiIndikator extends CreateRecord
{
    protected static string $resource = InformasiIndikatorResource::class;
    public function getTitle(): string
    {
        return 'Tambahkan Informasi Indikator';
    }
    public function getBreadcrumb(): string
    {
        return 'Tambah'; // Gantilah dengan teks yang kamu inginkan
    }
}
