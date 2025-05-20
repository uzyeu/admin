<?php

namespace App\Filament\Resources\IndikatorResource\Pages;

use App\Filament\Resources\IndikatorResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Actions\EditAction;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\Grid;

class ViewIndikator extends ViewRecord
{
    protected static string $resource = IndikatorResource::class;
    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
    

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Detail Indikator')
                    ->schema([
                        Grid::make(2)->schema([
                            TextEntry::make('urutan_indikator')->label('Urutan'),
                            TextEntry::make('nama_indikator')->label('Nama Indikator'),
                        ]),
                        // TextEntry::make('deskripsi')->label('Deskripsi')->columnSpanFull(),
                        TextEntry::make('aspek.nama_aspek')->label('Aspek Terkait'),
                    ]),
                Section::make('Deskripsi')
                    ->schema([
                        TextEntry::make('deskripsi')->label('')->columnSpanFull(),
                    ]),

                Section::make('Dinas yang Menaungi')
                    ->schema([
                        RepeatableEntry::make('users')
                            ->schema([
                                TextEntry::make('nama_dinas')->label('Nama Dinas'),
                                // TextEntry::make('name')->label('Nama User'),
                            ])
                            ->columnSpanFull()
                            ->label('')
                            ->visible(fn ($record) => $record->users->isNotEmpty()),
                    ]),
            ]);
    }
}
