<?php

namespace App\Filament\Resources\BeritaResource\Pages;

use App\Filament\Resources\BeritaResource;
use Filament\Actions;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewBerita extends ViewRecord
{
    protected static string $resource = BeritaResource::class;
    public function getBreadcrumb(): string
    {
        return 'Lihat'; // Gantilah dengan teks yang kamu inginkan
    }
    public function getTitle(): string
    {
        return 'Lihat Berita';
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Informasi Berita')
                    ->columns(3) // Membagi menjadi 3 kolom
                    ->schema([
                        TextEntry::make('judul')
                            ->label('Judul Berita')
                            ->size('text-xl')
                            ->weight('font-bold')
                            ->columnSpan(3), // Ambil seluruh lebar
                            
                        TextEntry::make('author')
                            ->label('Penulis')
                            ->icon('heroicon-o-user'),
                            
                        ImageEntry::make('gambar')
                            ->label('Gambar Utama')
                            ->columnSpan(2) // Ambil dua kolom dari tiga
                            ->extraImgAttributes([
                                'class' => 'rounded-lg max-h-[70vh] object-contain w-full'
                            ]),
                    ]),
                    
                Section::make('Konten Berita')
                    ->schema([
                        TextEntry::make('isi_konten')
                            ->label('')
                            ->columnSpanFull()
                            ->prose()
                            ->markdown()
                            ->extraAttributes([
                                'class' => 'max-w-none'
                            ]),
                    ])
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
