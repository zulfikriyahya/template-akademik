<?php

namespace App\Filament\Resources\Rombels\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class RombelsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('instansi.nama')
                    ->searchable(),
                TextColumn::make('tahunPelajaran.nama')
                    ->searchable(),
                TextColumn::make('kelas.nama')
                    ->searchable(),
                // TAMBAHKAN INI - Menampilkan daftar siswa
                TextColumn::make('siswas.nama')
                    ->label('Siswa')
                    ->badge() // Tampil sebagai badge
                    ->separator(',') // Pisahkan dengan koma
                    ->searchable()
                    ->limit(3) // Batasi tampilan, sisanya "..."
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (is_array($state) && count($state) > 3) {
                            return implode(', ', $state);
                        }

                        return null;
                    }),

                // ATAU gunakan ini untuk menampilkan jumlah siswa
                TextColumn::make('siswas_count')
                    ->label('Jumlah Siswa')
                    ->counts('siswas')
                    ->sortable(),
                TextColumn::make('guru.nama')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
                // Filter berdasarkan siswa
                SelectFilter::make('siswas')
                    ->relationship('siswas', 'nama')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->label('Filter Siswa'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
