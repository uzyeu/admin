<?php

namespace App\Filament\Resources\InformasiIndikatorResource\Pages;

use App\Filament\Resources\InformasiIndikatorResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\Grid;

class ViewInformasiIndikator extends ViewRecord
{
    protected static string $resource = InformasiIndikatorResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Detail Informasi Indikator')
                    ->schema([
                        Grid::make(2)->schema([
                            TextEntry::make('indeks'),
                            TextEntry::make('tahun'),
                            TextEntry::make('jumlah_dokumen'),
                            TextEntry::make('is_updated')
                                ->label('Status')
                                ->formatStateUsing(fn ($state) => $state ? 'Sudah Diperbarui' : 'Belum'),
                        ]),
                        TextEntry::make('user.name')->label('Terakhir diperbarui oleh'),
                        TextEntry::make('indikator.nama_indikator')->label('Nama Indikator'),
                    ]),

                Section::make('Dinas yang Menaungi Indikator Ini')
                    ->schema([
                        RepeatableEntry::make('indikator.users')
                            ->schema([
                                TextEntry::make('nama_dinas')->label('Nama Dinas'),
                            ])
                            ->label('')
                            ->columnSpanFull()
                            ->visible(fn ($record) => $record->indikator && $record->indikator->users->isNotEmpty()),
                    ]),
            ]);
    }
}
