<?php

namespace App\Filament\Resources\Rombels\Schemas;

use App\Models\Rombel;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RombelInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama'),
                TextEntry::make('instansi.nama')
                    ->label('Instansi'),
                TextEntry::make('tahunPelajaran.nama')
                    ->label('Tahun pelajaran'),
                TextEntry::make('kelas.nama')
                    ->label('Kelas'),
                TextEntry::make('guru.nama')
                    ->label('Guru'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Rombel $record): bool => $record->trashed()),
            ]);
    }
}
