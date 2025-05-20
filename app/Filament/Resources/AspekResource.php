<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AspekResource\Pages;
use App\Filament\Resources\AspekResource\Pages\{ViewAspek, EditAspek, ListAspeks, CreateAspek};
use App\Filament\Resources\AspekResource\RelationManagers;
use App\Models\Aspek;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AspekResource extends Resource
{
    protected static ?string $model = Aspek::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationGroup = 'Aspek';
    // protected static ?int $navigationSort = 5; 
    // protected static ?string $navigationLabel = 'Berita Tentang SPBE';

    // protected static ?string $navigationGroup = 'Berita Tentang SPBE'; ini untuk navigasi grup
    // protected static ?string $pluralLabel = 'Daftar Aspek SPBE';
    // protected static ?string $navigationLabel = 'Daftar Aspek SPBE';
    // protected static ?string $pluralModelLabel = 'Daftar Indikator';
    // protected static ?string $singularLabel = 'Daftar Indikator';
    // protected static ?string $singularModelLabel = 'Daftar Indikator';

    protected static ?string $modelLabel = 'Aspek SPBE';
    protected static ?string $pluralModelLabel = 'Daftar Aspek SPBE';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_aspek')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('urutan_aspek')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('urutan_aspek')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_aspek')
                    ->searchable(),
                
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
            
                ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAspeks::route('/'),
            'create' => Pages\CreateAspek::route('/create'),
             'view' => ViewAspek::route('/{record}'), 
            'edit' => Pages\EditAspek::route('/{record}/edit'),
        ];
    }
}
