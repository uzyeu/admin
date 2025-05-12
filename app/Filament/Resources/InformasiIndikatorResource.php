<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiIndikatorResource\Pages;
use App\Filament\Resources\InformasiIndikatorResource\RelationManagers;
use App\Models\InformasiIndikator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use App\Models\AdminDinas;
use App\Models\DokumenPendukung;
use App\Models\Indikator;
use App\Models\EvaluasiTahun;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiIndikatorResource extends Resource
{
    protected static ?string $model = InformasiIndikator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Detail Informasi Indikator';

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
                Tables\Columns\TextColumn::make('adminDinas.nama_dinas')
                    ->label('Admin Dinas')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('indikator.nama_indikator')
                    ->label('Indikator')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                
                Tables\Columns\TextColumn::make('tahun')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('indeks')
                    ->sortable()
                    ->color(fn (float $state) => match (true) {
                        $state >= 4 => 'success',
                        $state >= 3 => 'info',
                        $state >= 2 => 'warning',
                        default => 'danger',
                    }),
                
               Tables\Columns\TextColumn::make('jumlah_dokumen')
                        ->label('Jml Dokumen')
                        ->sortable()
                        ->getStateUsing(function ($record) {
                            // Hitung jumlah dokumen berdasarkan indikator dan tahun
                            return DokumenPendukung::where('urutan_indikator', $record->urutan_indikator)
                                ->whereYear('created_at', $record->tahun)
                                ->count();
                    }),
                
                Tables\Columns\IconColumn::make('is_updated')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),



            ])
            ->filters([
                //
                Tables\Filters\SelectFilter::make('tahun')
                    ->options(EvaluasiTahun::all()->pluck('tahun', 'tahun')),
                
                Tables\Filters\SelectFilter::make('admin_dinas_id')
                    ->label('Admin Dinas')
                    ->options(AdminDinas::all()->pluck('nama_dinas', 'id')),
                
                Tables\Filters\SelectFilter::make('urutan_indikator')
                    ->label('Indikator')
                    ->options(Indikator::all()->pluck('nama_indikator', 'urutan_indikator')),
                
                Tables\Filters\TernaryFilter::make('is_updated')
                    ->label('Status Update')
                    ->placeholder('Semua')
                    ->trueLabel('Sudah Update')
                    ->falseLabel('Belum Update'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('toggleUpdate')
                    ->label(fn ($record) => $record->is_updated ? 'Tandai Belum Selesai' : 'Tandai Selesai')
                    ->icon(fn ($record) => $record->is_updated ? 'heroicon-o-x-mark' : 'heroicon-o-check')
                    ->color(fn ($record) => $record->is_updated ? 'danger' : 'success')
                    ->action(function ($record) {
                        $record->update(['is_updated' => !$record->is_updated]);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('tahun', 'desc');
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
