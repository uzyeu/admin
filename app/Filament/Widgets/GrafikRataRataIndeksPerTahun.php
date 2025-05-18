<?php

namespace App\Filament\Widgets;

use App\Models\InformasiAspek;
use Filament\Widgets\ChartWidget;

class GrafikRataRataIndeksPerTahun extends ChartWidget
{
    protected static ?string $heading = 'Rata-Rata Indeks Aspek SPBE';
    protected static ?int $sort = 2;
    // protected int|string|array $columnSpan = 'full';

    protected function getData(): array
    {
        // Ambil tahun yang tersedia dari tabel evaluasi_tahuns
        $tahunList = \App\Models\EvaluasiTahun::select('tahun')->orderBy('tahun', 'asc')->pluck('tahun');

        $labels = [];
        $data = [];

        // Hitung rata-rata indeks untuk setiap tahun
        foreach ($tahunList as $tahun) {
            $rataRataIndeks = InformasiAspek::where('tahun', $tahun)->avg('indeks');
            $labels[] = $tahun;
            $data[] = round($rataRataIndeks ?? 0, 2);
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Rata-Rata Indeks (%)',
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
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
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
