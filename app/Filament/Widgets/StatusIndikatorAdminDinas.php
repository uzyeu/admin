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
        $isSuperAdmin = $this->isSuperAdmin($user);

        if ($isSuperAdmin) {
            $totalIndikators = 47; // Atau Indikator::count()
            $updatedCount = InformasiIndikator::where('tahun', $latestYear)
                ->where('is_updated', true)
                ->count();
        } else {
            $totalIndikators = $user->indikators()->count();
            $updatedCount = $user->informasiIndikators()
                ->where('tahun', $latestYear)
                ->where('is_updated', true)
                ->count();
        }

        $progress = $totalIndikators > 0 ? round(($updatedCount / $totalIndikators) * 100, 1) : 0;

        return [
            Stat::make('Total Indikator', $totalIndikators)
                ->icon('heroicon-o-document-text')
                ->description($isSuperAdmin ? 'Total Semua Indikator' : 'Indikator Anda')
                ->color('primary')
                ->chart($this->getChartData('total', $user, $isSuperAdmin))
                ->chartColor('primary'),

            Stat::make('Progress Update', $progress . '%')
                ->description("{$updatedCount} dari {$totalIndikators}")
                ->color($this->getProgressColor($progress))
                ->icon('heroicon-o-clipboard-document-check')
                ->chart($this->getChartData('progress', $user, $isSuperAdmin))
                ->extraAttributes([
                    'class' => 'relative',
                    'x-data' => "{ progress: $progress }",
                    'x-init' => 'new ProgressCircle($el, progress)',
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
        return match (true) {
            $progress > 70 => 'success',
            $progress > 30 => 'warning',
            default => 'danger',
        };
    }

    protected function getChartData(string $type, User $user, bool $isSuperAdmin): array
    {
        $years = range(date('Y') - 4, date('Y'));

        return array_map(function ($year) use ($type, $user, $isSuperAdmin) {
            if ($isSuperAdmin) {
                return match ($type) {
                    'total' => 47, // atau Indikator::count()
                    'progress' => InformasiIndikator::where('tahun', $year)
                        ->where('is_updated', true)
                        ->count(),
                    default => 0,
                };
            } else {
                return match ($type) {
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

    protected function isSuperAdmin(User $user): bool
    {
        // Asumsinya: user dengan 'nama_dinas' NULL adalah super admin
        return is_null($user->nama_dinas);
    }
}
