<?php

namespace App\Filament\Resources\InformasiAspekResource\Pages;

use App\Filament\Resources\InformasiAspekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasiAspeks extends ListRecords
{
    protected static string $resource = InformasiAspekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getBreadcrumb(): string
    {
        return 'Daftar'; // Gantilah dengan teks yang kamu inginkan
    }
}
