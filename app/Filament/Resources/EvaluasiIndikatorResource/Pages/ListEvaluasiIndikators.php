<?php

namespace App\Filament\Resources\EvaluasiIndikatorResource\Pages;

use App\Filament\Resources\EvaluasiIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvaluasiIndikators extends ListRecords
{
    protected static string $resource = EvaluasiIndikatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
