<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-truck';
    
    protected static ?string $navigationLabel = 'Cars';

    // Form v5 menggunakan Schema
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\Select::make('brand_id')
                    ->relationship('brand', 'name')
                    ->required()
                    ->searchable(),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('type')
                    ->options([
                        'MPV' => 'MPV',
                        'SUV' => 'SUV',
                        'Sedan' => 'Sedan',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('passenger_capacity')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('luggage')
                    ->placeholder('Contoh: 2 Koper')
                    ->required(),

                Forms\Components\TextInput::make('price_per_day')
                    ->numeric()
                    ->prefix('Rp ')
                    ->required(),

                Forms\Components\Select::make('label')
                    ->options([
                        'Populer' => 'Populer',
                        'VIP' => 'VIP',
                        'Ekonomis' => 'Ekonomis',
                    ]),
                
                Forms\Components\Select::make('features')
                    ->relationship('features', 'name')
                    ->multiple()
                    ->preload()
                    ->required(),

                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('cars')
                    ->required(),
            ]);
    }

    // Table menggunakan Tables\Table
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),

                Tables\Columns\TextColumn::make('brand.name')
                    ->label('Brand')
                    ->sortable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Car Name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('price_per_day')
                    ->label('Price / Day')
                    ->money('IDR')
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    // Namespace Pages ini dijamin aman karena posisinya sudah default framework
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}