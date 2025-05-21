<?php

namespace App\Filament\Resources\AspekResource\Pages;

use App\Filament\Resources\AspekResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Actions\EditAction;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\RepeatableEntry;

class ViewAspek extends ViewRecord
{
    protected static string $resource = AspekResource::class;
    protected function beforeFill(): void
    {
        $this->record->load('indikators.users');
    }
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
                Section::make('Informasi Aspek')
                    ->schema([
                        \Filament\Infolists\Components\Grid::make(2)
                            ->schema([
                                TextEntry::make('urutan_aspek')->label('Urutan Aspek'),
                                TextEntry::make('nama_aspek')->label('Nama Aspek'),
                                
                            ]),
                    ]),

                Section::make('Indikator Terkait')
                    ->collapsible() // ini membuat section bisa di-expand/collapse
                    ->collapsed() 
            
                
            ->schema([
                RepeatableEntry::make('indikators')
                    ->label('')
                    ->schema([
                        // Urutan & Nama Indikator horizontal (2 kolom)
                        \Filament\Infolists\Components\Grid::make(2)
                        
                            ->schema([
                                TextEntry::make('urutan_indikator')->label('Urutan Indikator'),
                                TextEntry::make('nama_indikator')->label('Nama Indikator'),
                            ]),

                        // Daftar dinas (users)
                        RepeatableEntry::make('users')
                            ->label('Dinas yang Menaungi')
                            ->schema([
                                TextEntry::make('nama_dinas')->label(''),
                                // Jika ingin menampilkan nama user juga:
                                // TextEntry::make('name')->label('Nama User'),
                            ])
                            ->columnSpanFull()
                            ->visible(fn ($record) => $record->users->isNotEmpty()),
                    ])
                    ->columnSpanFull(),
            ]),
            ]);
    }

}
