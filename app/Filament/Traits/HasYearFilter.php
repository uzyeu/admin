<?php

namespace App\Filament\Traits;

use Filament\Forms;
use Filament\Forms\Components\Select;

trait HasYearFilter 
{
    public ?string $filterYear = '2024';

    protected function getFilterForm(): array
    {
        return [
            Select::make('filterYear')
                ->label('Tahun')
                ->options([
                    '2023' => '2023',
                    '2024' => '2024',
                    '2025' => '2025',
                ])
                ->default('2024')
                ->reactive()
                ->afterStateUpdated(function ($state) {
                    $this->filterYear = $state;
                    $this->updateChartData();
                }),
        ];
    }
}