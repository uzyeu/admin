<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenPendukungResource\Pages;
use App\Models\DokumenPendukung;
use Filament\Forms;
use App\Models\Indikator;
use App\Models\EvaluasiTahun;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Support\Facades\Storage;
use App\Models\AdminDinas;
use Filament\Tables\Table;

class DokumenPendukungResource extends Resource
{
    protected static ?string $model = DokumenPendukung::class;
    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationLabel = 'Daftar Dokumen Pendukung';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('file_path')
                    ->required()
                    ->directory('dokumen-pendukung') 
                    ->preserveFilenames()
                    ->downloadable() 
                     ->openable(),
                    // ->placeholder('Pilih dokumen pendukung'),

                Forms\Components\Select::make('admin_dinas_id')
                    ->label('Admin Dinas')
                    ->options(AdminDinas::all()->pluck('nama_dinas', 'id'))
                    ->required()
                    ->searchable(),

                Forms\Components\Select::make('urutan_indikator')
                    ->label('Indikator')
                    ->options(Indikator::all()->pluck('nama_indikator', 'urutan_indikator'))
                    ->required()
                    ->searchable(),

                Forms\Components\Select::make('tahun')
                    ->label('Tahun Evaluasi')
                    ->options(EvaluasiTahun::all()->pluck('tahun', 'tahun'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 Tables\Columns\TextColumn::make('file_path')
                    ->label('Nama Dokumen')
                    ->searchable()
                    ->formatStateUsing(fn ($state) => basename($state)),
                
                Tables\Columns\TextColumn::make('adminDinas.nama_dinas')
                    ->label('Admin Dinas')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('indikator.nama_indikator')
                    ->label('Indikator')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('tahun')
                    ->sortable(),
                
                Tables\Columns\IconColumn::make('file_path')
                    ->label('File')
                    ->icon('heroicon-o-document-text')
                    ->url(fn ($record) => Storage::url($record->file_path), true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('tahun')
                    ->options(EvaluasiTahun::all()->pluck('tahun', 'tahun')),
                
                Tables\Filters\SelectFilter::make('admin_dinas_id')
                    ->label('Admin Dinas')
                    ->options(AdminDinas::all()->pluck('nama_dinas', 'id')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
          
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->url(fn ($record) => Storage::url($record->file_path))
                    ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
