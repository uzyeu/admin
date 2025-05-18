<?php

namespace App\Filament\Widgets;

use App\Models\Indikator;
use Filament\Widgets\ChartWidget;

class DistribusiIndikatorChart extends ChartWidget
{
    protected static ?string $heading = 'Distribusi Indeks Indikator Tahun 2024';
    protected static ?int $sort = 5;
    // protected static ?string $maxHeight = '300px';
    // protected int|string|array $columnSpan = 'full';
    // protected int|string|array $columnSpan = 1; // Lebar (1-12 grid columns)
    // protected static ?string $height = '200px'; // Tinggi tetap


    protected function getData(): array
    {
        // Hitung jumlah indikator per kategori indeks
        $indikators = Indikator::with(['informasiIndikators' => function($q) {
                $q->where('tahun', 2024);
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
        $persentase = array_map(fn($count) => $totalIndikator > 0 ? round(($count/$totalIndikator)*100, 2) : 0, $kategori);

        return [
            'labels' => array_keys($kategori),
            'datasets' => [
                [
                    'label' => 'Persentase Indikator',
                    'data' => array_values($persentase),
                    'backgroundColor' => [
                        '#ef4444', // Merah untuk sangat rendah
                        '#f59e0b', // Kuning untuk rendah
                        '#3b82f6', // Biru untuk sedang
                        '#86efac', // Hijau muda untuk tinggi
                        '#10b981'  // Hijau untuk sangat tinggi
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
                // 'tooltip' => [
                //     'callbacks' => [
                //         'label' => 'function(context) {
                //             return `${context.label}: ${context.raw}% (${context.dataset.originalData[context.dataIndex]} indikator)`;
                //         }'
                //     ]
                // ],
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