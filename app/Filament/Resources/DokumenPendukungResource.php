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

    protected static ?string $navigationLabel = 'Daftar Dokumen Pendukung';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('file_path')
                    ->required(),
                    // ->placeholder('Pilih dokumen pendukung'),

                Forms\Components\TextInput::make('admin_dinas_id')
                    ->required(),

                Forms\Components\TextInput::make('urutan_indikator')
                    ->required(),

                Forms\Components\TextInput::make('tahun')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('file_path'),
                Tables\Columns\TextColumn::make('admin_dinas_id'),
                Tables\Columns\TextColumn::make('urutan_indikator'),
                Tables\Columns\TextColumn::make('tahun'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
