<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiIndikatorResource\Pages;
use App\Filament\Resources\InformasiIndikatorResource\RelationManagers;
use App\Models\InformasiIndikator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model; 
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiIndikatorResource extends Resource
{
    protected static ?string $model = InformasiIndikator::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Indikator';
    // protected static ?int $navigationSort = 4; 

    protected static ?string $pluralLabel = 'Detail Informasi Indikator SPBE';

    protected static ?string $navigationLabel = 'Detail Informasi Indikator SPBE';
    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();
        $user = Auth::user();

        // Jika super admin (nama_dinas null), tampilkan semua
        if (is_null($user->nama_dinas)) {
            return $query;
        }

        // Ambil ID indikator yang menjadi tanggung jawab user
        $userIndikatorIds = $user->indikators()->pluck('indikator_id');

        // Filter hanya informasi indikator dengan indikator_id yang dimiliki user
        return $query->whereIn('indikator_id', $userIndikatorIds);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('indikator_id')
                    ->relationship('indikator', 'id')
                    ->required(),
                Forms\Components\TextInput::make('tahun')
                    ->required(),
                Forms\Components\TextInput::make('indeks')
                    ->numeric(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                // Forms\Components\TextInput::make('jumlah_dokumen')
                //     ->required()
                //     ->numeric()
                //     ->default(0),
                // Forms\Components\Toggle::make('is_updated')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahun')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('indikator.id')
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('indeks')
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('user.nama_dinas')
                //     ->searchable()
                //     ->label('Nama Dinas')
                //     // ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('jumlah_dokumen')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\IconColumn::make('is_updated')
                    ->label('Status Update')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
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
                Tables\Actions\ViewAction::make(),
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
            'view' => Pages\ViewInformasiIndikator::route('/{record}'),

        ];
    }
}
