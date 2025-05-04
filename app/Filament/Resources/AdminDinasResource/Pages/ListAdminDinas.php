<?php

namespace App\Filament\Resources\AdminDinasResource\Pages;

use App\Filament\Resources\AdminDinasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdminDinas extends ListRecords
{
    protected static string $resource = AdminDinasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
