<?php

namespace App\Filament\Widgets;

use App\Models\Indikator;
use Filament\Widgets\ChartWidget;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;
use Filament\Widgets\Concerns\InteractsWithPageFilters;

class IndikatorIndeksChart extends ChartWidget
{
    use InteractsWithPageFilters;
    use HasWidgetShield;


    protected static ?int $sort = 7;
    protected int|string|array $columnSpan = 'full';

    public function getHeading(): ?string
    {
        $tahun = $this->filters['tahun'] ?? date('Y');
        return "Indeks Indikator Tahun $tahun";
    }

    protected function getData(): array
    {
        $tahun = $this->filters['tahun'] ?? date('Y');

        $indikators = Indikator::orderBy('urutan_indikator')
            ->with(['informasiIndikators' => fn($q) => $q->where('tahun', $tahun)])
            ->get();

        $labels = [];
        $data = [];
        $tooltips = [];

        foreach ($indikators as $indikator) {
            $labels[] = 'Indikator ' . $indikator->urutan_indikator;
            $tooltips[] = $indikator->nama_indikator;

            $indeks = $indikator->informasiIndikators->first()?->indeks ?? 0;
            $data[] = is_numeric($indeks) ? (float) $indeks : 0;
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Indeks',
                    'data' => $data,
                    'backgroundColor' => '#3b82f6',
                    'borderColor' => '#1d4ed8',
                    'borderWidth' => 1,
                    // 'tooltips' is not natively supported like this,
                    // you can handle tooltip customization in JS via getOptions
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'responsive' => true,
            'plugins' => [
                'tooltip' => [
                    'callbacks' => [
                        'title' => 'function(tooltipItems) {
                            return tooltipItems[0].label;
                        }',
                        'label' => 'function(tooltipItem) {
                            return "Indeks: " + tooltipItem.raw;
                        }'
                    ]
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'max' => 5,
                    'ticks' => [
                        'stepSize' => 1,
                    ],
                ],
                'x' => [
                    'ticks' => [
                        'autoSkip' => false,
                    ],
                ],
            ],
        ];
    }
}
