<?php

namespace App\Filament\Widgets;

use App\Models\EvaluasiTahun;
use App\Models\InformasiAspek;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;

class GrafikIndeksAspek extends BaseWidget
{
    public ?int $selectedYear = null;

    protected static ?string $pollingInterval = null;
    protected static ?int $sort = 2;

    public function mount(): void
{
    // Set default tahun ke 2024
    $this->selectedYear = 2024;
}

    protected function getStats(): array
    {
        $tahun = $this->selectedYear;

        // Ambil data aspek untuk tahun terpilih
        $aspeks = InformasiAspek::with('aspek')
            ->where('tahun', $tahun)
            ->get();

        // Jika tidak ada data, tampilkan pesan kosong
        if ($aspeks->isEmpty()) {
            return [
                Stat::make('Tidak ada data', '-')
                    ->description('Tahun ' . $tahun)
                    ->color('gray')
            ];
        }

        // Tampilkan data aspek
        return $aspeks->map(function ($item) {
            $namaAspek = $item->aspek->nama_aspek ?? 'Tanpa Nama';
            return Stat::make($namaAspek, number_format($item->indeks, 2))
                ->description('Tahun ' . $item->tahun)
                ->color($this->getColorBasedOnValue($item->indeks));
        })->toArray();
    }

    protected function getForm(Form $form): Form
    {
        return $form->schema([
            Select::make('selectedYear')
                ->label('Pilih Tahun')
                ->options($this->getAvailableYears())
                ->default($this->selectedYear)
                ->reactive()
                ->afterStateUpdated(function ($state) {
                    $this->selectedYear = $state;
                }),
        ]);
    }

    private function getAvailableYears(): array
    {
        // Mengambil tahun dari tabel evaluasi_tahuns
        return EvaluasiTahun::orderBy('tahun', 'desc')
            ->pluck('tahun', 'tahun')
            ->toArray();
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
