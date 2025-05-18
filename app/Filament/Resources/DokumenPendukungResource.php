<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenPendukungResource\Pages;
use App\Filament\Resources\DokumenPendukungResource\RelationManagers;
use App\Models\DokumenPendukung;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DokumenPendukungResource extends Resource
{
    protected static ?string $model = DokumenPendukung::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'Lainnya';
    protected static ?string $pluralLabel = 'Database Dokumen Pendukung';

    protected static ?string $navigationLabel = 'Database Dokumen Pendukung';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_file')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('file_path')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('jenis_dokumen')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ukuran')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('indikator_id')
                    ->relationship('indikator', 'id')
                    ->required(),
                Forms\Components\TextInput::make('tahun')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_file')
                    ->searchable(),
                Tables\Columns\TextColumn::make('file_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_dokumen')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ukuran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('indikator.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            //
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
