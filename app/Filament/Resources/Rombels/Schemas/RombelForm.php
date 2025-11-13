<?php

namespace App\Filament\Resources\Rombels\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class RombelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                Select::make('instansi_id')
                    ->relationship('instansi', 'nama')
                    ->required(),
                Select::make('tahun_pelajaran_id')
                    ->relationship('tahunPelajaran', 'nama')
                    ->required(),
                Select::make('kelas_id')
                    ->relationship('kelas', 'nama')
                    ->required(),
                Select::make('guru_id')
                    ->relationship('guru', 'nama')
                    ->required(),
                Select::make('siswas')
                    ->relationship('siswas', 'nama')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->required(),
            ]);
    }
}
