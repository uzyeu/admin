<?php

namespace App\Filament\Resources\DinasIndikatorResource\Pages;

use App\Filament\Resources\DinasIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDinasIndikator extends EditRecord
{
    protected static string $resource = DinasIndikatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
