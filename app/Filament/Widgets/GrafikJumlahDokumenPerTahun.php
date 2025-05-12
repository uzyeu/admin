<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\DokumenPendukung;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GrafikJumlahDokumenPerTahun extends BarChartWidget
{
    protected static ?string $heading = 'Jumlah Dokumen per Indikator';
    protected static ?int $sort = 2;
    protected static string $chartId = 'grafik-dokumen-indikator';

    protected function getData(): array
    {
        // Ambil filter tahun dari dashboard, jika tidak ada pakai tahun sekarang
        $tahun = $this->filters['tahun'] ?? date('Y');

        // Query data berdasarkan tahun
        $data = DokumenPendukung::select('urutan_indikator', DB::raw('COUNT(*) as total'))
            ->whereYear('created_at', $tahun)
            ->groupBy('urutan_indikator')
            ->with('indikator')
            ->get();

        // Buat label dengan urutan indikator dan nama terpotong
        $labels = [];
        $fullLabels = [];
        foreach ($data as $item) {
            $urutan = $item->urutan_indikator;
            $nama = $item->indikator->nama_indikator;
            $shortLabel = "{$urutan}. " . Str::limit($nama, 7, '...');
            $labels[] = $shortLabel;
            $fullLabels[] = "{$urutan}. {$nama}";
        }

        $values = $data->pluck('total')->map(fn($value) => (int) $value)->toArray();

        return [
            'datasets' => [
                [
                    'label' => "Jumlah Dokumen Tahun $tahun",
                    'data' => $values,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.6)',
                ],
            ],
            'labels' => $labels,
            'options' => [
                'responsive' => true,
                'maintainAspectRatio' => false,
                'scales' => [
                    'x' => [
                        'ticks' => ['autoSkip' => false],
                        'grid' => ['display' => false],
                    ],
                    'y' => [
                        'beginAtZero' => true,
                        'grid' => ['display' => true],
                    ],
                ],
                'plugins' => [
                    'legend' => ['display' => true],
                    'tooltip' => [
                        'callbacks' => [
                            'title' => "function(tooltipItems) {
                                const index = tooltipItems[0].dataIndex;
                                const fullLabels = " . json_encode($fullLabels) . ";
                                return fullLabels[index] || tooltipItems[0].label;
                            }",
                        ],
                    ],
                ],
            ],
        ];
    }
}
