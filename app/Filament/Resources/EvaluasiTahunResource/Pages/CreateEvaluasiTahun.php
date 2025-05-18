<?php

namespace App\Filament\Resources\EvaluasiTahunResource\Pages;

use App\Filament\Resources\EvaluasiTahunResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEvaluasiTahun extends CreateRecord
{
    protected static string $resource = EvaluasiTahunResource::class;
    public function getTitle(): string
    {
        return 'Tambahkan Hasil Evaluasi';
    }
    public function getBreadcrumb(): string
    {
        return 'Tambah'; // Gantilah dengan teks yang kamu inginkan
    }
}
