<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenPendukungResource\Pages;
use App\Filament\Resources\DokumenPendukungResource\RelationManagers;
use App\Models\DokumenPendukung;
use Filament\Forms;
use App\Filament\Resources\AspekResource\Pages\{ViewADokumenPendukung, EditADokumenPendukung, ListADokumenPendukungs, CreateADokumenPendukung};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class DokumenPendukungResource extends Resource
{
    protected static ?string $model = DokumenPendukung::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'Lainnya';
    protected static ?string $pluralLabel = 'Daftar Dokumen Pendukung';

    protected static ?string $navigationLabel = 'Database Dokumen Pendukung';
    public static function getEloquentQuery(): Builder
{
    $query = parent::getEloquentQuery();
    $user = Auth::user();

    // Jika super admin (misal: punya akses ke semua indikator), tampilkan semua
    if ($user->is_super_admin ?? false) {
        return $query;
    }

    // Ambil ID indikator yang menjadi tanggung jawab user
    $userIndikatorIds = $user->indikators()->pluck('indikators.id');

    // Filter hanya dokumen dengan indikator_id yang dimiliki user
    return $query->whereIn('indikator_id', $userIndikatorIds);
}


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_file')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('attachment')
                    // ->multiple()                
                    ->required()
                    ->preserveFilenames()
                    ->downloadable()
                    ->directory('dokumen-pendukung')
                    ->acceptedFileTypes([
                        'application/pdf',
                        'application/msword',
                        'application/zip',
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
                    ]),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->default(\Illuminate\Support\Facades\Auth::user()?->id)
                    ->disabled()
                    ->dehydrated() // Tetap disimpan saat submit meskipun disabled
                    ->required(),
               Forms\Components\Select::make('indikator_id')
                    ->label('Indikator')
                    ->options(function () {
                        $user = \Illuminate\Support\Facades\Auth::user();
                        if (!$user) return [];
                        // Ambil indikator yang menjadi wewenang user
                        return $user->indikators()->pluck('nama_indikator', 'indikators.id');
                    })
                    ->required(),
                Forms\Components\TextInput::make('tahun')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_file')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attachment')
                    ->label('File')
                    ->formatStateUsing(fn ($state) => basename($state))
                    ->url(fn ($record) => \Illuminate\Support\Facades\Storage::url($record->attachment))
                    ->openUrlInNewTab()
                    ->extraAttributes(fn ($record) => [
                        'class' => 'text-primary-500 hover:underline',
                        'download' => basename($record->attachment)
                     ]),               
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Dinas')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('indikator.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun')
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
            'index' => Pages\ListDokumenPendukungs::route('/'),
            'create' => Pages\CreateDokumenPendukung::route('/create'),
            // 'view' => ViewDokumenPendukung::route('/{record}'), 
            'edit' => Pages\EditDokumenPendukung::route('/{record}/edit'),
        ];
    }
}
