<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvaluasiTahunResource\Pages;
use App\Filament\Resources\EvaluasiTahunResource\RelationManagers;
use App\Models\EvaluasiTahun;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EvaluasiTahunResource extends Resource
{
    protected static ?string $model = EvaluasiTahun::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'History Evaluasi SPBE ';

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
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('indeks_akumulasi'),
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
            'index' => Pages\ListEvaluasiTahuns::route('/'),
            'create' => Pages\CreateEvaluasiTahun::route('/create'),
            'edit' => Pages\EditEvaluasiTahun::route('/{record}/edit'),
        ];
    }
}
