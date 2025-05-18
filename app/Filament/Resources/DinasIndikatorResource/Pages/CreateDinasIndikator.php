<?php

namespace App\Filament\Resources\DinasIndikatorResource\Pages;

use App\Filament\Resources\DinasIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDinasIndikator extends CreateRecord
{
    protected static string $resource = DinasIndikatorResource::class;
    public function getTitle(): string
    {
        return 'Tambahkan Dinas';
    }
    public function getBreadcrumb(): string
    {
        return 'Tambah'; // Gantilah dengan teks yang kamu inginkan
    }
}
