<?php

namespace App\Filament\Widgets;

use App\Models\Indikator;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;


class DistribusiIndikatorChart extends ChartWidget
{
    use InteractsWithPageFilters;

    protected static ?string $heading = null; // Kita set dinamis di bawah
    protected static ?int $sort = 5;

    public function getHeading(): ?string
    {
        $tahun = $this->filters['tahun'] ?? date('Y');
        return "Distribusi Indeks Indikator Tahun $tahun";
    }

    protected function getData(): array
    {
        $tahun = $this->filters['tahun'] ?? date('Y');

        $indikators = Indikator::with(['informasiIndikators' => function($q) use ($tahun) {
                $q->where('tahun', $tahun);
            }])
            ->get();
        
        $kategori = [
            '1 (Kurang)' => 0,
            '2 (Cukup)' => 0,
            '3 (Baik)' => 0,
            '4 (Sangat Baik)' => 0,
            '5 (Memuaskan)' => 0
        ];

        foreach ($indikators as $indikator) {
            $indeks = $indikator->informasiIndikators->first()?->indeks ?? 0;
            $kategoriKey = match(true) {
                $indeks >= 4.2 => '5 (Memuaskan)',
                $indeks >= 3.5 => '4 (Sangat Baik)',
                $indeks >= 2.6 => '3 (Baik)',
                $indeks >= 1.8 => '2 (Cukup)',
                default => '1 (Kurang)'
            };
            $kategori[$kategoriKey]++;
        }

        $totalIndikator = array_sum($kategori);
        $persentase = array_map(fn($count) => $totalIndikator > 0 ? round(($count / $totalIndikator) * 100, 2) : 0, $kategori);

        return [
            'labels' => array_keys($kategori),
            'datasets' => [
                [
                    'label' => 'Persentase Indikator',
                    'data' => array_values($persentase),
                    'backgroundColor' => [
                        '#ef4444', // Kurang
                        '#f59e0b', // Cukup
                        '#3b82f6', // Baik
                        '#86efac', // Sangat Baik
                        '#10b981'  // Memuaskan
                    ],
                    'borderColor' => '#fff',
                    'borderWidth' => 2,
                    'hoverOffset' => 10
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }

    protected function getOptions(): array
    {
        return [
            'responsive' => true,
            'plugins' => [
                'legend' => [
                    'position' => 'right',
                    'labels' => [
                        'boxWidth' => 12,
                        'padding' => 15,
                        'usePointStyle' => true
                    ]
                ],
                'datalabels' => [
                    'formatter' => 'function(value) {
                        return value > 5 ? value + "%" : "";
                    }',
                    'color' => '#fff',
                    'font' => [
                        'weight' => 'bold'
                    ]
                ]
            ],
            'cutout' => '60%'
        ];
    }
}
