<?php

namespace App\Filament\Widgets;

use App\Models\Indikator;
use Filament\Widgets\ChartWidget;

class IndikatorIndeksChart extends ChartWidget
{
    protected static ?string $heading = 'Indeks Indikator Tahun 2024';
    protected static ?int $sort = 7;
    protected int|string|array $columnSpan = 'full';

    protected function getData(): array
    {
        $indikators = Indikator::orderBy('urutan_indikator')
            ->with(['informasiIndikators' => fn($q) => $q->where('tahun', 2024)])
            ->get();

        $labels = [];
        $data = [];
        $tooltips = []; // Untuk menyimpan nama lengkap

        foreach ($indikators as $indikator) {
            $labels[] = 'Indikator ' . $indikator->urutan_indikator; // Format: "Indikator 1"
            $tooltips[] = $indikator->nama_indikator; // Simpan nama lengkap
            
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
                    'tooltips' => $tooltips, // Untuk tooltip
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