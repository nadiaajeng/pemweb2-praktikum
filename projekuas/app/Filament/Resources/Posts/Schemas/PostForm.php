<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema; // PAKAI SCHEMA
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
            ->components([ // PAKAI COMPONENTS SEPERTI BRANDFORM YANG SUKSES KEMAREN
                Select::make('brand_id')
                    ->label('Brand')
                    ->options(Brand::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                TextInput::make('name')
                    ->label('Nama Mobil')
                    ->required(),

                TextInput::make('type')
                    ->label('Tipe Mobil')
                    ->required(),

                TextInput::make('passenger_capacity')
                    ->label('Kapasitas Penumpang')
                    ->numeric()
                    ->required(),

                TextInput::make('luggage')
                    ->label('Bagasi')
                    ->required(),

                TextInput::make('price_per_day')
                    ->label('Harga Per Hari')
                    ->numeric()
                    ->required(),

                CheckboxList::make('features')
                    ->label('Fasilitas Mobil')
                    ->relationship('features', 'name')
                    ->options(Feature::all()->pluck('name', 'id')),

                FileUpload::make('image')
                    ->label('Foto Mobil')
                    ->image()
                    ->directory('cars')
                    ->required(),
            ]);
    }
}