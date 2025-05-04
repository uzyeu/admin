<?php

namespace App\Filament\Resources\DokumenPendukungResource\Pages;

use App\Filament\Resources\DokumenPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenPendukungs extends ListRecords
{
    protected static string $resource = DokumenPendukungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
