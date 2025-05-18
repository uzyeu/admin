<?php

namespace App\Filament\Widgets;

use App\Models\Aspek;
use Filament\Widgets\ChartWidget;

class AspekIndeksChart extends ChartWidget
{
    protected static ?string $heading = 'Indeks Aspek Tahun 2024';
    protected static ?int $sort = 4;
    // protected static ?string $maxHeight = '300px';

    // protected int|string|array $columnSpan = 'full';

    protected function getData(): array
    {
        $aspeks = Aspek::orderBy('urutan_aspek')
            ->with(['informasiAspeks' => fn($q) => $q->where('tahun', 2024)])
            ->get();

        $labels = [];
        $data = [];

        foreach ($aspeks as $aspek) {
            $labels[] = 'Aspek ' . $aspek->id; // Hanya menampilkan ID di sumbu X
            
            $indeks = $aspek->informasiAspeks->first()?->indeks ?? 0;
            $data[] = is_numeric($indeks) ? (float) $indeks : 0;
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Indeks Aspek',
                    'data' => $data,
                    'backgroundColor' => '#3b82f6',
                    'borderColor' => '#1d4ed8',
                    'borderWidth' => 1,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'radar';
    }

    protected function getOptions(): array
    {
        $maxValue = max($this->getData()['datasets'][0]['data'] ?? [0]) + 1;
        $maxValue = max($maxValue, 5); 

        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'max' => $maxValue,
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
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
            ],
        ];
    }
}