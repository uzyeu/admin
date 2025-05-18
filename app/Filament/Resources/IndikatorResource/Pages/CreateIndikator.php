<?php

namespace App\Filament\Resources\IndikatorResource\Pages;

use App\Filament\Resources\IndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIndikator extends CreateRecord
{
    protected static string $resource = IndikatorResource::class;
    public function getTitle(): string
    {
        return 'Tambahkan Indikator SPBE';
    }
    public function getBreadcrumb(): string
    {
        return 'Tambah'; // Gantilah dengan teks yang kamu inginkan
    }
}
