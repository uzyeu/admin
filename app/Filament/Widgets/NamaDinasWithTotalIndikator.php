<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Filters\SelectFilter;

class NamaDinasWithTotalIndikator extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?string $heading = 'Daftar Dinas dan Total Indikator';
    protected static ?int $sort = 4;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                User::query()
                    ->where('role', 'admin_dinas')
                    ->withCount('indikators')
                    ->orderBy('indikators_count', 'desc')
            )
            ->columns([
                Tables\Columns\TextColumn::make('nama_dinas')
                    ->label('Nama Dinas')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('indikators_count')
                    ->label('Total Indikator')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('dokumenPendukungs_count')
                    ->label('Dokumen Terupload')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('tahun')
                    ->options(
                        fn() => \App\Models\DokumenPendukung::query()
                            ->select('tahun')
                            ->distinct()
                            ->pluck('tahun', 'tahun')
                            ->toArray()
                    )
                    ->label('Filter Tahun Dokumen'),
            ]);
    }
}