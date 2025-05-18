<?php

namespace App\Filament\Widgets;

use App\Models\InformasiIndikator;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class IndikatorStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected static ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
            $latestYear = InformasiIndikator::max('tahun') ?? date('Y');
    $totalIndikators = 47;
    $updatedCount = InformasiIndikator::where('tahun', $latestYear)
                    ->where('is_updated', true)
                    ->count();
    $progress = round(($updatedCount/$totalIndikators)*100, 1);

    return [
        Stat::make('Total Indikator', $totalIndikators)
            ->icon('heroicon-o-document-text')
            ->description('Total Indikator SPBE')
            ->color('primary')
            ->chart([7, 10, 15, 12, 8, 15])
            ->chartColor('primary'),

        Stat::make('Progress Update', $progress.'%')
            ->description("{$updatedCount} dari {$totalIndikators} indikator")
            ->color($progress > 70 ? 'success' : ($progress > 30 ? 'warning' : 'danger'))
            ->icon('heroicon-o-clipboard-document-check')
            ->chart([40, 60, 75, 80, $progress])
            ->extraAttributes([
                'class' => 'relative',
                'x-data' => "{ progress: $progress }",
                'x-init' => 'new ProgressCircle($el, progress)'
            ]),

        Stat::make('Indikator Terupdate', $updatedCount)
            ->icon('heroicon-o-check-badge')
            ->description("Tahun {$latestYear}")
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->extraAttributes(['class' => 'border-l-2 border-success-500 pl-2']),

        Stat::make('Belum Update', $totalIndikators - $updatedCount)
            ->icon('heroicon-o-exclamation-triangle')
            ->description("Tahun {$latestYear}")
            ->color('danger')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->extraAttributes(['class' => 'border-l-2 border-danger-500 pl-2']),
    ];
    }

    protected function getLatestYear()
    {
        return InformasiIndikator::max('tahun') ?? date('Y');
    }
}