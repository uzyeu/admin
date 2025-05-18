<?php

namespace App\Filament\Resources\AspekResource\Pages;

use App\Filament\Resources\AspekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAspeks extends ListRecords
{
    protected static string $resource = AspekResource::class;

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
    // public function getTitle(): string
    // {
    //     return 'Daftar Aspek SPBE';
    // }
}
