<?php

namespace App\Filament\Resources\AdminDinasResource\Pages;

use App\Filament\Resources\AdminDinasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdminDinas extends EditRecord
{
    protected static string $resource = AdminDinasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
