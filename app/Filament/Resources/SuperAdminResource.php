<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuperAdminResource\Pages;
use App\Filament\Resources\SuperAdminResource\RelationManagers;
use App\Models\SuperAdmin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuperAdminResource extends Resource
{
    protected static ?string $model = SuperAdmin::class;

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
            'index' => Pages\ListSuperAdmins::route('/'),
            'create' => Pages\CreateSuperAdmin::route('/create'),
            'edit' => Pages\EditSuperAdmin::route('/{record}/edit'),
        ];
    }
}
