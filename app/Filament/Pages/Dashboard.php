<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\AspekIndeksChart;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class Dashboard extends BaseDashboard
{
    use HasFiltersForm;

    public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Select::make('tahun')
                            ->label('Pilih Tahun')
                            ->options([
                                2023 => '2023',
                                2024 => '2024',
                            ])
                            ->default(date('Y')),
                    ])
                    ->columns(3),
            ]);
    }

    // protected function getHeaderWidgets(): array
    // {
    //     return [
    //         AspekIndeksChart::class,
    //     ];
    // }
}