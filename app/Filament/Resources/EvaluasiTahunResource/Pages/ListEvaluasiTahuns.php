<?php

namespace App\Filament\Resources\EvaluasiTahunResource\Pages;

use App\Filament\Resources\EvaluasiTahunResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Widgets\GrafikIndeksSPBEdiresource;


class ListEvaluasiTahuns extends ListRecords
{
    protected static string $resource = EvaluasiTahunResource::class;

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
        protected function getHeaderWidgets(): array
    {
        return [
            GrafikIndeksSPBEdiresource::class,
        ];
    }
}
