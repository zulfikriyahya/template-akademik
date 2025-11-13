<!-- Rombel Form -->

```php
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
```

<!-- Rombel Infolist -->

```php
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
                TextEntry::make('siswas')
                    ->label('Siswa')
                    ->getStateUsing(fn (Rombel $record): string => $record->siswas
                        ->pluck('nama')
                        ->implode(', ')
                    )
                    ->placeholder('-'),
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
```

<!-- Rombel Tabel -->

```php
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
```
