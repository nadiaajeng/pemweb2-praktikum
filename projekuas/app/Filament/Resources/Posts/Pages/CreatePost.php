<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Schemas\Schema;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    // GANTI PROTECTED JADI PUBLIC DI SINI BOS!
    public function form(Schema $schema): Schema
    {
        return PostResource::form($schema);
    }
}