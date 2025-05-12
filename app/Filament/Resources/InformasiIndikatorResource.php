<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiIndikatorResource\Pages;
use App\Filament\Resources\InformasiIndikatorResource\RelationManagers;
use App\Models\InformasiIndikator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiIndikatorResource extends Resource
{
    protected static ?string $model = InformasiIndikator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Detail Informasi Indikator';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListInformasiIndikators::route('/'),
            'create' => Pages\CreateInformasiIndikator::route('/create'),
            'edit' => Pages\EditInformasiIndikator::route('/{record}/edit'),
        ];
    }
}
