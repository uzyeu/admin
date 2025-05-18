<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\GrafikIndeksAspek;
use App\Models\DokumenPendukung;

class Dashboard extends BaseDashboard
{
    use BaseDashboard\Concerns\HasFiltersForm;

    //     protected function getHeaderWidgets(): array
    // {
    //     return [
    //         \App\Filament\Widgets\CustomChartWidget::class,

    //     ];
    // }

    public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
                // Section::make()
                //     ->schema([
                //         Select::make('tahun')
                //             ->label('Pilih Tahun')
                //             ->options($this->getAvailableYears())
                //             ->default(date('Y')),
                //         // Select::make('businessCustomersOnly')->boolean(),
                //         // DatePicker::make('startDate')
                //         //     ->maxDate(fn (Get $get) => $get('endDate') ?: now()),
                //         // DatePicker::make('endDate')
                //         //     ->minDate(fn (Get $get) => $get('startDate') ?: now())
                //         //     ->maxDate(now()),
                //     ])
                //     ->columns(3),
            ]);
    }
    //     protected function getHeaderWidgets(): array
    // {
    //     return [
    //         GrafikJumlahDokumenPerTahun::class,
    //     ];
    // }
//     protected function getAvailableYears(): array
// {
//     return DokumenPendukung::selectRaw('YEAR(created_at) as tahun')
//         ->distinct()
//         ->orderBy('tahun', 'desc')
//         ->pluck('tahun', 'tahun')
//         ->toArray();
// }
}