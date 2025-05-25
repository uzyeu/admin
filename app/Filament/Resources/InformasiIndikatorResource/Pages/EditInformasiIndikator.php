<?php

namespace App\Filament\Resources\InformasiIndikatorResource\Pages;

use App\Filament\Resources\InformasiIndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;


class EditInformasiIndikator extends EditRecord
{
    protected static string $resource = InformasiIndikatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    public function getTitle(): string
    {
        return 'Edit Informasi Indikator';
    }
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $user = Auth::user();

        // Jika user adalah admin dinas (nama_dinas tidak null),
        // batasi data yang bisa disimpan hanya kolom is_updated
        if (!is_null($user->nama_dinas)) {
            return [
                'is_updated' => $data['is_updated'],
            ];
        }

        // Jika super admin, simpan semua data
        return $data;
    }
}
