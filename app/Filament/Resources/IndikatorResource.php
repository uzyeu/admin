<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndikatorResource\Pages;
use App\Filament\Resources\IndikatorResource\RelationManagers;
use App\Models\Indikator;
use Filament\Forms;
use App\Filament\Resources\IndikatorResource\Pages\{ViewIndikator, EditIndikator, ListIndikators, CreateIndikator};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
// use Filament\Resources\Resource;
// use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class IndikatorResource extends Resource
{
    protected static ?string $model = Indikator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Indikator';
    // protected static ?int $navigationSort = 4; 

    // protected ?string $subheading = 'Custom Page Subheading';

        // protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    

    protected static ?string $navigationLabel = 'Daftar Indikator SPBE';
    protected static ?string $pluralLabel = 'Daftar Indikator SPBE';
        public static function getEloquentQuery(): Builder
    {
        $user = Auth::user();

        // Super Admin: bisa lihat semua indikator
        if (is_null($user->nama_dinas)) {
            return parent::getEloquentQuery();
        }

        // Admin Dinas: hanya indikator yang ada di tabel pivot
        return parent::getEloquentQuery()
            ->whereHas('users', function (Builder $query) use ($user) {
                $query->where('user_id', $user->id);
            });
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('urutan_indikator')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama_indikator')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('deskripsi')
                    ->columnSpanFull(),
                Forms\Components\Select::make('aspek_id')
                    ->relationship('aspek', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('urutan_indikator')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_indikator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('aspek.id')
                    ->numeric()
                    ->searchable()
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListIndikators::route('/'),
            'create' => Pages\CreateIndikator::route('/create'),
            'view' => ViewIndikator::route('/{record}'), 
            'edit' => Pages\EditIndikator::route('/{record}/edit'),
        ];
    }
}
