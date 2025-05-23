<?php

namespace App\Filament\Widgets;

use App\Models\InformasiIndikator;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class StatusIndikatorAdminDinas extends BaseWidget
{
    protected static ?int $sort = 0;
    protected static ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        $user = Auth::user();
        $latestYear = $this->getLatestYear();
        
        // Jika super_admin, hitung semua indikator
        if ($user->role === 'super_admin') {
            $totalIndikators = 47; // Atau ganti dengan Indikator::count() jika dinamis
            $updatedCount = InformasiIndikator::where('tahun', $latestYear)
                            ->where('is_updated', true)
                            ->count();
        } 
        // Jika admin_dinas, hitung hanya indikator yang menjadi tanggung jawabnya
        else {
            $totalIndikators = $user->indikators()->count();
            $updatedCount = $user->informasiIndikators()
                            ->where('tahun', $latestYear)
                            ->where('is_updated', true)
                            ->count();
        }
        
        $progress = $totalIndikators > 0 ? round(($updatedCount/$totalIndikators)*100, 1) : 0;

        return [
            Stat::make('Total Indikator', $totalIndikators)
                ->icon('heroicon-o-document-text')
                ->description($user->role === 'super_admin' ? 'Total Semua Indikator' : 'Indikator Anda')
                ->color('primary')
                ->chart($this->getChartData('total', $user))
                ->chartColor('primary'),

            Stat::make('Progress Update', $progress.'%')
                ->description("{$updatedCount} dari {$totalIndikators}")
                ->color($this->getProgressColor($progress))
                ->icon('heroicon-o-clipboard-document-check')
                ->chart($this->getChartData('progress', $user))
                ->extraAttributes([
                    'class' => 'relative',
                    'x-data' => "{ progress: $progress }",
                    'x-init' => 'new ProgressCircle($el, progress)'
                ]),

            Stat::make('Indikator Terupdate', $updatedCount)
                ->icon('heroicon-o-check-badge')
                ->description("Tahun {$latestYear}")
                ->color('success')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),

            Stat::make('Belum Update', max(0, $totalIndikators - $updatedCount))
                ->icon('heroicon-o-exclamation-triangle')
                ->description("Tahun {$latestYear}")
                ->color('danger')
                ->descriptionIcon('heroicon-m-arrow-trending-down'),
        ];
    }

    protected function getLatestYear(): int
    {
        return InformasiIndikator::max('tahun') ?? date('Y');
    }

    protected function getProgressColor(float $progress): string
    {
        return match(true) {
            $progress > 70 => 'success',
            $progress > 30 => 'warning',
            default => 'danger',
        };
    }

    protected function getChartData(string $type, User $user): array
    {
        $years = range(date('Y')-4, date('Y')); // 5 tahun terakhir
        
        return array_map(function($year) use ($type, $user) {
            if ($user->role === 'super_admin') {
                return match($type) {
                    'total' => 47, // Atau Indikator::count()
                    'progress' => InformasiIndikator::where('tahun', $year)
                                    ->where('is_updated', true)
                                    ->count(),
                    default => 0,
                };
            } else {
                return match($type) {
                    'total' => $user->indikators()->count(),
                    'progress' => $user->informasiIndikators()
                                    ->where('tahun', $year)
                                    ->where('is_updated', true)
                                    ->count(),
                    default => 0,
                };
            }
        }, $years);
    }
}