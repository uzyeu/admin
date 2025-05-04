<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenPendukungResource\Pages;
use App\Filament\Resources\DokumenPendukungResource\RelationManagers;
use App\Models\DokumenPendukung;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DokumenPendukungResource extends Resource
{
    protected static ?string $model = DokumenPendukung::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                // Forms\Components\TextInput::make('Nama File')
                // ->helperText('Masukan nama file')
                // ->required()
                // ->maxLength(255),

                Forms\Components\FileUpload::make('Dokumen')
                ->required()
                ->panelLayout('grid')
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
            'index' => Pages\ListDokumenPendukungs::route('/'),
            'create' => Pages\CreateDokumenPendukung::route('/create'),
            'edit' => Pages\EditDokumenPendukung::route('/{record}/edit'),
        ];
    }
}
