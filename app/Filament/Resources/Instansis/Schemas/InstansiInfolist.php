<?php

namespace App\Filament\Resources\Instansis\Schemas;

use App\Models\Instansi;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class InstansiInfolist
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
                    ->visible(fn (Instansi $record): bool => $record->trashed()),
            ]);
    }
}
