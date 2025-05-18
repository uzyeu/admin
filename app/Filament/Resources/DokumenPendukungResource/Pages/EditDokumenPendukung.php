<?php

namespace App\Filament\Resources\DokumenPendukungResource\Pages;

use App\Filament\Resources\DokumenPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenPendukung extends EditRecord
{
    protected static string $resource = DokumenPendukungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    public function getTitle(): string
    {
        return 'Edit Dokumen Pendukung';
    }
}
