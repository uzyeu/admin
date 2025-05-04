<?php

namespace App\Filament\Resources\EvaluasiTahunResource\Pages;

use App\Filament\Resources\EvaluasiTahunResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvaluasiTahuns extends ListRecords
{
    protected static string $resource = EvaluasiTahunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
