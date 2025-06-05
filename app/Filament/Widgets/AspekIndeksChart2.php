<?php

namespace App\Filament\Widgets;

use App\Models\Aspek;
use Filament\Widgets\ChartWidget;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;

use Filament\Widgets\Concerns\InteractsWithPageFilters;

class AspekIndeksChart2 extends ChartWidget
{
    use InteractsWithPageFilters;
    use HasWidgetShield;


    protected static ?string $heading = null; // Nanti kita generate berdasarkan tahun
    protected static ?int $sort = 6;
    protected int|string|array $columnSpan = 'full';

    public function getHeading(): ?string
    {
        $tahun = $this->filters['tahun'] ?? date('Y');
        return "Indeks Aspek Tahun $tahun";
    }

    protected function getData(): array
    {
        $tahun = $this->filters['tahun'] ?? date('Y');

        $aspeks = Aspek::orderBy('urutan_aspek')
            ->with(['informasiAspeks' => fn($q) => $q->where('tahun', $tahun)])
            ->get();

        $labels = [];
        $data = [];

        foreach ($aspeks as $aspek) {
            $labels[] = 'Aspek ' . $aspek->id;
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
        return 'bar';
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
