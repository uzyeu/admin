<?php
namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\DokumenPendukung;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\DB;

class GrafikJumlahDokumenPerTahun extends BarChartWidget
{
    protected static ?string $heading = 'Jumlah Dokumen per Indikator';
    protected static ?int $sort = 2;

    protected static string $chartId = 'grafik-dokumen-indikator';

    // Ambil filter dari dashboard (misalnya 'tahun')
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

        $labels = $data->pluck('indikator.nama_indikator');
        $values = $data->pluck('total');

        return [
            'datasets' => [
                [
                    'label' => "Jumlah Dokumen Tahun $tahun",
                    'data' => $values,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.6)',
                ],
            ],
            'labels' => $labels,
        ];
    }
}

