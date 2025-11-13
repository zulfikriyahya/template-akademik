<?php

namespace App\Filament\Resources\Rombels\Schemas;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Instansi;
use Filament\Schemas\Schema;
use App\Models\TahunPelajaran;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class RombelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('instansi_id')
                ->relationship('instansi', 'nama')
                ->required(),
                // ->reactive()
                // ->afterStateUpdated(function ($set, $state, $get) {
                //     $set('nama', static::generateNama($get));
                // }),

            Select::make('tahun_pelajaran_id')
                ->relationship('tahunPelajaran', 'nama')
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($set, $state, $get) {
                    $set('nama', static::generateNama($get));
                }),

            Select::make('kelas_id')
                ->relationship('kelas', 'nama')
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($set, $state, $get) {
                    $set('nama', static::generateNama($get));
                }),

            Select::make('guru_id')
                ->relationship('guru', 'nama')
                ->required(),
                // ->reactive()
                // ->afterStateUpdated(function ($set, $state, $get) {
                //     $set('nama', static::generateNama($get));
                // }),

            Select::make('siswas')
                ->relationship('siswas', 'nama')
                ->multiple()
                ->preload()
                ->searchable()
                ->required(),

            TextInput::make('nama')
                ->required()
                ->dehydrated()
                ->readOnly()
                ->reactive()
                ->afterStateHydrated(fn ($component, $state) => $component->state($state)),

        ]);
    }

    protected static function generateNama($get): string
    {
        $kelasNama = optional(Kelas::find($get('kelas_id')))->nama;
        $tahunNama = optional(TahunPelajaran::find($get('tahun_pelajaran_id')))->nama;
        // $instansiNama = optional(Instansi::find($get('instansi_id')))->nama;
        // $guruNama = optional(Guru::find($get('guru_id')))->nama;

        return trim("{$kelasNama} - {$tahunNama}");
        // return trim("{$instansiNama} - {$tahunNama} - {$kelasNama}");
        // return trim("{$instansiNama} - {$tahunNama} - {$kelasNama} - {$guruNama}");
    }
}
