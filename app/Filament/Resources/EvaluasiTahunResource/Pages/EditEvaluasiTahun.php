<?php

namespace App\Filament\Resources\EvaluasiTahunResource\Pages;

use App\Filament\Resources\EvaluasiTahunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEvaluasiTahun extends EditRecord
{
    protected static string $resource = EvaluasiTahunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Edit Hasil Evaluasi';
    }
}
