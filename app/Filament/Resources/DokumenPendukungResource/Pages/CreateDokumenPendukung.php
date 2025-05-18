<?php

namespace App\Filament\Resources\DokumenPendukungResource\Pages;

use App\Filament\Resources\DokumenPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDokumenPendukung extends CreateRecord
{
    protected static string $resource = DokumenPendukungResource::class;
    public function getTitle(): string
    {
        return 'Tambahkan Dokumen Pendukung';
    }
    public function getBreadcrumb(): string
    {
        return 'Tambah'; // Gantilah dengan teks yang kamu inginkan
    }
}
