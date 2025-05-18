<?php

namespace App\Filament\Resources\DinasIndikatorResource\Pages;

use App\Filament\Resources\DinasIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDinasIndikators extends ListRecords
{
    protected static string $resource = DinasIndikatorResource::class;
    public function getBreadcrumb(): string
    {
        return 'Daftar'; // Gantilah dengan teks yang kamu inginkan
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
