<?php

namespace App\Filament\Resources\Posts;

use App\Filament\Resources\Posts\Pages\CreatePost;
use App\Filament\Resources\Posts\Pages\EditPost;
use App\Filament\Resources\Posts\Pages\ListPosts;
use App\Filament\Resources\Posts\Tables\PostsTable;
use App\Models\Post;
use App\Models\Brand;
use App\Models\Feature;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\CheckboxList;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $recordTitleAttribute = 'name'; 

    public static function form(Schema $schema): Schema
    {
        // Panggil paksa fungsi array komponen di bawah
        return $schema->components(static::getFormComponents());
    }

    // Kita bikin fungsi mandiri khusus penampung komponen form lu bos
    public static function getFormComponents(): array
    {
        return [
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
                ->disk('public')
                ->directory('cars')
                ->required(),
        ];
    }

    public static function table(Table $table): Table
    {
        return PostsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'edit' => EditPost::route('/{record}/edit'),
        ];
    }
}