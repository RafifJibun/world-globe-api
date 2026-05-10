<?php

namespace App\Filament\Resources\FunFactGenerates\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FunFactGenerateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('country_name')
                    ->required()
                    ->label('Nama Negara'),
                Textarea::make('fact')
                    ->required()
                    ->label('Fun Fact')
                    ->rows(4),
            ]);
    }
}
