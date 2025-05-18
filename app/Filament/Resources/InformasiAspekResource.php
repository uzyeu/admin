<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiAspekResource\Pages;
use App\Filament\Resources\InformasiAspekResource\RelationManagers;
use App\Models\InformasiAspek;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiAspekResource extends Resource
{
    protected static ?string $model = InformasiAspek::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Aspek';
    // protected static ?int $navigationSort = 5; 
    protected static ?string $pluralLabel = 'Detail Informasi Aspek SPBE';

    protected static ?string $navigationLabel = 'Detail Informasi Aspek SPBE';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('indeks')
                    ->numeric(),
                Forms\Components\TextInput::make('tahun')
                    ->required(),
                Forms\Components\Select::make('aspek_id')
                    ->relationship('aspek', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('indeks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('aspek.id')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListInformasiAspeks::route('/'),
            'create' => Pages\CreateInformasiAspek::route('/create'),
            'edit' => Pages\EditInformasiAspek::route('/{record}/edit'),
        ];
    }
}
