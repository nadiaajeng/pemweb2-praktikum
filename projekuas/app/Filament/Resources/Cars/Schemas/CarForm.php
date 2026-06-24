<?php

namespace App\Filament\Resources\Posts\Schemas; // Sesuaikan namespace folder lu

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\CheckboxList;
use App\Models\Brand;
use App\Models\Feature;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // 1. Pilih Brand / Merek Mobil
                Select::make('brand_id')
                    ->label('Brand')
                    ->options(Brand::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                // 2. Nama Mobil
                TextInput::make('name')
                    ->label('Nama Mobil')
                    ->required(),

                // 3. Tipe Mobil (MPV, SUV, Sedan, dll)
                TextInput::make('type')
                    ->label('Tipe Mobil')
                    ->required(),

                // 4. Kapasitas Penumpang
                TextInput::make('passenger_capacity')
                    ->label('Kapasitas Penumpang')
                    ->numeric()
                    ->required(),

                // 5. Kapasitas Bagasi
                TextInput::make('luggage')
                    ->label('Bagasi')
                    ->required(),

                // 6. Harga per Hari
                TextInput::make('price_per_day')
                    ->label('Harga Per Hari')
                    ->numeric()
                    ->required(),

                // 7. Pilih Fitur / Fasilitas Mobil (Relasi Many-to-Many)
                CheckboxList::make('features')
                    ->label('Fasilitas Mobil')
                    ->relationship('features', 'name')
                    ->options(Feature::all()->pluck('name', 'id')),

                // 8. Upload Foto Mobil
                FileUpload::make('image')
                    ->label('Foto Mobil')
                    ->image()
                    ->directory('cars') // Otomatis masuk ke folder storage/app/public/cars
                    ->required(),
            ]);
    }
}