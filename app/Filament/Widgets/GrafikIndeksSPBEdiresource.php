<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;
use App\Models\EvaluasiTahun;

class GrafikIndeksSPBEdiresource extends LineChartWidget
{
    protected static ?string $heading = 'Grafik Indeks SPBE';
    protected static ?int $sort = 2;
    protected int|string|array $columnSpan = 'full';

    protected static string $chartId = 'grafik-indeks-spbe';

    public static function isDiscovered(): bool
    {
        return false; // Tidak akan muncul di dashboard
    }

    protected function getData(): array
    {
        // Ambil data indeks akumulasi per tahun dari tabel evaluasi_tahuns
        $data = EvaluasiTahun::orderBy('tahun')->get(['tahun', 'indeks_akumulasi']);
        
        // Pisahkan label (tahun) dan data (indeks_akumulasi)
        $labels = $data->pluck('tahun')->toArray();
        $values = $data->pluck('indeks_akumulasi')->toArray();
        


        return [
            'datasets' => [
                [
                    'label' => 'Indeks SPBE',
                    'data' => $values,
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0)',
                    'fill' => true,
                    'tension' => 0.3,
                ],
            ],
            'labels' => $labels,
            'options' => [
                'responsive' => true,
                'maintainAspectRatio' => false,
                'plugins' => [
                    'legend' => [
                        'display' => true,
                        'position' => 'top',
                    ],
                    'tooltip' => [
                        'enabled' => true,
                    ],
                ],
                'scales' => [
                    'y' => [
                        'beginAtZero' => true,
                        'grid' => ['display' => true],
                    ],
                    'x' => [
                        'grid' => ['display' => false],
                    ],
                ],
            ],
        ];
    }
}
