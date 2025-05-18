<?php

namespace App\Filament\Resources\InformasiAspekResource\Pages;

use App\Filament\Resources\InformasiAspekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformasiAspek extends EditRecord
{
    protected static string $resource = InformasiAspekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    public function getTitle(): string
    {
        return 'Edit Informasi Aspek';
    }
}
