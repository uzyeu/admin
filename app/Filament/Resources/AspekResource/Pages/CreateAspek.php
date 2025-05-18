<?php

namespace App\Filament\Resources\AspekResource\Pages;

use App\Filament\Resources\AspekResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAspek extends CreateRecord
{
    protected static string $resource = AspekResource::class;

    public function getTitle(): string
    {
        return 'Tambahkan Aspek SPBE';
    }
    public function getBreadcrumb(): string
    {
        return 'Tambah'; // Gantilah dengan teks yang kamu inginkan
    }
}
