<?php

namespace App\Filament\Resources\DinasIndikatorResource\Pages;

use App\Filament\Resources\DinasIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDinasIndikators extends ListRecords
{
    protected static string $resource = DinasIndikatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
