<?php

namespace App\Filament\Resources\Armadas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;

class ArmadaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Mobil')
                    ->required()
                    ->placeholder('Contoh: Toyota Alphard'),

                TextInput::make('tipe')
                    ->label('Tipe / Kelas')
                    ->placeholder('Contoh: Luxury MPV, MPV Premium, SUV'),

                Textarea::make('deskripsi')
                    ->label('Deskripsi Mobil')
                    ->placeholder('Masukkan penjelasan singkat mengenai mobil...'),

                FileUpload::make('gambar')
                    ->label('Foto Mobil')
                    ->image()
                    ->disk('public')
                    ->directory('armada')
                    ->required(),

                TextInput::make('kapasitas_penumpang')
                    ->label('Kapasitas Penumpang')
                    ->numeric()
                    ->default(5),

                TextInput::make('kapasitas_koper')
                    ->label('Kapasitas Koper')
                    ->numeric()
                    ->default(2),

                TagsInput::make('fitur')
                    ->label('Fitur Tambahan')
                    ->placeholder('Tambah fitur (Tekan Enter)...'),

                TextInput::make('harga_per_hari')
                    ->label('Harga Sewa Per Hari')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),
            ]);
    }
}