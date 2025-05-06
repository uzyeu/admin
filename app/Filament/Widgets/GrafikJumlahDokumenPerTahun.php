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

    public ?string $tahun = null;

    protected function getFormSchema(): array
    {
        return [
            Select::make('tahun')
                ->label('Pilih Tahun')
                ->options($this->getAvailableYears())
                ->default(date('Y'))
                ->reactive()
        ];
    }

    protected function getAvailableYears(): array
    {
        return DokumenPendukung::selectRaw('YEAR(created_at) as tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun', 'tahun')
            ->toArray();
    }

    protected function getData(): array
    {
        $tahun = $this->getFilters('tahun') ?? date('Y');
    
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

    protected static string $chartId = 'grafik-dokumen-indikator';
}
