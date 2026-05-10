<?php

namespace App\Filament\Resources\Attractions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AttractionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('country_name')
                    ->required()
                    ->label('Nama Negara'),
                TextInput::make('name')
                    ->required()
                    ->label('Nama Tempat Wisata'),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(4),
                TextInput::make('image_url')
                    ->label('URL Gambar'),
            ]);
    }
}