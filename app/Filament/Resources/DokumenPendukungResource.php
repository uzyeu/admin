<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenPendukungResource\Pages;
use App\Models\DokumenPendukung;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DokumenPendukungResource extends Resource
{
    protected static ?string $model = DokumenPendukung::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Menambahkan komponen untuk upload file
                Forms\Components\FileUpload::make('dokumen_pendukung')
                    ->required() // Pastikan field ini wajib diisi
                    ->panelLayout('grid') // Mengatur layout panel
                    ->disk('public') // Menyimpan file ke disk public
                    ->directory('dokumen_pendukung') // Menyimpan file ke folder 'dokumen_pendukung'
                    ->acceptedFileTypes(['application/pdf', 'image/*']) // Menyaring tipe file yang diterima
                    ->afterStateUpdated(function ($state, callable $set) {
                        // Setelah file diupload, set nama file ke field 'dokumen_pendukung'
                        if ($state) {
                            $set('dokumen_pendukung', $state->getFilename());
                        }
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Anda dapat menambahkan kolom-kolom lain sesuai kebutuhan
            ])
            ->filters([
                // Filter yang dapat diterapkan pada tabel
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Anda bisa menambahkan hubungan model jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDokumenPendukungs::route('/'),
            'create' => Pages\CreateDokumenPendukung::route('/create'),
            'edit' => Pages\EditDokumenPendukung::route('/{record}/edit'),
        ];
    }
}
