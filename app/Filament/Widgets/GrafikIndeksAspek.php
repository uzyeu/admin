<?php

namespace App\Filament\Widgets;

use App\Models\InformasiAspek;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GrafikIndeksAspek extends BaseWidget
{
    protected static ?string $pollingInterval = null; // Nonaktifkan auto-refresh
    protected static ?int $sort = 2; // Urutan tampil widget
    

    protected function getStats(): array
    {
    $tahunAktif = now()->year;
    $aspeks = InformasiAspek::with('aspek')
        ->where('tahun', $tahunAktif)
        ->get();

    // Jika tidak ada data, tampilkan stat kosong
    if ($aspeks->isEmpty()) {
        return [
            Stat::make('Tidak ada data', '-')
                ->description('Tahun ' . $tahunAktif)
                ->color('gray')
        ];
    }

    return $aspeks->map(function ($item) {
        // ... kode sebelumnya ...
    })->toArray();
    }

    private function getColorBasedOnValue(float $value): string
    {
        return match (true) {
            $value >= 80 => 'success',
            $value >= 60 => 'primary',
            $value >= 40 => 'warning',
            default => 'danger',
        };
    }
}