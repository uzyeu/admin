<?php

namespace App\Filament\Resources\InformasiIndikatorResource\Pages;

use App\Filament\Resources\InformasiIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasiIndikators extends ListRecords
{
    protected static string $resource = InformasiIndikatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
