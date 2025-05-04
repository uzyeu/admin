<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdminDinasResource\Pages;
use App\Filament\Resources\AdminDinasResource\RelationManagers;
use App\Models\AdminDinas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdminDinasResource extends Resource
{
    protected static ?string $model = AdminDinas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('email')
            ->placeholder('Masukkan email')
            ->required()
            ->suffix('@gmail.com')
            ->maxLength(255)
            ->dehydrateStateUsing(function ($state) {
                return str_ends_with($state, '@gmail.com') ? $state : $state . '@gmail.com';
            }),

        Forms\Components\TextInput::make('nama_dinas')
            ->placeholder('Pilih dinas terkait')
            ->required()
            ->datalist([
                'DISKOMINFO',
                'SETDAKO',
                'INSPEKTORAT',
                'BKPSDM',
                'BAPPEDA',
                'BKD',
                'DINAS PERPUSTAKAAN',
                'DPMPTSP',
                'DISDUKCAPIL',
                'DINAS KESEHATAN',
                'DINAS SOSIAL',
            ]),

        Forms\Components\TextInput::make('kata_sandi')
            ->placeholder('Masukkan kata sandi')
            ->required()
            ->password()
            ->revealable()
            ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('email'),

                Tables\Columns\TextColumn::make('nama_dinas')
                ->searchable(),
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
    public static function getTableSearchPlaceholder(): ?string
{
    return 'Cari dinas';
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
            'index' => Pages\ListAdminDinas::route('/'),
            'create' => Pages\CreateAdminDinas::route('/create'),
            'edit' => Pages\EditAdminDinas::route('/{record}/edit'),
        ];
    }
}
