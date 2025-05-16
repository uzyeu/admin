<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DinasIndikatorResource\Pages;
use App\Filament\Resources\DinasIndikatorResource\RelationManagers;
use App\Models\DinasIndikator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DinasIndikatorResource extends Resource
{
    protected static ?string $model = DinasIndikator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            'index' => Pages\ListDinasIndikators::route('/'),
            'create' => Pages\CreateDinasIndikator::route('/create'),
            'edit' => Pages\EditDinasIndikator::route('/{record}/edit'),
        ];
    }
}
