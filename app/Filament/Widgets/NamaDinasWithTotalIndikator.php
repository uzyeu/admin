<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class NamaDinasWithTotalIndikator extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?string $heading = 'Daftar Dinas dan Status Indikator';
    protected static ?int $sort = 1;

    protected function getLatestYear()
    {
        return \App\Models\InformasiIndikator::max('tahun') ?? date('Y');
    }

    public function table(Table $table): Table
    {
        $latestYear = $this->getLatestYear();

        return $table
            ->query(
                User::query()
                    ->where('role', 'admin_dinas')
                    ->withCount(['indikators as total_indikators'])
                    ->withCount([
                        'indikators as updated_indikators' => function(Builder $query) use ($latestYear) {
                            $query->whereHas('informasiIndikators', function($q) use ($latestYear) {
                                $q->where('tahun', $latestYear)
                                  ->where('is_updated', true);
                            });
                        },
                        'indikators as not_updated_indikators' => function(Builder $query) use ($latestYear) {
                            $query->whereHas('informasiIndikators', function($q) use ($latestYear) {
                                $q->where('tahun', $latestYear)
                                  ->where('is_updated', false);
                            })->orWhereDoesntHave('informasiIndikators', function($q) use ($latestYear) {
                                $q->where('tahun', $latestYear);
                            });
                        }
                    ])
                    ->orderBy('total_indikators', 'desc')
            )
            ->columns([
                Tables\Columns\TextColumn::make('nama_dinas')
                    ->label('Nama Dinas')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('total_indikators')
                    ->label('Total Indikator')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('updated_indikators')
                    ->label('Indikator Terupdate')
                    ->sortable()
                    ->color('success'),
                    
                Tables\Columns\TextColumn::make('not_updated_indikators')
                    ->label('Indikator Belum Update')
                    ->sortable()
                    ->color('danger'),
            ])
        ;
    }
}