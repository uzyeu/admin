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
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiIndikatorResource extends Resource
{
    protected static ?string $model = InformasiIndikator::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Indikator';
    // protected static ?int $navigationSort = 4; 

    protected static ?string $pluralLabel = 'Detail Informasi Indikator SPBE';

    protected static ?string $navigationLabel = 'Detail Informasi Indikator SPBE';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('indeks')
                    ->numeric(),
                Forms\Components\TextInput::make('tahun')
                    ->required(),
                Forms\Components\Select::make('indikator_id')
                    ->relationship('indikator', 'id')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_dokumen')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('is_updated')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('indeks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('indikator.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_dokumen')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_updated')
                    ->updateStateUsing(function (Model $record, $state) {
                        try {
                            $record->update(['is_updated' => $state]);
                            
                            Notification::make()
                                ->title('Status update berhasil diubah')
                                ->success()
                                ->send();
                        } catch (\Exception $e) {
                            Notification::make()
                                ->title('Gagal mengubah status')
                                ->danger()
                                ->send();
                            
                            throw $e;
                        }
                    }),
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
        ];
    }
}
