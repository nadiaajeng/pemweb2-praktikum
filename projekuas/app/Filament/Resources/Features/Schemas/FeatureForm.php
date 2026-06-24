<?php

namespace App\Filament\Resources\Features\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput; // Import Filament v5 yang bener

class FeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Pastiin 'name' ini huruf kecil semua dan sesuai dengan nama kolom di migration features lu!
                TextInput::make('name')
                    ->required(),
            ]);
    }
}