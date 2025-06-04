<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Filament\Resources\Resource;

use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Lainnya';
    protected static ?int $navigationSort = 2;

    protected static ?string $pluralLabel = 'Daftar Berita SPBE';

    protected static ?string $navigationLabel = 'Daftar Berita SPBE';
    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->orderByDesc('created_at');
}

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->live(debounce: 500)
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')->disabled()->unique() ->dehydrated(),
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->imageEditor()
                    // ->multiple()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ]),
                Forms\Components\TextInput::make('author')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('isi_konten')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                // Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    // ->defaultSort('desc')
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

                // Tambahkan ini
                
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'view' => Pages\ViewBerita::route('/{record}'), 
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
