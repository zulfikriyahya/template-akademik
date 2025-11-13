<?php

namespace App\Filament\Resources\TahunPelajarans\Schemas;

use App\Models\TahunPelajaran;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TahunPelajaranInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (TahunPelajaran $record): bool => $record->trashed()),
            ]);
    }
}
