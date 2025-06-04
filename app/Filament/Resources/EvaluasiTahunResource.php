<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvaluasiTahunResource\Pages;
use App\Filament\Resources\EvaluasiTahunResource\RelationManagers;
use App\Models\EvaluasiTahun;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use App\Filament\Widgets\GrafikIndeksSPBEdiresource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EvaluasiTahunResource extends Resource
{
    protected static ?string $model = EvaluasiTahun::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-trending-up';
    protected static ?string $navigationGroup = 'Lainnya';
        protected static ?int $navigationSort = 2;

    protected static ?string $pluralLabel = 'Riwayat Evaluasi SPBE';

    protected static ?string $navigationLabel = 'Riwayat Evaluasi SPBE';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tahun')
                    ->required(),
                Forms\Components\TextInput::make('indeks_akumulasi')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahun')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('indeks_akumulasi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                    // ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
                    // ->toggleable(isToggledHiddenByDefault: true),
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
        public static function getWidgets(): array
    {
        return [
            GrafikIndeksSPBEdiresource::class,
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
