<?php

namespace App\Filament\Widgets;

use App\Models\AdminDinas;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class NamaDinasWithTotalIndikator extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?string $heading = 'Daftar Dinas dan Total Indikator';
    protected static ?int $sort = 999; 

    function table(Table $table): Table
    {
        return $table
            ->query(
                AdminDinas::query()
                    ->withCount('indikators')
                    ->orderBy('indikators_count', 'desc')
            )
            ->defaultPaginationPageOption(10)
            ->columns([
                Tables\Columns\TextColumn::make('nama_dinas')
                    ->label('Nama Dinas')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('indikators_count')
                    ->label('Total Indikator')
                    ->sortable(),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }
}
