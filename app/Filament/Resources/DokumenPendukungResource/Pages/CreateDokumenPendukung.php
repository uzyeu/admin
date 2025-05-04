<?php

namespace App\Filament\Resources\DokumenPendukungResource\Pages;

use App\Filament\Resources\DokumenPendukungResource;
use Filament\Resources\Pages\Page;

class CreateDokumenPendukung extends Page
{
    protected static string $resource = DokumenPendukungResource::class;

    protected static string $view = 'filament.resources.dokumen-pendukung-resource.pages.create-dokumen-pendukung';
}
